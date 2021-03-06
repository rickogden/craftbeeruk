<?php
/**
 * Author: rick
 * Date: 12/11/2013
 * Time: 11:56
 */

namespace Craft\LocationBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DrinkType extends AbstractType
{

    public function buildForm(FormBuilderInterface $formBuilder, array $options)
    {
        $formBuilder->add('available', 'checkbox')
            ->add('description', 'text');
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => 'Craft\LocationBundle\Document\Drink'
            ]
        );
    }

    public function getName()
    {
        return 'drink';
    }

} 