<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * circuitelectrique
 *
 * @ORM\Table(name="circuitelectrique")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\circuitelectriqueRepository")
 */
class circuitelectrique
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
     * @ORM\Column(name="eclairage", type="string", length=255, nullable=true)
     */
    private $eclairage;

    /**
     * @var string
     *
     * @ORM\Column(name="eclairageinter", type="string", length=255, nullable=true)
     */
    private $eclairageinter;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctbutton", type="string", length=255, nullable=true)
     */
    private $fonctbutton;

    /**
     * @var string
     *
     * @ORM\Column(name="foncfreint", type="string", length=255, nullable=true)
     */
    private $foncfreint;

    /**
     * @var string
     *
     * @ORM\Column(name="buttonregl", type="string", length=255, nullable=true)
     */
    private $buttonregl;

    /**
     * @var string
     *
     * @ORM\Column(name="buttonposte", type="string", length=255, nullable=true)
     */
    private $buttonposte;

    /**
     * @var string
     *
     * @ORM\Column(name="controlecharge", type="string", length=255, nullable=true)
     */
    private $controlecharge;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctavertiseur", type="string", length=255, nullable=true)
     */
    private $fonctavertiseur;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctcapteur", type="string", length=255, nullable=true)
     */
    private $fonctcapteur;

    /**
     * @var string
     *
     * @ORM\Column(name="sonneriemarche", type="string", length=255, nullable=true)
     */
    private $sonneriemarche;

    /**
     * @var string
     *
     * @ORM\Column(name="fontbuttonmoteur", type="string", length=255, nullable=true)
     */
    private $fontbuttonmoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="capteurportemoteur", type="string", length=255, nullable=true)
     */
    private $capteurportemoteur;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqeclairage", type="string", length=255, nullable=true)
     */
    private $rmqeclairage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqeclairageinter", type="string", length=255, nullable=true)
     */
    private $rmqeclairageinter;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctbutton", type="string", length=255, nullable=true)
     */
    private $rmqfonctbutton;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfoncfreint", type="string", length=255, nullable=true)
     */
    private $rmqfoncfreint;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqbuttonregl", type="string", length=255, nullable=true)
     */
    private $rmqbuttonregl;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqbuttonposte", type="string", length=255, nullable=true)
     */
    private $rmqbuttonposte;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcontrolecharge", type="string", length=255, nullable=true)
     */
    private $rmqcontrolecharge;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctavertiseur", type="string", length=255, nullable=true)
     */
    private $rmqfonctavertiseur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctcapteur", type="string", length=255, nullable=true)
     */
    private $rmqfonctcapteur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqsonneriemarche", type="string", length=255, nullable=true)
     */
    private $rmqsonneriemarche;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfontbuttonmoteur", type="string", length=255, nullable=true)
     */
    private $rmqfontbuttonmoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcapteurportemoteur", type="string", length=255, nullable=true)
     */
    private $rmqcapteurportemoteur;

    /**
     * @return string
     */
    public function getRmqeclairage()
    {
        return $this->rmqeclairage;
    }

    /**
     * @param string $rmqeclairage
     */
    public function setRmqeclairage($rmqeclairage)
    {
        $this->rmqeclairage = $rmqeclairage;
    }

    /**
     * @return string
     */
    public function getRmqeclairageinter()
    {
        return $this->rmqeclairageinter;
    }

    /**
     * @param string $rmqeclairageinter
     */
    public function setRmqeclairageinter($rmqeclairageinter)
    {
        $this->rmqeclairageinter = $rmqeclairageinter;
    }

    /**
     * @return string
     */
    public function getRmqfonctbutton()
    {
        return $this->rmqfonctbutton;
    }

    /**
     * @param string $rmqfonctbutton
     */
    public function setRmqfonctbutton($rmqfonctbutton)
    {
        $this->rmqfonctbutton = $rmqfonctbutton;
    }

    /**
     * @return string
     */
    public function getRmqfoncfreint()
    {
        return $this->rmqfoncfreint;
    }

    /**
     * @param string $rmqfoncfreint
     */
    public function setRmqfoncfreint($rmqfoncfreint)
    {
        $this->rmqfoncfreint = $rmqfoncfreint;
    }

    /**
     * @return string
     */
    public function getRmqbuttonregl()
    {
        return $this->rmqbuttonregl;
    }

    /**
     * @param string $rmqbuttonregl
     */
    public function setRmqbuttonregl($rmqbuttonregl)
    {
        $this->rmqbuttonregl = $rmqbuttonregl;
    }

    /**
     * @return string
     */
    public function getRmqbuttonposte()
    {
        return $this->rmqbuttonposte;
    }

    /**
     * @param string $rmqbuttonposte
     */
    public function setRmqbuttonposte($rmqbuttonposte)
    {
        $this->rmqbuttonposte = $rmqbuttonposte;
    }

    /**
     * @return string
     */
    public function getRmqcontrolecharge()
    {
        return $this->rmqcontrolecharge;
    }

    /**
     * @param string $rmqcontrolecharge
     */
    public function setRmqcontrolecharge($rmqcontrolecharge)
    {
        $this->rmqcontrolecharge = $rmqcontrolecharge;
    }

    /**
     * @return string
     */
    public function getRmqfonctavertiseur()
    {
        return $this->rmqfonctavertiseur;
    }

    /**
     * @param string $rmqfonctavertiseur
     */
    public function setRmqfonctavertiseur($rmqfonctavertiseur)
    {
        $this->rmqfonctavertiseur = $rmqfonctavertiseur;
    }

    /**
     * @return string
     */
    public function getRmqfonctcapteur()
    {
        return $this->rmqfonctcapteur;
    }

    /**
     * @param string $rmqfonctcapteur
     */
    public function setRmqfonctcapteur($rmqfonctcapteur)
    {
        $this->rmqfonctcapteur = $rmqfonctcapteur;
    }

    /**
     * @return string
     */
    public function getRmqsonneriemarche()
    {
        return $this->rmqsonneriemarche;
    }

    /**
     * @param string $rmqsonneriemarche
     */
    public function setRmqsonneriemarche($rmqsonneriemarche)
    {
        $this->rmqsonneriemarche = $rmqsonneriemarche;
    }

    /**
     * @return string
     */
    public function getRmqfontbuttonmoteur()
    {
        return $this->rmqfontbuttonmoteur;
    }

    /**
     * @param string $rmqfontbuttonmoteur
     */
    public function setRmqfontbuttonmoteur($rmqfontbuttonmoteur)
    {
        $this->rmqfontbuttonmoteur = $rmqfontbuttonmoteur;
    }

    /**
     * @return string
     */
    public function getRmqcapteurportemoteur()
    {
        return $this->rmqcapteurportemoteur;
    }

    /**
     * @param string $rmqcapteurportemoteur
     */
    public function setRmqcapteurportemoteur($rmqcapteurportemoteur)
    {
        $this->rmqcapteurportemoteur = $rmqcapteurportemoteur;
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
     * Set eclairage
     *
     * @param string $eclairage
     * @return circuitelectrique
     */
    public function setEclairage($eclairage)
    {
        $this->eclairage = $eclairage;

        return $this;
    }

    /**
     * Get eclairage
     *
     * @return string 
     */
    public function getEclairage()
    {
        return $this->eclairage;
    }

    /**
     * Set eclairageinter
     *
     * @param string $eclairageinter
     * @return circuitelectrique
     */
    public function setEclairageinter($eclairageinter)
    {
        $this->eclairageinter = $eclairageinter;

        return $this;
    }

    /**
     * Get eclairageinter
     *
     * @return string 
     */
    public function getEclairageinter()
    {
        return $this->eclairageinter;
    }

    /**
     * Set fonctbutton
     *
     * @param string $fonctbutton
     * @return circuitelectrique
     */
    public function setFonctbutton($fonctbutton)
    {
        $this->fonctbutton = $fonctbutton;

        return $this;
    }

    /**
     * Get fonctbutton
     *
     * @return string 
     */
    public function getFonctbutton()
    {
        return $this->fonctbutton;
    }

    /**
     * Set foncfreint
     *
     * @param string $foncfreint
     * @return circuitelectrique
     */
    public function setFoncfreint($foncfreint)
    {
        $this->foncfreint = $foncfreint;

        return $this;
    }

    /**
     * Get foncfreint
     *
     * @return string 
     */
    public function getFoncfreint()
    {
        return $this->foncfreint;
    }

    /**
     * Set buttonregl
     *
     * @param string $buttonregl
     * @return circuitelectrique
     */
    public function setButtonregl($buttonregl)
    {
        $this->buttonregl = $buttonregl;

        return $this;
    }

    /**
     * Get buttonregl
     *
     * @return string 
     */
    public function getButtonregl()
    {
        return $this->buttonregl;
    }

    /**
     * Set buttonposte
     *
     * @param string $buttonposte
     * @return circuitelectrique
     */
    public function setButtonposte($buttonposte)
    {
        $this->buttonposte = $buttonposte;

        return $this;
    }

    /**
     * Get buttonposte
     *
     * @return string 
     */
    public function getButtonposte()
    {
        return $this->buttonposte;
    }

    /**
     * Set controlecharge
     *
     * @param string $controlecharge
     * @return circuitelectrique
     */
    public function setControlecharge($controlecharge)
    {
        $this->controlecharge = $controlecharge;

        return $this;
    }

    /**
     * Get controlecharge
     *
     * @return string 
     */
    public function getControlecharge()
    {
        return $this->controlecharge;
    }

    /**
     * Set fonctavertiseur
     *
     * @param string $fonctavertiseur
     * @return circuitelectrique
     */
    public function setFonctavertiseur($fonctavertiseur)
    {
        $this->fonctavertiseur = $fonctavertiseur;

        return $this;
    }

    /**
     * Get fonctavertiseur
     *
     * @return string 
     */
    public function getFonctavertiseur()
    {
        return $this->fonctavertiseur;
    }

    /**
     * Set fonctcapteur
     *
     * @param string $fonctcapteur
     * @return circuitelectrique
     */
    public function setFonctcapteur($fonctcapteur)
    {
        $this->fonctcapteur = $fonctcapteur;

        return $this;
    }

    /**
     * Get fonctcapteur
     *
     * @return string 
     */
    public function getFonctcapteur()
    {
        return $this->fonctcapteur;
    }

    /**
     * Set sonneriemarche
     *
     * @param string $sonneriemarche
     * @return circuitelectrique
     */
    public function setSonneriemarche($sonneriemarche)
    {
        $this->sonneriemarche = $sonneriemarche;

        return $this;
    }

    /**
     * Get sonneriemarche
     *
     * @return string 
     */
    public function getSonneriemarche()
    {
        return $this->sonneriemarche;
    }

    /**
     * Set fontbuttonmoteur
     *
     * @param string $fontbuttonmoteur
     * @return circuitelectrique
     */
    public function setFontbuttonmoteur($fontbuttonmoteur)
    {
        $this->fontbuttonmoteur = $fontbuttonmoteur;

        return $this;
    }

    /**
     * Get fontbuttonmoteur
     *
     * @return string 
     */
    public function getFontbuttonmoteur()
    {
        return $this->fontbuttonmoteur;
    }

    /**
     * Set capteurportemoteur
     *
     * @param string $capteurportemoteur
     * @return circuitelectrique
     */
    public function setCapteurportemoteur($capteurportemoteur)
    {
        $this->capteurportemoteur = $capteurportemoteur;

        return $this;
    }

    /**
     * Get capteurportemoteur
     *
     * @return string 
     */
    public function getCapteurportemoteur()
    {
        return $this->capteurportemoteur;
    }
}
