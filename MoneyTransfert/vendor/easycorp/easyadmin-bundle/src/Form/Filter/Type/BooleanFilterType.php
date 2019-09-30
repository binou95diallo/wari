<<<<<<< HEAD
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class BooleanFilterType extends FilterType
{
    use FilterTypeTrait;

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => [
                'label.true' => true,
                'label.false' => false,
            ],
            'expanded' => true,
            'translation_domain' => 'EasyAdminBundle',
            'label_attr' => ['class' => 'radio-inline'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
        return ChoiceType::class;
    }
}
=======
<?php

namespace EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 */
class BooleanFilterType extends FilterType
{
    use FilterTypeTrait;

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'choices' => [
                'label.true' => true,
                'label.false' => false,
            ],
            'expanded' => true,
            'translation_domain' => 'EasyAdminBundle',
            'label_attr' => ['class' => 'radio-inline'],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function getParent(): string
    {
        return ChoiceType::class;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
