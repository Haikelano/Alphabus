<?php

namespace My\AlphabusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectation
 *
 * @ORM\Table(name="affectation")
 * @ORM\Entity(repositoryClass="My\AlphabusBundle\Repository\AffectationRepository")
 */
class Affectation
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
     * @ORM\Column(name="seriealpha", type="string", length=255)
     */
    private $seriealpha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateaffectation", type="date")
     */
    private $dateaffectation;

    /**
     * @var string
     *
     * @ORM\Column(name="controleacier", type="string", length=255, nullable=true)
     */
    private $controleacier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateacier", type="date", nullable=true)
     */
    private $dateacier;

    /**
     * @var string
     *
     * @ORM\Column(name="controlepeinture", type="string", length=255, nullable=true)
     */
    private $controlepeinture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datepeinture", type="date", nullable=true)
     */
    private $datepeinture;

    /**
     * @var string
     *
     * @ORM\Column(name="controlcontroler", type="string", length=255, nullable=true)
     */
    private $controlcontroler;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datecontrole", type="date", nullable=true)
     */
    private $datecontrole;

    /**
     * @var string
     *
     * @ORM\Column(name="controleessai", type="string", length=255, nullable=true)
     */
    private $controleessai;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateessai", type="date",  nullable=true)
     */
    private $dateessai;

    /**
     * @ORM\ManyToOne(targetEntity="My\AlphabusBundle\Entity\Clients")
     * @ORM\JoinColumn(name="nclients_id", referencedColumnName="nclients", onDelete="SET NULL")
     *
     */

    private $nclients;


    function getNclients() {
        return $this->nclients;
    }

    function setNclients($nclients) {
        $this->nclients = $nclients;
    }

        /**
     * @ORM\ManyToOne(targetEntity="My\AlphabusBundle\Entity\Chassis")
     * @ORM\JoinColumn(name="nchassis_id", referencedColumnName="nchassis", onDelete="SET NULL")
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set seriealpha
     *
     * @param string $seriealpha
     * @return Affectation
     */
    public function setSeriealpha($seriealpha)
    {
        $this->seriealpha = $seriealpha;

        return $this;
    }

    /**
     * Get seriealpha
     *
     * @return string
     */
    public function getSeriealpha()
    {
        return $this->seriealpha;
    }

    /**
     * Set dateaffectation
     *
     * @param \DateTime $dateaffectation
     * @return Affectation
     */
    public function setDateaffectation($dateaffectation)
    {
        $this->dateaffectation = $dateaffectation;

        return $this;
    }

    /**
     * Get dateaffectation
     *
     * @return \DateTime
     */
    public function getDateaffectation()
    {
        return $this->dateaffectation;
    }

    /**
     * Set controleacier
     *
     * @param string $controleacier
     * @return Affectation
     */
    public function setControleacier($controleacier)
    {
        $this->controleacier = $controleacier;

        return $this;
    }

    /**
     * Get controleacier
     *
     * @return string
     */
    public function getControleacier()
    {
        return $this->controleacier;
    }

    /**
     * Set dateacier
     *
     * @param \DateTime $dateacier
     * @return Affectation
     */
    public function setDateacier($dateacier)
    {
        $this->dateacier = $dateacier;

        return $this;
    }

    /**
     * Get dateacier
     *
     * @return \DateTime
     */
    public function getDateacier()
    {
        return $this->dateacier;
    }

    /**
     * Set controlepeinture
     *
     * @param string $controlepeinture
     * @return Affectation
     */
    public function setControlepeinture($controlepeinture)
    {
        $this->controlepeinture = $controlepeinture;

        return $this;
    }

    /**
     * Get controlepeinture
     *
     * @return string
     */
    public function getControlepeinture()
    {
        return $this->controlepeinture;
    }

    /**
     * Set datepeinture
     *
     * @param string $datepeinture
     * @return Affectation
     */
    public function setDatepeinture($datepeinture)
    {
        $this->datepeinture = $datepeinture;

        return $this;
    }

    /**
     * Get datepeinture
     *
     * @return string
     */
    public function getDatepeinture()
    {
        return $this->datepeinture;
    }

    /**
     * Set controlcontroler
     *
     * @param string $controlcontroler
     * @return Affectation
     */
    public function setControlcontroler($controlcontroler)
    {
        $this->controlcontroler = $controlcontroler;

        return $this;
    }

    /**
     * Get controlcontroler
     *
     * @return string
     */
    public function getControlcontroler()
    {
        return $this->controlcontroler;
    }

    /**
     * Set datecontrole
     *
     * @param \DateTime $datecontrole
     * @return Affectation
     */
    public function setDatecontrole($datecontrole)
    {
        $this->datecontrole = $datecontrole;

        return $this;
    }

    /**
     * Get datecontrole
     *
     * @return \DateTime
     */
    public function getDatecontrole()
    {
        return $this->datecontrole;
    }

    /**
     * Set controleessai
     *
     * @param string $controleessai
     * @return Affectation
     */
    public function setControleessai($controleessai)
    {
        $this->controleessai = $controleessai;

        return $this;
    }

    /**
     * Get controleessai
     *
     * @return string
     */
    public function getControleessai()
    {
        return $this->controleessai;
    }

    /**
     * Set dateessai
     *
     * @param \DateTime $dateessai
     * @return Affectation
     */
    public function setDateessai($dateessai)
    {
        $this->dateessai = $dateessai;

        return $this;
    }

    /**
     * Get dateessai
     *
     * @return \DateTime
     */
    public function getDateessai()
    {
        return $this->dateessai;
    }
}
