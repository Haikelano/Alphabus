<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * siege
 *
 * @ORM\Table(name="siege")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\siegeRepository")
 */
class siege
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
     * @ORM\OneToOne(targetEntity="My\AlphabusBundle\Entity\Chassis")
     * @ORM\JoinColumn(name="nchassis_id", referencedColumnName="nchassis")
     *
     */

    private $chassis;

    function getChassis() {
        return $this->chassis;
    }

    function setChassis($chassis) {
        $this->chassis = $chassis;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="fixatino", type="string", length=255, nullable=true)
     */
    private $fixatino;

    /**
     * @var string
     *
     * @ORM\Column(name="balancement", type="string", length=255, nullable=true)
     */
    private $balancement;

    /**
     * @var string
     *
     * @ORM\Column(name="habillage", type="string", length=255, nullable=true)
     */
    private $habillage;

    /**
     * @var string
     *
     * @ORM\Column(name="ceinturesecurite", type="string", length=255, nullable=true)
     */
    private $ceinturesecurite;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixatino", type="string", length=255, nullable=true)
     */
    private $rmqfixatino;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqbalancement", type="string", length=255, nullable=true)
     */
    private $rmqbalancement;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqhabillage", type="string", length=255, nullable=true)
     */
    private $rmqhabillage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqceinturesecurite", type="string", length=255, nullable=true)
     */
    private $rmqceinturesecurite;

    /**
     * @return string
     */
    public function getCeinturesecurite()
    {
        return $this->ceinturesecurite;
    }

    /**
     * @param string $ceinturesecurite
     */
    public function setCeinturesecurite($ceinturesecurite)
    {
        $this->ceinturesecurite = $ceinturesecurite;
    }

    /**
     * @return string
     */
    public function getRmqfixatino()
    {
        return $this->rmqfixatino;
    }

    /**
     * @param string $rmqfixatino
     */
    public function setRmqfixatino($rmqfixatino)
    {
        $this->rmqfixatino = $rmqfixatino;
    }

    /**
     * @return string
     */
    public function getRmqbalancement()
    {
        return $this->rmqbalancement;
    }

    /**
     * @param string $rmqbalancement
     */
    public function setRmqbalancement($rmqbalancement)
    {
        $this->rmqbalancement = $rmqbalancement;
    }

    /**
     * @return string
     */
    public function getRmqhabillage()
    {
        return $this->rmqhabillage;
    }

    /**
     * @param string $rmqhabillage
     */
    public function setRmqhabillage($rmqhabillage)
    {
        $this->rmqhabillage = $rmqhabillage;
    }

    /**
     * @return string
     */
    public function getRmqceinturesecurite()
    {
        return $this->rmqceinturesecurite;
    }

    /**
     * @param string $rmqceinturesecurite
     */
    public function setRmqceinturesecurite($rmqceinturesecurite)
    {
        $this->rmqceinturesecurite = $rmqceinturesecurite;
    }


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
     * Set fixatino
     *
     * @param string $fixatino
     * @return siege
     */
    public function setFixatino($fixatino)
    {
        $this->fixatino = $fixatino;

        return $this;
    }

    /**
     * Get fixatino
     *
     * @return string 
     */
    public function getFixatino()
    {
        return $this->fixatino;
    }

    /**
     * Set balancement
     *
     * @param string $balancement
     * @return siege
     */
    public function setBalancement($balancement)
    {
        $this->balancement = $balancement;

        return $this;
    }

    /**
     * Get balancement
     *
     * @return string 
     */
    public function getBalancement()
    {
        return $this->balancement;
    }

    /**
     * Set habillage
     *
     * @param string $habillage
     * @return siege
     */
    public function setHabillage($habillage)
    {
        $this->habillage = $habillage;

        return $this;
    }

    /**
     * Get habillage
     *
     * @return string 
     */
    public function getHabillage()
    {
        return $this->habillage;
    }

    /**
     * Set ceinture�sécurit�e
     *
     * @param string $ceinture�sécurit�e
     * @return siege
     */
    public function setCeinture�sécurit�e($ceinture�sécurit�e)
    {
        $this->ceinture�sécurit�e = $ceinture�sécurit�e;

        return $this;
    }

    /**
     * Get ceinture�sécurit�e
     *
     * @return string 
     */
    public function getCeinture�sécurit�e()
    {
        return $this->ceinture�sécurit�e;
    }
}
