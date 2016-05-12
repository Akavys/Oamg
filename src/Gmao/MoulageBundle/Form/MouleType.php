<?php

namespace Gmao\MoulageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Gmao\MoulageBundle\Form\EmpreinteType;

class MouleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomMoule', TextType::class, array('label'=>"Nom moule", 'attr' => array('placeholder' => 'Ex.: 211 54 160')))
            ->add('designation', TextType::class, array('label'=>"Désignation moule", 'attr' => array('placeholder' => 'Ex.: Isolant PC 4V')))
            ->add('planMoule', TextType::class, array('label'=>"Lien vers le dossier plan moule", 'attr' => array('placeholder' => 'Ex.: J:\Interser\...')))
            ->add('planMoulePrehension', TextType::class, array('required'=>false, 'label'=>"Lien vers le dossier plan préhension moule", 'attr' => array('placeholder' => 'Ex.: J:\Interser\...')))
            ->add('poidsMoule', TextType::class, array('required'=>false, 'label'=>"Poids du moule (Kg)", 'attr' => array('placeholder' => 'Ex.: 1500')))
            ->add('lastNbrCycle', TextType::class, array('required'=>false, 'label'=>"Nombre de cycle du moule", 'attr' => array('placeholder' => 'Ex.: 0')))
            ->add('etatMoule', CheckboxType::class, array('required'=>false, 'label'=>"Etat Moule"))
            ->add('empreintes', CollectionType::class, array('entry_type' => EmpreinteType::class, 'allow_add' => true, 'allow_delete' => true))
;
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gmao\MoulageBundle\Entity\Moule'
        ));
    }

}
