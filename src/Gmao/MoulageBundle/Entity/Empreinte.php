<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empreinte
 *
 * @ORM\Table(name="empreinte")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\EmpreinteRepository")
*/
class Empreinte
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
     * @ORM\Column(name="nomEmpreinte", type="string", length=255)
     */
    private $nomEmpreinte;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatEmpreinte", type="boolean")
     */
    private $etatEmpreinte;

    /**
     * @ORM\ManyToOne(targetEntity="Moule", inversedBy="empreintes")
     * @ORM\JoinColumn(name="moule_id", referencedColumnName="id")
     */
     private $moule;



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
     * Set nomEmpreinte
     *
     * @param string $nomEmpreinte
     *
     * @return Empreinte
     */
    public function setNomEmpreinte($nomEmpreinte)
    {
        $this->nomEmpreinte = $nomEmpreinte;

        return $this;
    }

    /**
     * Get nomEmpreinte
     *
     * @return string
     */
    public function getNomEmpreinte()
    {
        return $this->nomEmpreinte;
    }

    /**
     * Set etatEmpreinte
     *
     * @param boolean $etatEmpreinte
     *
     * @return Empreinte
     */
    public function setEtatEmpreinte($etatEmpreinte)
    {
        $this->etatEmpreinte = $etatEmpreinte;

        return $this;
    }

    /**
     * Get etatEmpreinte
     *
     * @return boolean
     */
    public function getEtatEmpreinte()
    {
        return $this->etatEmpreinte;
    }

    /**
     * Set moule
     *
     * @param \Gmao\MoulageBundle\Entity\Moule $moule
     *
     * @return Empreinte
     */
    public function setMoule(\Gmao\MoulageBundle\Entity\Moule $moule = null)
    {
        $this->moule = $moule;

        return $this;
    }

    /**
     * Get moule
     *
     * @return \Gmao\MoulageBundle\Entity\Moule
     */
    public function getMoule()
    {
        return $this->moule;
    }
}
