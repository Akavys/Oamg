<?php

namespace Gmao\MoulageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Gmao\MoulageBundle\Repository\MouleRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class FncType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dimDefaut')
            ->add ( 'moule_fnc', EntityType::class, array (
            		'label' => "Moule",
            		'placeholder' => "Moule",
            		'class' => 'GmaoMoulageBundle:Moule',
            		'choice_label' => 'nomMoule',
            		'multiple' => false,
            		'query_builder' => function (MouleRepository $repo_m) {
            		return $repo_m->getLsTrueMoule();
            		}
            		) )
            //->add('dateCreation', 'datetime')
          //  ->add('moule_fnc')
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Gmao\MoulageBundle\Entity\Fnc'
        ));
    }
}
