<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre', TextType::class, [
            'required' => false,
            'empty_data' => '',
            'constraints' => [
                new Length([
                    'min' => 10,
                    'minMessage' => " Saisir un titre d'au moins 10 caractères "
                ])
            ]
            ])
            ->add('description')
            ->add('photoForm', FileType::class, [
                'mapped' => false,
                'required' => false
            ])
           
            ->add('categorie', EntityType::class, [
                'class' => Categorie::class,
                'choice_label' => 'nom', 
                'label' => 'Choisir une catégorie'
            ])
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
