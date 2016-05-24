<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalisationDefaut
 *
 * @ORM\Table(name="localisation_defaut")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\LocalisationDefautRepository")
 */
class LocalisationDefaut
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
     * @ORM\Column(name="nomLocalisationDefaut", type="text")
     */
    private $nomLocalisationDefaut;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatLocalisationDefaut", type="boolean")
     */
    private $etatLocalisationDefaut;


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
     * Set nomLocalisationDefaut
     *
     * @param string $nomLocalisationDefaut
     *
     * @return LocalisationDefaut
     */
    public function setNomLocalisationDefaut($nomLocalisationDefaut)
    {
        $this->nomLocalisationDefaut = $nomLocalisationDefaut;
    
        return $this;
    }

    /**
     * Get nomLocalisationDefaut
     *
     * @return string
     */
    public function getNomLocalisationDefaut()
    {
        return $this->nomLocalisationDefaut;
    }

    /**
     * Set etatLocalisationDefaut
     *
     * @param boolean $etatLocalisationDefaut
     *
     * @return LocalisationDefaut
     */
    public function setEtatLocalisationDefaut($etatLocalisationDefaut)
    {
        $this->etatLocalisationDefaut = $etatLocalisationDefaut;
    
        return $this;
    }

    /**
     * Get etatLocalisationDefaut
     *
     * @return boolean
     */
    public function getEtatLocalisationDefaut()
    {
        return $this->etatLocalisationDefaut;
    }
}

