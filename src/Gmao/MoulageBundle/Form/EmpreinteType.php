<?php

namespace Gmao\MoulageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EmpreinteType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomEmpreinte', TextType::class, array('label'=>"N° Empreinte", 'attr' => array('placeholder' => 'Ex.: 1')))
            ->add('etatEmpreinte', CheckboxType::class, array('required'=>false, 'label'=>"Etat empreinte"))
             //->add('save', SubmitType::class)
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gmao\MoulageBundle\Entity\Empreinte'
        ));
    }
}
