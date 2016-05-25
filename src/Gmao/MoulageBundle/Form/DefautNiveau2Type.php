<?php

namespace Gmao\MoulageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Gmao\MoulageBundle\Entity\DefautNiveau1;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Gmao\MoulageBundle\Repository\DefautNiveau1Repository;

class DefautNiveau2Type extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomDefautNiveau2', TextType::class, array('label'=>"Nom nature de défaut", 'attr' => array('placeholder' => 'Ex.: Bavure')))
            ->add('etatDefautNiveau2', CheckboxType::class, array('required'=>false, 'label'=>"Etat nature de défaut")) 
            ->add('defautsNiveau1', EntityType::class, array(
            		'class' => 'GmaoMoulageBundle:DefautNiveau1',
            		'choice_label' => 'nomDefautNiveau1',
            		'multiple' => true,
            		'query_builder' => function(DefautNiveau1Repository $repo_dn1) {
            		return $repo_dn1->getLsTrueDefautNiveau1();
            		}))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gmao\MoulageBundle\Entity\DefautNiveau2'
        ));
    }
}
