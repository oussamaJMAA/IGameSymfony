<?php

namespace App\Form;

use App\Entity\User;

use App\Entity\Message;
use App\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class MessageType extends AbstractType
{

    
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class,[
                'constraints' => [
                    new NotBlank([
                        'message' => 'Merci de saisir un titre à vote message'
                    ])
                    ],])
                    ->add('message', TextareaType::class,[
                        'constraints' => [
                            new NotBlank([
                                'message' => 'Merci de saisir un message'
                            ])
                            ],])
            ->add('recipient', EntityType::class, [
    "class" => User::class,
    "choice_label" => "email",
    "attr" => [
        "class" => "form-control bg-transparent"
    ],

'query_builder' => function (UserRepository $m) {
    return $m->AllEmailsExceptCurrentUser();
    
      
}
]) ->add('send', SubmitType::class, [
    "attr" => [
    "class" => "btn btn-primary btn-sl-sm me-2"
    ]])
    
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Message::class,
        ]);
    }
}
