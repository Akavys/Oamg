<?php

namespace Gmao\MoulageBundle\Form;

use Gmao\MoulageBundle\Repository\DefautNiveau1Repository;
use Gmao\MoulageBundle\Repository\DefautNiveau2Repository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Gmao\MoulageBundle\Entity\DefautNiveau1;
use Gmao\MoulageBundle\Repository\EmpreinteRepository;
use Gmao\MoulageBundle\Repository\AlveoleRepository;

class DefautType extends AbstractType {
	/**
	 *
	 * @param FormBuilderInterface $builder        	
	 * @param array $options        	
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add ( 'defautNiveau1', EntityType::class, array (
				'label' => "Type de défaut",
				'placeholder' => "Type défaut",
				'class' => 'GmaoMoulageBundle:DefautNiveau1',
				'choice_label' => 'nomDefautNiveau1',
				'multiple' => false,
				'query_builder' => function (DefautNiveau1Repository $repo_dn1) {
					return $repo_dn1->getLsTrueDefautNiveau1 ();
				} 
		) )->add ( 'empreintes', EntityType::class, array (
				'class' => 'GmaoMoulageBundle:Empreinte',
				'choice_label' => 'nomEmpreinte',
				'multiple' => true,
				'expanded' => true,
				'query_builder' => function (EmpreinteRepository $repo_emp) {
					return $repo_emp->getLsEmpreinteTrueParMoule ( 1 );
				} 
		) )->add ( 'alveoles', EntityType::class, array (
				'class' => 'GmaoMoulageBundle:Alveole',
				'choice_label' => 'nomAlveole',
				'multiple' => true,
				'expanded' => true,
				'query_builder' => function (AlveoleRepository $repo_alv) {
					return $repo_alv->getLsAlveoleTrueParMoule ( 1 );
				} 
		) )->add ( 'imageDefaut', ImageDefautType::class)
		;
		
		$formModifier = function (FormInterface $form, DefautNiveau1 $defautNiveau1 = null) {
			
			$defautNiveau1 = null === $defautNiveau1 ? array () : $defautNiveau1->getId ();
			
			$form->add ( 'defautNiveau2', EntityType::class, array (
					'label' => "Nature de défaut",
					'placeholder' => "Nature défaut",
					'class' => 'GmaoMoulageBundle:DefautNiveau2',
					'choice_label' => 'nomDefautNiveau2',
					'multiple' => false,
					'query_builder' => function (DefautNiveau2Repository $repo_dn2) use ($defautNiveau1) {
						return $repo_dn2->getLsTrueDefautNiveau2 ( $defautNiveau1 );
					} 
			) );
		};
		
		$builder->addEventListener ( FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($formModifier) {
			
			// this would be your entity, i.e. SportMeetup
			$data = $event->getData ();
			
			$formModifier ( $event->getForm (), $data->getId () );
		} );
		
		$builder->get ( 'defautNiveau1' )->addEventListener ( FormEvents::POST_SUBMIT, function (FormEvent $event) use ($formModifier) {
			// It's important here to fetch $event->getForm()->getData(), as
			// $event->getData() will get you the client data (that is, the ID)
			$defautNiveau1 = $event->getForm ()->getData ();
			
			// since we've added the listener to the child, we'll have to pass on
			// the parent to the callback functions!
			$formModifier ( $event->getForm ()->getParent (), $defautNiveau1 );
		} );
		
		$builder;
	}
	
	/**
	 *
	 * @param OptionsResolver $resolver        	
	 */
	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults ( array (
				'data_class' => 'Gmao\MoulageBundle\Entity\Defaut' 
		) );
	}
}
