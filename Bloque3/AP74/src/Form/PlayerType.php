<?php

namespace App\Form;

use App\Entity\Player;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, ['label' => 'Nombre'])
            ->add('lastName', null, ['label' => 'Apellido'])
            ->add('age', RangeType::class, ['label' => 'Edad'])
            ->add('team', ChoiceType::class, ['label' => 'Equipo', 'choices' => [
                'Valencia' => 'VCF',
                'Barcelona' => 'FCB',
                'Atletico de Madrid' => 'ATM',
            ]])
            ->add('goals', null, ['label' => 'Goles'])
            ->add('cards', null, ['label'=> 'Tarjetas'])
            ->add('bithDate', null, ['label' => 'Fecha de nacimiento', 'widget' => 'single_text'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Player::class,
        ]);
    }
}
