<?php


namespace AppBundle\Controller;

use AppBundle\Services\CountryProvider;
use CustomerManagementFrameworkBundle\CustomerProvider\CustomerProviderInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Routing\Annotation\Route;
use Pimcore\Controller\FrontendController;
use AppBundle\Form\LoginType;
use AppBundle\Form\RegisterType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use CustomerManagementFrameworkBundle\CustomerDuplicatesService\CustomerDuplicatesServiceInterface;


class AccountController extends FrontendController
{
    public function onKernelController(FilterControllerEvent $event)
    {
        parent::onKernelController($event);
        $this->setViewAutoRender($event->getRequest(), true, 'twig');
    }

    /**
     * @Route ("/account/register", name="app_register", methods={"POST", "GET"})
     * @param Request $request
     * @param CustomerProviderInterface $customerProvider
     * @param CountryProvider $countryProvider
     * @param CustomerDuplicatesServiceInterface $customerDuplicatesService
     * @return mixed
     */
    public function registerAction(
        Request $request,
        CustomerProviderInterface $customerProvider,
        CountryProvider $countryProvider,
        CustomerDuplicatesServiceInterface $customerDuplicatesService
    ) {
        if ($this->getUser()) {
            return $this->redirect($this->generateUrl('app_dashboard'));
        }

        $countries = $countryProvider->getCountries();
        $form = $this->createForm(RegisterType::class, null, ['countries' => $countries]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $data = [
                'firstname' => $request->get('firstname'),
                'lastname' => $request->get('lastname'),
                'email' => $request->get('email'),
                'street' => $request->get('street'),
                'zip' => $request->get('zip'),
                'country_code' => $request->get('country_code'),
                'password' => $request->get('password')['first']
            ];

            $customer = $customerProvider->create($data);
            if ($customerDuplicatesService->getDuplicatesOfCustomer($customer, 1)) {
                $form->addError(new FormError('Duplicate entry'));
            }

            $customer->save();
            return $this->redirect($this->generateUrl('app_login'));

        }

        $this->view->form = $form->createView();
    }

    /**
     * @Route ("/account/login", name="app_login", methods={"POST", "GET"})
     * @param Request $request
     * @param AuthenticationUtils $authenticationUtils
     * @return mixed
     */
    public function loginAction(
        Request $request,
        AuthenticationUtils $authenticationUtils
    ) {
        if ($this->getUser()) {
            return $this->redirect($this->generateUrl('app_dashboard'));
        }

        $email = $authenticationUtils->getLastUsername();
        $error = $authenticationUtils->getLastAuthenticationError();
        $form = $this->createForm(LoginType::class, null, ['email' => $email]);

        $this->view->error = $error;
        $this->view->form = $form->createView();

    }

    /**
     * @Route ("/logout", name="app_logout", methods={"GET"})
     */
    public function logoutAction()
    {

    }
}
