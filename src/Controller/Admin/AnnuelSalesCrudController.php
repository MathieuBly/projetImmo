<?php

namespace App\Controller\Admin;

use App\Entity\AnnuelSales;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class AnnuelSalesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return AnnuelSales::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
