<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fnc
 *
 * @ORM\Table(name="fnc")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\FncRepository")
 */
class Fnc
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
     * @ORM\Column(name="dimDefaut", type="text")
     */
    private $dimDefaut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
    /**
     * @ORM\ManyToOne(targetEntity="Moule", inversedBy="fncs_moule")
     * @ORM\JoinColumn(name="fnc_id", referencedColumnName="id")
     */
     private $moule_fnc;


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
     * Set dimDefaut
     *
     * @param string $dimDefaut
     *
     * @return Fnc
     */
    public function setDimDefaut($dimDefaut)
    {
        $this->dimDefaut = $dimDefaut;
    
        return $this;
    }

    /**
     * Get dimDefaut
     *
     * @return string
     */
    public function getDimDefaut()
    {
        return $this->dimDefaut;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Fnc
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set mouleFnc
     *
     * @param \Gmao\MoulageBundle\Entity\Moule $mouleFnc
     *
     * @return Fnc
     */
    public function setMouleFnc(\Gmao\MoulageBundle\Entity\Moule $mouleFnc = null)
    {
        $this->moule_fnc = $mouleFnc;
    
        return $this;
    }

    /**
     * Get mouleFnc
     *
     * @return \Gmao\MoulageBundle\Entity\Moule
     */
    public function getMouleFnc()
    {
        return $this->moule_fnc;
    }
}
