<?php

namespace App\Controller\Admin;

use App\Entity\MedicalHistory;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;


class MedicalHistoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MedicalHistory::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('id'),
            Field::new('disease'),
            Field::new('medecine1'),
            Field::new('medecine2'),
            AssociationField::new('images')
        ];
    }

}
