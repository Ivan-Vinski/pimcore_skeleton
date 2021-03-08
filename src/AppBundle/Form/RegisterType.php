<?php


namespace AppBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Firstname:'
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Lastname:'
            ])
            ->add('email', EmailType::class)
            ->add('street', TextType::class)
            ->add('city', TextType::class)
            ->add('zip', TextType::class)
            ->add('country_code', ChoiceType::class, [
                'choices' => $options['countries']
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => [new Length([
                    'min' => 2,
                    'minMessage' => 'Password must contain at least 2 chars'
                ])],
                'invalid_message' => 'Passwords must match',
                'required' => true,
                'first_options' => ['label' => 'Password:'],
                'second_options' => ['label' => 'Repeat password:']
            ])
            ->add('submit', SubmitType::class);
    }

    public function getBlockPrefix()
    {
        return '';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'countries' => null
        ]);
    }
}
