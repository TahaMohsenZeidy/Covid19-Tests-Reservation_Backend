<?php

namespace App\Controller\Admin;

use App\Entity\Rdv;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;


class RdvCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Rdv::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            Field::new('id'),
            AssociationField::new('symptomes'),
            AssociationField::new('travel'),
            AssociationField::new('patient'),
            AssociationField::new('place'),
            Field::new('date'),
            Field::new('result')
        ];
    }

}
