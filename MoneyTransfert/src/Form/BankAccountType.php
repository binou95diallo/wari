<?php

namespace App\Form;

use App\Entity\Partenaire;
use App\Entity\BankAccount;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BankAccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numeroCompte')
            ->add('solde')
            ->add('partenaire',EntityType::class,['class'=>Partenaire::class])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BankAccount::class,
            'csrf_protection'=>false
        ]);
    }
}
