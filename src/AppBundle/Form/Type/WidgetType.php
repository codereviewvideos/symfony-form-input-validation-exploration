<?php

namespace AppBundle\Form\Type;

use AppBundle\Entity\Widget;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WidgetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => [
                    'class'                  => 'a',
                    // this will only show if there are errors on the form
                    // but allows you to customise which class to add
                    // when there are errors
                    'custom-error-css-class' => 'b',
                ]
            ])
            // another form field with no defaults, should not be impacted at all
            ->add('another', TextareaType::class, [
                'attr' => [
                    'class'                  => 'a',
                    // this will only show if there are errors on the form
                    // but allows you to customise which class to add
                    // when there are errors
                    'custom-error-css-class' => 'b c',
                ]
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Widget::class,
            'attr' => [
                'novalidate' => 'novalidate'
            ]
        ]);
    }
}