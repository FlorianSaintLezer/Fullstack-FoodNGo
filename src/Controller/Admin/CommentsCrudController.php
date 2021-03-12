<?php

namespace App\Controller\Admin;

use App\Entity\Comments;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class CommentsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Comments::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('recipe', 'Which recipe ?'),
            AssociationField::new('author', 'Which user ?'),
            TextareaField::new('content', 'Your comment')
            
            
        ];
    }
}
