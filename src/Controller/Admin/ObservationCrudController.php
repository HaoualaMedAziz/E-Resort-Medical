<?php

namespace App\Controller\Admin;

use App\Entity\Observation;
use DateTime;
use DateTimeImmutable;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class ObservationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Observation::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('resident'),
            TextEditorField::new('description'),
            DateTimeField::new('createdAt'),

        ];
    }

    public function createEntity(string $entityFqcn)
    {
        $observation = new Observation();
        $observation->setCreatedAt(new DateTimeImmutable()); // Set the createdAt field to the current date and time
        return $observation;
    }
    
}
