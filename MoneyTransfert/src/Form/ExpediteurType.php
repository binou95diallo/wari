<?php

namespace App\Form;

use App\Entity\Expediteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExpediteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomComplet')
            ->add('adresse')
            ->add('telephone')
            ->add('numeroPiece')
            ->add('typePiece')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Expediteur::class,
            'csrf_protection'=>false
        ]);
    }
}
