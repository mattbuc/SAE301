<?php

namespace App\Form;

use App\Entity\Lieu;
use App\Entity\Manifestation;
use App\Repository\ManifestationRepository;
use Doctrine\ORM\Mapping\Entity;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ManifestationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Titre')
            /*->add('Genre', EntityType::class, [
                'class' => Manifestation::class,
                'multiple' => false,
                'expanded' => false,
                'choice_label' => 'Genre',
    ])*/
            ->add('Lieu', EntityType::class, [
                'class' => Lieu::class,
                'choice_label' => 'Lieu',
            ])
            ->add('Chercher', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Manifestation::class,
        ]);
    }
}
