<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CheckoutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('street', TextType::class, [
                'label' => 'Street',
                'data' => $options['street'],
                'required' => true
            ])
            ->add('city', TextType::class, [
                'label' => 'City',
                'data' => $options['city'],
                'required' => true
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Confirm'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'street' => null,
            'city' => null
        ]);
    }

    public function getBlockPrefix()
    {
        return '';
    }
}
