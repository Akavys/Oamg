<?php

namespace Gmao\MoulageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Gmao\MoulageBundle\Repository\MouleRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Gmao\MoulageBundle\Repository\PresseRepository;
use Gmao\MoulageBundle\Repository\ReferenceRepository;
use Gmao\MoulageBundle\Repository\EquipeRepository;
use Symfony\Component\Form\FormInterface;
use Gmao\MoulageBundle\Entity\Moule;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

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
            
           		
           	->add ( 'equipe_fnc', EntityType::class, array (
           			'label' => "Equipe",
           			'placeholder' => "Equipe",
           			'class' => 'GmaoMoulageBundle:Equipe',
           			'choice_label' => 'nomEquipe',
           			'multiple' => false,
           			'query_builder' => function (EquipeRepository $repo_e) {
           			return $repo_e->getLsTrueEquipe();
           			}
           		) )
        ;
           	
           	
           	$formModifier = function (FormInterface $form, Moule $moule = null) {
           			
           		$moule = null === $moule ? array () : $moule->getId ();

           		$form->add ( 'presse_fnc', EntityType::class, array (
           				'label' => "Presse",
            			'placeholder' => "Presse",
            			'class' => 'GmaoMoulageBundle:Presse',
            			'choice_label' => 'nomPresse',
            			'multiple' => false,	
           				'query_builder' =>  function (PresseRepository $repo_p) use ($moule) {
           				return $repo_p->getLsPresseParMoule( $moule);
           				}
           				) )
           		->add ( 'reference_fnc', EntityType::class, array (
           				'label' => "Reference",
           				'placeholder' => "Reference",
           				'class' => 'GmaoMoulageBundle:Reference',
           				'choice_label' => 'nomReference',
           				'multiple' => false,
           				'query_builder' => function (ReferenceRepository $repo_r) use ($moule) {
           				return $repo_r->getLsReferenceParMoule( $moule );
           				}
           			) );
           			
           	};
           	
           	$builder->addEventListener ( FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($formModifier) {
           			
           		// this would be your entity, i.e. SportMeetup
           		$data = $event->getData ();
           		//	var_dump($data);

           		$formModifier ( $event->getForm (), $data->getId () );
           	} );
           	
           		$builder->get ( 'moule_fnc' )->addEventListener ( FormEvents::POST_SUBMIT, function (FormEvent $event) use ($formModifier) {
           			// It's important here to fetch $event->getForm()->getData(), as
           			// $event->getData() will get you the client data (that is, the ID)
           			$moule = $event->getForm ()->getData ();
           				
           			// since we've added the listener to the child, we'll have to pass on
           			// the parent to the callback functions!
           			$formModifier ( $event->getForm ()->getParent (), $moule );
           		} );
           	
           			$builder;
           			
           			
           			
           			
           			
           			
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
