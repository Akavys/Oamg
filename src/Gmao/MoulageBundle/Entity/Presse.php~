<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Presse
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\PresseRepository")
 */
class Presse
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
     * @ORM\Column(name="nomPresse", type="string", length=255)
     * @Assert\NotBlank(message="Merci de renseigner le champ Presse.")
     */
    private $nomPresse;

    /**
     * @var bool
     *
     * @ORM\Column(name="etatPresse", type="boolean")
     */
    private $etatPresse;
    
    /**
     * @ORM\OneToMany(targetEntity="Fnc", mappedBy="presse_fnc")
     */
    private $fncs_presse;
    
    /**
     * @ORM\ManyToMany(targetEntity="Moule", inversedBy="presses")
     * @ORM\JoinTable(name="presse_moule")
     */
    private $moules;
    

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomPresse
     *
     * @param string $nomPresse
     *
     * @return Presse
     */
    public function setNomPresse($nomPresse)
    {
        $this->nomPresse = $nomPresse;

        return $this;
    }

    /**
     * Get nomPresse
     *
     * @return string
     */
    public function getNomPresse()
    {
        return $this->nomPresse;
    }

    /**
     * Set etatPresse
     *
     * @param boolean $etatPresse
     *
     * @return Presse
     */
    public function setEtatPresse($etatPresse)
    {
        $this->etatPresse = $etatPresse;

        return $this;
    }

    /**
     * Get etatPresse
     *
     * @return bool
     */
    public function getEtatPresse()
    {
        return $this->etatPresse;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fncs_presse = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add fncsPresse
     *
     * @param \Gmao\MoulageBundle\Entity\Fnc $fncsPresse
     *
     * @return Presse
     */
    public function addFncsPresse(\Gmao\MoulageBundle\Entity\Fnc $fncsPresse)
    {
        $this->fncs_presse[] = $fncsPresse;
    
        return $this;
    }

    /**
     * Remove fncsPresse
     *
     * @param \Gmao\MoulageBundle\Entity\Fnc $fncsPresse
     */
    public function removeFncsPresse(\Gmao\MoulageBundle\Entity\Fnc $fncsPresse)
    {
        $this->fncs_presse->removeElement($fncsPresse);
    }

    /**
     * Get fncsPresse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFncsPresse()
    {
        return $this->fncs_presse;
    }

    /**
     * Add moule
     *
     * @param \Gmao\MoulageBundle\Entity\Moule $moule
     *
     * @return Presse
     */
    public function addMoule(\Gmao\MoulageBundle\Entity\Moule $moule)
    {
        $this->moules[] = $moule;
    
        return $this;
    }

    /**
     * Remove moule
     *
     * @param \Gmao\MoulageBundle\Entity\Moule $moule
     */
    public function removeMoule(\Gmao\MoulageBundle\Entity\Moule $moule)
    {
        $this->moules->removeElement($moule);
    }

    /**
     * Get moules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMoules()
    {
        return $this->moules;
    }
}
