<?php

namespace App\Form;

use Composer\Semver\Constraint\Constraint;
use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\TextType;
use Membre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TypeTextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class SignUpFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TypeTextType::class, [
                "constraints" => [
                    new Assert\NotBlank(
                        ["message" => "Le nom ne peut pas être vide"]
                    )
                ]
            ])
            ->add('email', TypeTextType::class)
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            "data_class" => Membre::class,
        ]);
    }
}
