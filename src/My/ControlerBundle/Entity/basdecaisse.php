<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * basdecaisse
 *
 * @ORM\Table(name="basdecaisse")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\basdecaisseRepository")
 */
class basdecaisse
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
     * @ORM\Column(name="soudurecnx", type="string", length=255, nullable=true)
     */
    private $soudurecnx;

    /**
     * @var string
     *
     * @ORM\Column(name="fixation", type="string", length=255, nullable=true)
     */
    private $fixation;

    /**
     * @var string
     *
     * @ORM\Column(name="etancheite", type="string", length=255, nullable=true)
     */
    private $etancheite;

    /**
     * @var string
     *
     * @ORM\Column(name="peinture", type="string", length=255, nullable=true)
     */
    private $peinture;

    /**
     * @var string
     *
     * @ORM\Column(name="visserie", type="string", length=255, nullable=true)
     */
    private $visserie;

 /**
     * @var string
     *
     * @ORM\Column(name="carrosserie", type="string", length=255, nullable=true)
     */
    private $carrosserie;
    /**
     * @var string
     *
     * @ORM\Column(name="frottement", type="string", length=255, nullable=true)
     */
    private $frottement;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationroue", type="string", length=255, nullable=true)
     */
    private $fixationroue;
    /**
     * @var string
     *
     * @ORM\Column(name="fixationcable", type="string", length=255, nullable=true)
     */
    private $fixationcable;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqsoudurecnx", type="string", length=255, nullable=true)
     */
    private $rmqsoudurecnx;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixation", type="string", length=255, nullable=true)
     */
    private $rmqfixation;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqetancheite", type="string", length=255, nullable=true)
     */
    private $rmqetancheite;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqpeinture", type="string", length=255, nullable=true)
     */
    private $rmqpeinture;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqvisserie", type="string", length=255, nullable=true)
     */
    private $rmqvisserie;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcarrosserie", type="string", length=255, nullable=true)
     */
    private $rmqcarrosserie;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqfrottement", type="string", length=255, nullable=true)
     */
    private $rmqfrottement;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationroue", type="string", length=255, nullable=true)
     */
    private $rmqfixationroue;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationcable", type="string", length=255, nullable=true)
     */
    private $rmqfixationcable;

    /**
     * @return string
     */
    public function getRmqsoudurecnx()
    {
        return $this->rmqsoudurecnx;
    }

    /**
     * @param string $rmqsoudurecnx
     */
    public function setRmqsoudurecnx($rmqsoudurecnx)
    {
        $this->rmqsoudurecnx = $rmqsoudurecnx;
    }

    /**
     * @return string
     */
    public function getRmqfixation()
    {
        return $this->rmqfixation;
    }

    /**
     * @param string $rmqfixation
     */
    public function setRmqfixation($rmqfixation)
    {
        $this->rmqfixation = $rmqfixation;
    }

    /**
     * @return string
     */
    public function getRmqetancheite()
    {
        return $this->rmqetancheite;
    }

    /**
     * @param string $rmqetancheite
     */
    public function setRmqetancheite($rmqetancheite)
    {
        $this->rmqetancheite = $rmqetancheite;
    }

    /**
     * @return string
     */
    public function getRmqpeinture()
    {
        return $this->rmqpeinture;
    }

    /**
     * @param string $rmqpeinture
     */
    public function setRmqpeinture($rmqpeinture)
    {
        $this->rmqpeinture = $rmqpeinture;
    }

    /**
     * @return string
     */
    public function getRmqvisserie()
    {
        return $this->rmqvisserie;
    }

    /**
     * @param string $rmqvisserie
     */
    public function setRmqvisserie($rmqvisserie)
    {
        $this->rmqvisserie = $rmqvisserie;
    }

    /**
     * @return string
     */
    public function getRmqcarrosserie()
    {
        return $this->rmqcarrosserie;
    }

    /**
     * @param string $rmqcarrosserie
     */
    public function setRmqcarrosserie($rmqcarrosserie)
    {
        $this->rmqcarrosserie = $rmqcarrosserie;
    }

    /**
     * @return string
     */
    public function getRmqfrottement()
    {
        return $this->rmqfrottement;
    }

    /**
     * @param string $rmqfrottement
     */
    public function setRmqfrottement($rmqfrottement)
    {
        $this->rmqfrottement = $rmqfrottement;
    }

    /**
     * @return string
     */
    public function getRmqfixationroue()
    {
        return $this->rmqfixationroue;
    }

    /**
     * @param string $rmqfixationroue
     */
    public function setRmqfixationroue($rmqfixationroue)
    {
        $this->rmqfixationroue = $rmqfixationroue;
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
    public function getCarrosserie()
    {
        return $this->carrosserie;
    }

    /**
     * @param string $carrosserie
     */
    public function setCarrosserie($carrosserie)
    {
        $this->carrosserie = $carrosserie;
    }

    /**
     * @return string
     */
    public function getFrottement()
    {
        return $this->frottement;
    }

    /**
     * @param string $frottement
     */
    public function setFrottement($frottement)
    {
        $this->frottement = $frottement;
    }

    /**
     * @return string
     */
    public function getFixationroue()
    {
        return $this->fixationroue;
    }

    /**
     * @param string $fixationroue
     */
    public function setFixationroue($fixationroue)
    {
        $this->fixationroue = $fixationroue;
    }

    /**
     * @return string
     */
    public function getFixationcable()
    {
        return $this->fixationcable;
    }

    /**
     * @param string $fixationcable
     */
    public function setFixationcable($fixationcable)
    {
        $this->fixationcable = $fixationcable;
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
     * Set soudurecnx
     *
     * @param string $soudurecnx
     * @return basdecaisse
     */
    public function setSoudurecnx($soudurecnx)
    {
        $this->soudurecnx = $soudurecnx;

        return $this;
    }

    /**
     * Get soudurecnx
     *
     * @return string 
     */
    public function getSoudurecnx()
    {
        return $this->soudurecnx;
    }

    /**
     * Set fixation
     *
     * @param string $fixation
     * @return basdecaisse
     */
    public function setFixation($fixation)
    {
        $this->fixation = $fixation;

        return $this;
    }

    /**
     * Get fixation
     *
     * @return string 
     */
    public function getFixation()
    {
        return $this->fixation;
    }

    /**
     * Set etancheite
     *
     * @param string $etancheite
     * @return basdecaisse
     */
    public function setEtancheite($etancheite)
    {
        $this->etancheite = $etancheite;

        return $this;
    }

    /**
     * Get etancheite
     *
     * @return string 
     */
    public function getEtancheite()
    {
        return $this->etancheite;
    }

    /**
     * Set peinture
     *
     * @param string $peinture
     * @return basdecaisse
     */
    public function setPeinture($peinture)
    {
        $this->peinture = $peinture;

        return $this;
    }

    /**
     * Get peinture
     *
     * @return string 
     */
    public function getPeinture()
    {
        return $this->peinture;
    }

    /**
     * Set visserie
     *
     * @param string $visserie
     * @return basdecaisse
     */
    public function setVisserie($visserie)
    {
        $this->visserie = $visserie;

        return $this;
    }

    /**
     * Get visserie
     *
     * @return string 
     */
    public function getVisserie()
    {
        return $this->visserie;
    }
}
