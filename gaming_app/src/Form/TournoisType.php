<?php

namespace App\Form;

use App\Entity\Tournois;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class TournoisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomTournois',TextType::class,[
                'attr' => array(
                    'placeholder' => 'Nom Tournois'
                )
            ])
            ->add('capacite',HiddenType::class,[
                'data' =>4
            ])
         
           
            ->add('recompense')
            ->add('dateTournois', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime("now"),
                
                
                'attr' => [
                'min' => date("Y-m-d")
                ]
            ])
            ->add('ptsXp')
            ->add('timeT',TimeType::class)
          
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Tournois::class,
        ]);
    }
}
