<?php

namespace App\Form;

use App\Entity\Manifestation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ManifestationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            /*->add('lieu', ChoiceType::Class, [
                'choices' => [
                    array_combine()
                ]
            ])
            ->add('genre', ChoiceType::Class, [
                'choices' => [
                    array_combine()
                ]
            ])*/
        ;
    }
}
