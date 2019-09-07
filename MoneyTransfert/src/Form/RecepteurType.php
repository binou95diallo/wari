<?php

namespace App\Form;

use App\Entity\Recepteur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RecepteurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomCompletR')
            ->add('adresseR')
            ->add('telephoneR')
            ->add('numeroPieceR')
            ->add('typePiece')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Recepteur::class,
            'csrf_protection'=>false
        ]);
    }
}
