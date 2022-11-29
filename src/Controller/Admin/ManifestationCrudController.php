<?php

namespace App\Controller\Admin;

use App\Entity\Manifestation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ManifestationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Manifestation::class;
    }


    public function configureFields(string $pagename): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('titre'),
            ImageField::new('affiche')->setBasePath('media/')->setUploadDir('public/media/'),
            TextEditorField::new('casting'),
            TextEditorField::new('description'),
            IntegerField::new('prix'),
            TextEditorField::new('date'),
            AssociationField::new('lieu', 'Lieu')
        ];
    }

}
