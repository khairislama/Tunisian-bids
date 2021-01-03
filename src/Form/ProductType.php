<?php

namespace App\Form;

use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('category',ChoiceType::class,[
                'choices' => [
                    'Informatique' => "info",
                    'Eléctroménager' => "electro",
                    'Maisons' => "maison",
                    'Téléphonie' => "tels",
                    'Télévisions' => "tv",
                    'Appareil photo et caméras' => "cams",
                    'Articles de sport' => "sport",
                    'Auto & Moto' => "auto",
                    'Autres' => "autre"
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => "Catégorie"
            ])
            ->add('name',TextType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => "Titre du produit"
            ])
            ->add('price',NumberType::class, [
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => "Le prix de départ"
            ])
            ->add('description',TextareaType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'rows' => '3'
                ],
                'label' => "Une petite description"
            ])
            ->add('dateend',ChoiceType::class,[
                'choices' => [
                    '1 jour' => "1",
                    '2 jours' => "2",
                    '3 jours' => "3"
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'label' => "nombre de jours"
            ])
            ->add('imageFile',VichImageType::class, [
                'attr' => [
                    'class' => 'form-control form-control-sm'
                ],
                'label' => "L'image du produit"
            ])
            ->add('Submit',SubmitType::class,[
                'attr' => [
                    'class' => 'btn btn-success mt-3'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
