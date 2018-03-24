<?php

namespace My\AlphabusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chassis
 *
 * @ORM\Table(name="chassis")
 * @ORM\Entity(repositoryClass="My\AlphabusBundle\Repository\ChassisRepository")
 */
class Chassis
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="nchassis", type="string", length=17, unique=true)
     */
    private $nchassis;
    
    public function __toString() {
    return $this->nchassis;  }
                            

    /**
     * @var string
     *
     * @ORM\Column(name="typechassis", type="string", length=10)
     */
    private $typechassis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datereception", type="date")
     */
    private $datereception;

    /**
     * @var string
     *
     * @ORM\Column(name="controler", type="string", length=255)
     */
    private $controler;


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
     * Set nchassis
     *
     * @param string $nchassis
     * @return Chassis
     */
    public function setNchassis($nchassis)
    {
        $this->nchassis = $nchassis;

        return $this;
    }

    /**
     * Get nchassis
     *
     * @return string 
     */
    public function getNchassis()
    {
        return $this->nchassis;
    }

    /**
     * Set typechassis
     *
     * @param string $typechassis
     * @return Chassis
     */
    public function setTypechassis($typechassis)
    {
        $this->typechassis = $typechassis;

        return $this;
    }

    /**
     * Get typechassis
     *
     * @return string 
     */
    public function getTypechassis()
    {
        return $this->typechassis;
    }

    /**
     * Set datereception
     *
     * @param string $datereception
     * @return Chassis
     */
    public function setDatereception($datereception)
    {
        $this->datereception = $datereception;

        return $this;
    }

    /**
     * Get datereception
     *
     * @return string 
     */
    public function getDatereception()
    {
        return $this->datereception;
    }

    /**
     * Set controler
     *
     * @param string $controler
     * @return Chassis
     */
    public function setControler($controler)
    {
        $this->controler = $controler;

        return $this;
    }

    /**
     * Get controler
     *
     * @return string 
     */
    public function getControler()
    {
        return $this->controler;
    }
}
