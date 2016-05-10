<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reference
 *
 * @ORM\Table(name="reference")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\ReferenceRepository")
 */
class Reference
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
     * @ORM\Column(name="nomReference", type="string", length=255)
     */
    private $nomReference;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="text")
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatReference", type="boolean")
     */
    private $etatReference;


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
     * Set nomReference
     *
     * @param string $nomReference
     *
     * @return Reference
     */
    public function setNomReference($nomReference)
    {
        $this->nomReference = $nomReference;

        return $this;
    }

    /**
     * Get nomReference
     *
     * @return string
     */
    public function getNomReference()
    {
        return $this->nomReference;
    }

    /**
     * Set designation
     *
     * @param string $designation
     *
     * @return Reference
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return Reference
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set etatReference
     *
     * @param boolean $etatReference
     *
     * @return Reference
     */
    public function setEtatReference($etatReference)
    {
        $this->etatReference = $etatReference;

        return $this;
    }

    /**
     * Get etatReference
     *
     * @return boolean
     */
    public function getEtatReference()
    {
        return $this->etatReference;
    }
}
