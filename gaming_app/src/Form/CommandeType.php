<?php

namespace App\Form;

use App\Entity\Commande;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Nbproduit')
            ->add('Date', DateType::class, [
                'widget' => 'single_text',
                'data' => new \DateTime("now"),
                
                
                'attr' => [
                'min' => date("Y-m-d")
                ]
            ])
            ->add('Methodedepaiement',ChoiceType::class,[
                'choices' =>[
                    'Cheque' => 'Cheque',
                    'Espece' => 'Espece'
                    ],
                ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
