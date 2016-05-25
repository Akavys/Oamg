<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DefautNiveau2
 *
 * @ORM\Table(name="defaut_niveau2")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\DefautNiveau2Repository")
 */
class DefautNiveau2 {
	/**
	 *
	 * @var int 
	 *      @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var string 
	 *     @ORM\Column(name="nomDefautNiveau2", type="string", length=255)
	 */
	private $nomDefautNiveau2;
	
	/**
	 *
	 * @var bool 
	 *     @ORM\Column(name="etatDefautNiveau2", type="boolean")
	 */
	private $etatDefautNiveau2;
	
    /**
    *      @ORM\ManyToMany(targetEntity="DefautNiveau1", cascade={"persist"})
    */
	private $defautsNiveau1;
	
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->defautsNiveau1 = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomDefautNiveau2
     *
     * @param string $nomDefautNiveau2
     *
     * @return DefautNiveau2
     */
    public function setNomDefautNiveau2($nomDefautNiveau2)
    {
        $this->nomDefautNiveau2 = $nomDefautNiveau2;
    
        return $this;
    }

    /**
     * Get nomDefautNiveau2
     *
     * @return string
     */
    public function getNomDefautNiveau2()
    {
        return $this->nomDefautNiveau2;
    }

    /**
     * Set etatDefautNiveau2
     *
     * @param boolean $etatDefautNiveau2
     *
     * @return DefautNiveau2
     */
    public function setEtatDefautNiveau2($etatDefautNiveau2)
    {
        $this->etatDefautNiveau2 = $etatDefautNiveau2;
    
        return $this;
    }

    /**
     * Get etatDefautNiveau2
     *
     * @return boolean
     */
    public function getEtatDefautNiveau2()
    {
        return $this->etatDefautNiveau2;
    }

    /**
     * Add defautsNiveau1
     *
     * @param \Gmao\MoulageBundle\Entity\DefautNiveau1 $defautsNiveau1
     *
     * @return DefautNiveau2
     */
    public function addDefautsNiveau1(\Gmao\MoulageBundle\Entity\DefautNiveau1 $defautsNiveau1)
    {
        $this->defautsNiveau1[] = $defautsNiveau1;
    
        return $this;
    }

    /**
     * Remove defautsNiveau1
     *
     * @param \Gmao\MoulageBundle\Entity\DefautNiveau1 $defautsNiveau1
     */
    public function removeDefautsNiveau1(\Gmao\MoulageBundle\Entity\DefautNiveau1 $defautsNiveau1)
    {
        $this->defautsNiveau1->removeElement($defautsNiveau1);
    }

    /**
     * Get defautsNiveau1
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDefautsNiveau1()
    {
        return $this->defautsNiveau1;
    }
}
