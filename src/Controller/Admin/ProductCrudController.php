<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_EDIT, Action::INDEX)
                        ->add(Crud::PAGE_INDEX, Action::DETAIL)
                        ->add(Crud::PAGE_EDIT, Action::DETAIL);
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            TextField::new('description'),
            TextareaField::new('more_information'),
            MoneyField::new('price')->setCurrency("EUR"),
            BooleanField::new('isNewProduct'),
            AssociationField::new('categories'),
            AssociationField::new('genders'),
            AssociationField::new('colors'),
            ImageField::new('imageUrls')->setFormTypeOptions([ "multiple"=>true,
                                  'attr'=>['accept'=> 'image/*']  
                               ])
                                    ->setBasePath("assets/images/products")
                                    ->setUploadDir("/public/assets/images/products")
                                    ->setUploadedFileNamePattern('[randomhash].[extension]')
                                    ->setRequired($pageName === Crud::PAGE_NEW),
            IntegerField::new('quantity'),
            
        ];
    }

}
