<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alveole
 *
 * @ORM\Table(name="alveole")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\AlveoleRepository")
 */
class Alveole
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
     * @ORM\Column(name="nomAlveole", type="string", length=255)
     */
    private $nomAlveole;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatAlveole", type="boolean")
     */
    private $etatAlveole;

    /**
     * @ORM\ManyToOne(targetEntity="Moule", inversedBy="alveoles")
     * @ORM\JoinColumn(name="moule_id", referencedColumnName="id")
     */
     private $moule_alveole;

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
     * Set nomAlveole
     *
     * @param string $nomAlveole
     *
     * @return Alveole
     */
    public function setNomAlveole($nomAlveole)
    {
        $this->nomAlveole = $nomAlveole;

        return $this;
    }

    /**
     * Get nomAlveole
     *
     * @return string
     */
    public function getNomAlveole()
    {
        return $this->nomAlveole;
    }

    /**
     * Set etatAlveole
     *
     * @param boolean $etatAlveole
     *
     * @return Alveole
     */
    public function setEtatAlveole($etatAlveole)
    {
        $this->etatAlveole = $etatAlveole;

        return $this;
    }

    /**
     * Get etatAlveole
     *
     * @return boolean
     */
    public function getEtatAlveole()
    {
        return $this->etatAlveole;
    }

    /**
     * Set mouleAlveole
     *
     * @param \Gmao\MoulageBundle\Entity\Moule $mouleAlveole
     *
     * @return Alveole
     */
    public function setMouleAlveole(\Gmao\MoulageBundle\Entity\Moule $mouleAlveole = null)
    {
        $this->moule_alveole = $mouleAlveole;

        return $this;
    }

    /**
     * Get mouleAlveole
     *
     * @return \Gmao\MoulageBundle\Entity\Moule
     */
    public function getMouleAlveole()
    {
        return $this->moule_alveole;
    }
}
