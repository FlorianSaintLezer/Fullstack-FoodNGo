<?php

namespace App\Controller\Admin;

use App\Entity\Partners;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PartnersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Partners::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            TextField::new('link'),
        ];
    }
}
