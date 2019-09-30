<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Recepteur;
use App\Entity\Expediteur;
use App\Entity\Transaction;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TransactionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('frais')
            ->add('montant')
            ->add('gain')
            ->add('taxeEtat')
            ->add('commissionPartenaire')
            ->add('type')
            ->add('user',EntityType::class,['class'=>User::class])
            ->add('expediteur',EntityType::class,['class'=>Expediteur::class])
            ->add('recepteur',EntityType::class,['class'=>Recepteur::class])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Transaction::class,
            'csrf_protection'=>false
        ]);
    }
}
