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
                    'class' => 'a',
                    'class_for_errors' => 'error'
                ]
            ])
            // another form field with no defaults, should not be impacted at all
            ->add('another', TextareaType::class, [
                'attr' => [
                    'other' => 'thing',
                    'class_for_errors' => 'different-error'
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