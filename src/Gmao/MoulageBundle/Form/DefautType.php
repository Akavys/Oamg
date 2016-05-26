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

class DefautType extends AbstractType {
	/**
	 *
	 * @param FormBuilderInterface $builder        	
	 * @param array $options        	
	 */
	public function buildForm(FormBuilderInterface $builder, array $options) {
		$idDefautNiveau1 = 2;
		
		$builder
		->add ( 'defautNiveau1', EntityType::class, array (
				'label' => "Type de défaut",
				'class' => 'GmaoMoulageBundle:DefautNiveau1',
				'choice_label' => 'nomDefautNiveau1',
				'multiple' => false,
				'query_builder' => function (DefautNiveau1Repository $repo_dn1) {
					return $repo_dn1->getLsTrueDefautNiveau1 ();
				} 
		) )
		->add ( 'defautNiveau2', EntityType::class, array (
				'label' => "Nature de défaut",
				'class' => 'GmaoMoulageBundle:DefautNiveau2',
				'choice_label' => 'nomDefautNiveau2',
				'multiple' => false,
				'query_builder' => function (DefautNiveau2Repository $repo_dn2) use ($idDefautNiveau1) {
					return $repo_dn2->getLsTrueDefautNiveau2 ( $idDefautNiveau1 );
				} 
		) );
		
		//$builder->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'));
	}
	
// 	public function onPreSubmit(FormEvent $event) {
// 		$form = $event->getForm();
// 		$data = $event->getData();
	
// 		$defautNiveau1Id = $data['defautNiveau1'];
// 		if($defautNiveau1Id != null){
// 			$form->remove('defautNiveau2');
// 			$form->add ( 'defautNiveau2', EntityType::class, array (
// 				'label' => "Nature de défaut",
// 				'class' => 'GmaoMoulageBundle:DefautNiveau2',
// 				'choice_label' => 'nomDefautNiveau2',
// 				'multiple' => false,
// 				'query_builder' => function (DefautNiveau2Repository $repo_dn2) use ($defautNiveau1Id) {
// 					return $repo_dn2->getLsTrueDefautNiveau2 ( $defautNiveau1Id );
// 				} 
// 		) );
// 		}
// 	}
	
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
