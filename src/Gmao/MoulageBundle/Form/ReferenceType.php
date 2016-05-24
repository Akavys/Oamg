<?php

namespace Gmao\MoulageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReferenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomReference', TextType::class, array('label'=>"Nom référence", 'attr' => array('placeholder' => 'Ex.: F896500')))
            ->add('designation', TextType::class, array('label'=>"Désignation référence", 'attr' => array('placeholder' => 'Ex.: MODULE 12V')))
            ->add('version', TextType::class, array('label'=>"Version", 'attr' => array('placeholder' => 'Ex.: Noire')))
            ->add('etatReference', CheckboxType::class, array('required'=>false, 'label'=>"Etat référence"))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gmao\MoulageBundle\Entity\Reference'
        ));
    }

}
