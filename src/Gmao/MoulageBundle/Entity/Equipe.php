<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\EquipeRepository")
 */
class Equipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomEquipe", type="string", length=255)
     */
    private $nomEquipe;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatEquipe", type="boolean")
     */
    private $etatEquipe;
    
    /**
     * @ORM\OneToMany(targetEntity="Fnc", mappedBy="equipe_fnc")
     */
    private $fncs_equipe;


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
     * Set nomEquipe
     *
     * @param string $nomEquipe
     *
     * @return Equipe
     */
    public function setNomEquipe($nomEquipe)
    {
        $this->nomEquipe = $nomEquipe;
    
        return $this;
    }

    /**
     * Get nomEquipe
     *
     * @return string
     */
    public function getNomEquipe()
    {
        return $this->nomEquipe;
    }

    /**
     * Set etatEquipe
     *
     * @param boolean $etatEquipe
     *
     * @return Equipe
     */
    public function setEtatEquipe($etatEquipe)
    {
        $this->etatEquipe = $etatEquipe;
    
        return $this;
    }

    /**
     * Get etatEquipe
     *
     * @return boolean
     */
    public function getEtatEquipe()
    {
        return $this->etatEquipe;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fncs_equipe = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fncsEquipe
     *
     * @param \Gmao\MoulageBundle\Entity\Fnc $fncsEquipe
     *
     * @return Equipe
     */
    public function addFncsEquipe(\Gmao\MoulageBundle\Entity\Fnc $fncsEquipe)
    {
        $this->fncs_equipe[] = $fncsEquipe;
    
        return $this;
    }

    /**
     * Remove fncsEquipe
     *
     * @param \Gmao\MoulageBundle\Entity\Fnc $fncsEquipe
     */
    public function removeFncsEquipe(\Gmao\MoulageBundle\Entity\Fnc $fncsEquipe)
    {
        $this->fncs_equipe->removeElement($fncsEquipe);
    }

    /**
     * Get fncsEquipe
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFncsEquipe()
    {
        return $this->fncs_equipe;
    }
}
