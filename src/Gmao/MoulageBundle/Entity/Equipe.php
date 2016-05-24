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
}

