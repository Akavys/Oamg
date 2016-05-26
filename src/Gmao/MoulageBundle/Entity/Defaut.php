<?php

namespace Gmao\MoulageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Defaut
 *
 * @ORM\Table(name="defaut")
 * @ORM\Entity(repositoryClass="Gmao\MoulageBundle\Repository\DefautRepository")
 */
class Defaut
{
    /**
     * @var int
     *
     *  @ORM\Column(name="id", type="integer")
     *  @ORM\Id
     *  @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var int
     *
     *  @ORM\ManyToOne(targetEntity="DefautNiveau1")
     *  @ORM\JoinColumn(nullable=false)
     */
    private $defautNiveau1;
    
    /**
     * @var int
     *
     *  @ORM\ManyToOne(targetEntity="DefautNiveau2")
     *  @ORM\JoinColumn(nullable=false)
     */
    private $defautNiveau2;


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
     * Set defautNiveau1
     *
     * @param \Gmao\MoulageBundle\Entity\DefautNiveau1 $defautNiveau1
     *
     * @return Defaut
     */
    public function setDefautNiveau1(\Gmao\MoulageBundle\Entity\DefautNiveau1 $defautNiveau1)
    {
        $this->defautNiveau1 = $defautNiveau1;
    
        return $this;
    }

    /**
     * Get defautNiveau1
     *
     * @return \Gmao\MoulageBundle\Entity\DefautNiveau1
     */
    public function getDefautNiveau1()
    {
        return $this->defautNiveau1;
    }

    /**
     * Set defautNiveau2
     *
     * @param \Gmao\MoulageBundle\Entity\DefautNiveau2 $defautNiveau2
     *
     * @return Defaut
     */
    public function setDefautNiveau2(\Gmao\MoulageBundle\Entity\DefautNiveau2 $defautNiveau2)
    {
        $this->defautNiveau2 = $defautNiveau2;
    
        return $this;
    }

    /**
     * Get defautNiveau2
     *
     * @return \Gmao\MoulageBundle\Entity\DefautNiveau2
     */
    public function getDefautNiveau2()
    {
        return $this->defautNiveau2;
    }
}
