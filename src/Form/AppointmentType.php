<?php

namespace App\Form;

use App\Entity\Appointment;
use App\Entity\Skill;
use Doctrine\DBAL\Types\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppointmentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['placeholder' => 'Prénom']
            ])
            ->add('lastname', TextType::class, [
                'label' => 'Nom',
                'attr' => ['placeholder' => 'Votre nom']
            ])
            ->add('email', EmailType::class, [
                'label' => 'email',
                'attr' => ['placeholder' => 'Votre email']
            ])
            ->add('phone', TelType::class, [
                'label' => 'telephone',
                'attr' => ['placeholder' => 'Votre téléphone']
            ])
            ->add('date', \Symfony\Component\Form\Extension\Core\Type\DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('hour', TimeType::class, [
                'widget' => 'single_text'
            ])
            ->add('message')

            ->add('skill', EntityType::class, [
                'class' => Skill::class
            ])
//            ->add('doctor') comme on ne veut pas que le user puisse le choisir
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Appointment::class,
        ]);
    }
}
