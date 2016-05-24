<?php

namespace Gmao\MoulageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class DefautNiveau1Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nomDefautNiveau1', TextType::class, array('label'=>"Nom type de défaut", 'attr' => array('placeholder' => 'Ex.: Produits')))
            ->add('etatDefautNiveau1', CheckboxType::class, array('required'=>false, 'label'=>"Etat type de défaut"))
            ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gmao\MoulageBundle\Entity\DefautNiveau1'
        ));
    }
}
