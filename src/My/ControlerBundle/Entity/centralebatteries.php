<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * centralebatteries
 *
 * @ORM\Table(name="centralebatteries")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\centralebatteriesRepository")
 */
class centralebatteries
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;


    public function __construct()
    {
        $this->date = new \DateTime();
    }
    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Post
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="fixationelectrique", type="string", length=255, nullable=true)
     */
    private $fixationelectrique;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationcable", type="string", length=255, nullable=true)
     */
    private $fixationcable;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationbatteries", type="string", length=255, nullable=true)
     */
    private $fixationbatteries;

    /**
     * @var string
     *
     * @ORM\Column(name="chargebatterie", type="string", length=255, nullable=true)
     */
    private $chargebatterie;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauelectrolite", type="string", length=255, nullable=true)
     */
    private $niveauelectrolite;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationelectrique", type="string", length=255, nullable=true)
     */
    private $rmqfixationelectrique;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationcable", type="string", length=255, nullable=true)
     */
    private $rmqfixationcable;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationbatteries", type="string", length=255, nullable=true)
     */
    private $rmqfixationbatteries;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqchargebatterie", type="string", length=255, nullable=true)
     */
    private $rmqchargebatterie;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqniveauelectrolite", type="string", length=255, nullable=true)
     */
    private $rmqniveauelectrolite;

    /**
     * @return string
     */
    public function getRmqfixationelectrique()
    {
        return $this->rmqfixationelectrique;
    }

    /**
     * @param string $rmqfixationelectrique
     */
    public function setRmqfixationelectrique($rmqfixationelectrique)
    {
        $this->rmqfixationelectrique = $rmqfixationelectrique;
    }

    /**
     * @return string
     */
    public function getRmqfixationcable()
    {
        return $this->rmqfixationcable;
    }

    /**
     * @param string $rmqfixationcable
     */
    public function setRmqfixationcable($rmqfixationcable)
    {
        $this->rmqfixationcable = $rmqfixationcable;
    }

    /**
     * @return string
     */
    public function getRmqfixationbatteries()
    {
        return $this->rmqfixationbatteries;
    }

    /**
     * @param string $rmqfixationbatteries
     */
    public function setRmqfixationbatteries($rmqfixationbatteries)
    {
        $this->rmqfixationbatteries = $rmqfixationbatteries;
    }

    /**
     * @return string
     */
    public function getRmqchargebatterie()
    {
        return $this->rmqchargebatterie;
    }

    /**
     * @param string $rmqchargebatterie
     */
    public function setRmqchargebatterie($rmqchargebatterie)
    {
        $this->rmqchargebatterie = $rmqchargebatterie;
    }

    /**
     * @return string
     */
    public function getRmqniveauelectrolite()
    {
        return $this->rmqniveauelectrolite;
    }

    /**
     * @param string $rmqniveauelectrolite
     */
    public function setRmqniveauelectrolite($rmqniveauelectrolite)
    {
        $this->rmqniveauelectrolite = $rmqniveauelectrolite;
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
     * Set fixationelectrique
     *
     * @param string $fixationelectrique
     * @return centralebatteries
     */
    public function setFixationelectrique($fixationelectrique)
    {
        $this->fixationelectrique = $fixationelectrique;

        return $this;
    }

    /**
     * Get fixationelectrique
     *
     * @return string 
     */
    public function getFixationelectrique()
    {
        return $this->fixationelectrique;
    }

    /**
     * Set fixationcable
     *
     * @param string $fixationcable
     * @return centralebatteries
     */
    public function setFixationcable($fixationcable)
    {
        $this->fixationcable = $fixationcable;

        return $this;
    }

    /**
     * Get fixationcable
     *
     * @return string 
     */
    public function getFixationcable()
    {
        return $this->fixationcable;
    }

    /**
     * Set fixationbatteries
     *
     * @param string $fixationbatteries
     * @return centralebatteries
     */
    public function setFixationbatteries($fixationbatteries)
    {
        $this->fixationbatteries = $fixationbatteries;

        return $this;
    }

    /**
     * Get fixationbatteries
     *
     * @return string 
     */
    public function getFixationbatteries()
    {
        return $this->fixationbatteries;
    }

    /**
     * Set chargebatterie
     *
     * @param string $chargebatterie
     * @return centralebatteries
     */
    public function setChargebatterie($chargebatterie)
    {
        $this->chargebatterie = $chargebatterie;

        return $this;
    }

    /**
     * Get chargebatterie
     *
     * @return string 
     */
    public function getChargebatterie()
    {
        return $this->chargebatterie;
    }

    /**
     * Set niveauelectrolite
     *
     * @param string $niveauelectrolite
     * @return centralebatteries
     */
    public function setNiveauelectrolite($niveauelectrolite)
    {
        $this->niveauelectrolite = $niveauelectrolite;

        return $this;
    }

    /**
     * Get niveauelectrolite
     *
     * @return string 
     */
    public function getNiveauelectrolite()
    {
        return $this->niveauelectrolite;
    }
}
