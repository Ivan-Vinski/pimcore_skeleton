<?php

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Symfony\Component\Security\Guard\PasswordAuthenticatedInterface;
use AppBundle\Model\DataObject\Customer;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class LoginFormAuthenticator extends AbstractGuardAuthenticator implements PasswordAuthenticatedInterface
{
    public const LOGIN_ROUTE = 'app_login';

    private $passwordEncoder;

    /**
     * LoginFormAuthenticator constructor.
     * @param UserPasswordEncoderInterface $passwordEncoder
     */
    public function __construct( UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    /**
     * @param Request $request
     * @return bool
     */
    public function supports(Request $request): bool
    {
        return self::LOGIN_ROUTE === $request->attributes->get('_route') && $request->isMethod('POST');
    }

    /**
     * @param Request $request
     * @return array
     */
    public function getCredentials(Request $request): array
    {
        $credentials = [
            'email' => $request->request->get('email'),
            'password' => $request->request->get('password'),
            'csrf_token' => $request->request->get('_token')
        ];
        $request->getSession()->set(Security::LAST_USERNAME, $credentials['email']);

        //dd($credentials);
        return $credentials;
    }

    /**
     * @param mixed $credentials
     * @param UserProviderInterface $userProvider
     * @return mixed|UserInterface|null
     */
    public function getUser($credentials, UserProviderInterface $userProvider): ?UserInterface
    {
        $listing = Customer::getByEmail($credentials['email']);
        //dd($listing);
        $customer = $listing->getData()[0];

        if (!$customer) {
            throw new CustomUserMessageAuthenticationException('Customer with given email not found');
        }
        //dd($customer);
        return $customer;
    }

    /**
     * @param mixed $credentials
     * @param UserInterface $user
     * @return bool
     */
    public function checkCredentials($credentials, UserInterface $user): bool
    {
        $validPass = $this->passwordEncoder->isPasswordValid($user, $credentials['password']);
        if ($validPass) {
            return true;
        }
        else {
            throw new CustomUserMessageAuthenticationException('Wrong credentials');
        }
    }

    /**
     * @param Request $request
     * @param TokenInterface $token
     * @param string $providerKey
     * @return RedirectResponse
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, $providerKey): RedirectResponse
    {
        return new RedirectResponse('/dashboard');
    }

    /**
     * @param mixed $credentials
     * @return string|null
     */
    public function getPassword($credentials): ?string
    {
        //dd($credentials);
        return $credentials['password'];
    }

    /**
     * @param Request $request
     * @param AuthenticationException $exception
     * @return RedirectResponse
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception): RedirectResponse
    {
        $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception->getMessage());
        //dd($exception);
        return new RedirectResponse('/account/login/');
    }

    /**
     * @param Request $request
     * @param AuthenticationException|null $authException
     * @return Response
     */
    public function start(Request $request, AuthenticationException $authException = null): Response
    {
    }

    /**
     * @return bool
     */
    public function supportsRememberMe(): bool
    {
        return true;
    }
}
