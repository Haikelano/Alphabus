<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * essaideroute
 *
 * @ORM\Table(name="essaideroute")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\essaiderouteRepository")
 */
class essaideroute
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
     * @ORM\Column(name="paralisme", type="string", length=255, nullable=true)
     */
    private $paralisme;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctionglace", type="string", length=255, nullable=true)
     */
    private $fonctionglace;

    /**
     * @var string
     *
     * @ORM\Column(name="vibration", type="string", length=255, nullable=true)
     */
    private $vibration;

    /**
     * @var string
     *
     * @ORM\Column(name="regimemoteur", type="string", length=255, nullable=true)
     */
    private $regimemoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="rapportvitesse", type="string", length=255, nullable=true)
     */
    private $rapportvitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="boitevitesse", type="string", length=255, nullable=true)
     */
    private $boitevitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="pressionhuile", type="string", length=255, nullable=true)
     */
    private $pressionhuile;

    /**
     * @var string
     *
     * @ORM\Column(name="tempuraturecircuit", type="string", length=255, nullable=true)
     */
    private $tempuraturecircuit;

    /**
     * @var string
     *
     * @ORM\Column(name="blocagedeblocage", type="string", length=255, nullable=true)
     */
    private $blocagedeblocage;

    /**
     * @var string
     *
     * @ORM\Column(name="capteurarticulation", type="string", length=255, nullable=true)
     */
    private $capteurarticulation;

    /**
     * @var string
     *
     * @ORM\Column(name="freinageralentisseur", type="string", length=255, nullable=true)
     */
    private $freinageralentisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="freinagedeservice", type="string", length=255, nullable=true)
     */
    private $freinagedeservice;

    /**
     * @var string
     *
     * @ORM\Column(name="memoirededefautvide", type="string", length=255, nullable=true)
     */
    private $memoirededefautvide;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctrelevment", type="string", length=255, nullable=true)
     */
    private $fonctrelevment;

    /**
     * @var string
     *
     * @ORM\Column(name="kilometrageparcoru", type="string", length=255, nullable=true)
     */
    private $kilometrageparcoru;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqparalisme", type="string", length=255, nullable=true)
     */
    private $rmqparalisme;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctionglace", type="string", length=255, nullable=true)
     */
    private $rmqfonctionglace;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqvibration", type="string", length=255, nullable=true)
     */
    private $rmqvibration;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqregimemoteur", type="string", length=255, nullable=true)
     */
    private $rmqregimemoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqrapportvitesse", type="string", length=255, nullable=true)
     */
    private $rmqrapportvitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqboitevitesse", type="string", length=255, nullable=true)
     */
    private $rmqboitevitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqpressionhuile", type="string", length=255, nullable=true)
     */
    private $rmqpressionhuile;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqtempuraturecircuit", type="string", length=255, nullable=true)
     */
    private $rmqtempuraturecircuit;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqblocagedeblocage", type="string", length=255, nullable=true)
     */
    private $rmqblocagedeblocage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcapteurarticulation", type="string", length=255, nullable=true)
     */
    private $rmqcapteurarticulation;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfreinageralentisseur", type="string", length=255, nullable=true)
     */
    private $rmqfreinageralentisseur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfreinagedeservice", type="string", length=255, nullable=true)
     */
    private $rmqfreinagedeservice;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqmemoirededefautvide", type="string", length=255, nullable=true)
     */
    private $rmqmemoirededefautvide;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctrelevment", type="string", length=255, nullable=true)
     */
    private $rmqfonctrelevment;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqkilometrageparcoru", type="string", length=255, nullable=true)
     */
    private $rmqkilometrageparcoru;

    /**
     * @return string
     */
    public function getRmqparalisme()
    {
        return $this->rmqparalisme;
    }

    /**
     * @param string $rmqparalisme
     */
    public function setRmqparalisme($rmqparalisme)
    {
        $this->rmqparalisme = $rmqparalisme;
    }

    /**
     * @return string
     */
    public function getRmqfonctionglace()
    {
        return $this->rmqfonctionglace;
    }

    /**
     * @param string $rmqfonctionglace
     */
    public function setRmqfonctionglace($rmqfonctionglace)
    {
        $this->rmqfonctionglace = $rmqfonctionglace;
    }

    /**
     * @return string
     */
    public function getRmqvibration()
    {
        return $this->rmqvibration;
    }

    /**
     * @param string $rmqvibration
     */
    public function setRmqvibration($rmqvibration)
    {
        $this->rmqvibration = $rmqvibration;
    }

    /**
     * @return string
     */
    public function getRmqregimemoteur()
    {
        return $this->rmqregimemoteur;
    }

    /**
     * @param string $rmqregimemoteur
     */
    public function setRmqregimemoteur($rmqregimemoteur)
    {
        $this->rmqregimemoteur = $rmqregimemoteur;
    }

    /**
     * @return string
     */
    public function getRmqrapportvitesse()
    {
        return $this->rmqrapportvitesse;
    }

    /**
     * @param string $rmqrapportvitesse
     */
    public function setRmqrapportvitesse($rmqrapportvitesse)
    {
        $this->rmqrapportvitesse = $rmqrapportvitesse;
    }

    /**
     * @return string
     */
    public function getRmqboitevitesse()
    {
        return $this->rmqboitevitesse;
    }

    /**
     * @param string $rmqboitevitesse
     */
    public function setRmqboitevitesse($rmqboitevitesse)
    {
        $this->rmqboitevitesse = $rmqboitevitesse;
    }

    /**
     * @return string
     */
    public function getRmqpressionhuile()
    {
        return $this->rmqpressionhuile;
    }

    /**
     * @param string $rmqpressionhuile
     */
    public function setRmqpressionhuile($rmqpressionhuile)
    {
        $this->rmqpressionhuile = $rmqpressionhuile;
    }

    /**
     * @return string
     */
    public function getRmqtempuraturecircuit()
    {
        return $this->rmqtempuraturecircuit;
    }

    /**
     * @param string $rmqtempuraturecircuit
     */
    public function setRmqtempuraturecircuit($rmqtempuraturecircuit)
    {
        $this->rmqtempuraturecircuit = $rmqtempuraturecircuit;
    }

    /**
     * @return string
     */
    public function getRmqblocagedeblocage()
    {
        return $this->rmqblocagedeblocage;
    }

    /**
     * @param string $rmqblocagedeblocage
     */
    public function setRmqblocagedeblocage($rmqblocagedeblocage)
    {
        $this->rmqblocagedeblocage = $rmqblocagedeblocage;
    }

    /**
     * @return string
     */
    public function getRmqcapteurarticulation()
    {
        return $this->rmqcapteurarticulation;
    }

    /**
     * @param string $rmqcapteurarticulation
     */
    public function setRmqcapteurarticulation($rmqcapteurarticulation)
    {
        $this->rmqcapteurarticulation = $rmqcapteurarticulation;
    }

    /**
     * @return string
     */
    public function getRmqfreinageralentisseur()
    {
        return $this->rmqfreinageralentisseur;
    }

    /**
     * @param string $rmqfreinageralentisseur
     */
    public function setRmqfreinageralentisseur($rmqfreinageralentisseur)
    {
        $this->rmqfreinageralentisseur = $rmqfreinageralentisseur;
    }

    /**
     * @return string
     */
    public function getRmqfreinagedeservice()
    {
        return $this->rmqfreinagedeservice;
    }

    /**
     * @param string $rmqfreinagedeservice
     */
    public function setRmqfreinagedeservice($rmqfreinagedeservice)
    {
        $this->rmqfreinagedeservice = $rmqfreinagedeservice;
    }

    /**
     * @return string
     */
    public function getRmqmemoirededefautvide()
    {
        return $this->rmqmemoirededefautvide;
    }

    /**
     * @param string $rmqmemoirededefautvide
     */
    public function setRmqmemoirededefautvide($rmqmemoirededefautvide)
    {
        $this->rmqmemoirededefautvide = $rmqmemoirededefautvide;
    }

    /**
     * @return string
     */
    public function getRmqfonctrelevment()
    {
        return $this->rmqfonctrelevment;
    }

    /**
     * @param string $rmqfonctrelevment
     */
    public function setRmqfonctrelevment($rmqfonctrelevment)
    {
        $this->rmqfonctrelevment = $rmqfonctrelevment;
    }

    /**
     * @return string
     */
    public function getRmqkilometrageparcoru()
    {
        return $this->rmqkilometrageparcoru;
    }

    /**
     * @param string $rmqkilometrageparcoru
     */
    public function setRmqkilometrageparcoru($rmqkilometrageparcoru)
    {
        $this->rmqkilometrageparcoru = $rmqkilometrageparcoru;
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
     * Set paralisme
     *
     * @param string $paralisme
     * @return essaideroute
     */
    public function setParalisme($paralisme)
    {
        $this->paralisme = $paralisme;

        return $this;
    }

    /**
     * Get paralisme
     *
     * @return string 
     */
    public function getParalisme()
    {
        return $this->paralisme;
    }

    /**
     * Set fonctionglace
     *
     * @param string $fonctionglace
     * @return essaideroute
     */
    public function setFonctionglace($fonctionglace)
    {
        $this->fonctionglace = $fonctionglace;

        return $this;
    }

    /**
     * Get fonctionglace
     *
     * @return string 
     */
    public function getFonctionglace()
    {
        return $this->fonctionglace;
    }

    /**
     * Set vibration
     *
     * @param string $vibration
     * @return essaideroute
     */
    public function setVibration($vibration)
    {
        $this->vibration = $vibration;

        return $this;
    }

    /**
     * Get vibration
     *
     * @return string 
     */
    public function getVibration()
    {
        return $this->vibration;
    }

    /**
     * Set regimemoteur
     *
     * @param string $regimemoteur
     * @return essaideroute
     */
    public function setRegimemoteur($regimemoteur)
    {
        $this->regimemoteur = $regimemoteur;

        return $this;
    }

    /**
     * Get regimemoteur
     *
     * @return string 
     */
    public function getRegimemoteur()
    {
        return $this->regimemoteur;
    }

    /**
     * Set rapportvitesse
     *
     * @param string $rapportvitesse
     * @return essaideroute
     */
    public function setRapportvitesse($rapportvitesse)
    {
        $this->rapportvitesse = $rapportvitesse;

        return $this;
    }

    /**
     * Get rapportvitesse
     *
     * @return string 
     */
    public function getRapportvitesse()
    {
        return $this->rapportvitesse;
    }

    /**
     * Set boitevitesse
     *
     * @param string $boitevitesse
     * @return essaideroute
     */
    public function setBoitevitesse($boitevitesse)
    {
        $this->boitevitesse = $boitevitesse;

        return $this;
    }

    /**
     * Get boitevitesse
     *
     * @return string 
     */
    public function getBoitevitesse()
    {
        return $this->boitevitesse;
    }

    /**
     * Set pressionhuile
     *
     * @param string $pressionhuile
     * @return essaideroute
     */
    public function setPressionhuile($pressionhuile)
    {
        $this->pressionhuile = $pressionhuile;

        return $this;
    }

    /**
     * Get pressionhuile
     *
     * @return string 
     */
    public function getPressionhuile()
    {
        return $this->pressionhuile;
    }

    /**
     * Set tempuraturecircuit
     *
     * @param string $tempuraturecircuit
     * @return essaideroute
     */
    public function setTempuraturecircuit($tempuraturecircuit)
    {
        $this->tempuraturecircuit = $tempuraturecircuit;

        return $this;
    }

    /**
     * Get tempuraturecircuit
     *
     * @return string 
     */
    public function getTempuraturecircuit()
    {
        return $this->tempuraturecircuit;
    }

    /**
     * Set blocagedeblocage
     *
     * @param string $blocagedeblocage
     * @return essaideroute
     */
    public function setBlocagedeblocage($blocagedeblocage)
    {
        $this->blocagedeblocage = $blocagedeblocage;

        return $this;
    }

    /**
     * Get blocagedeblocage
     *
     * @return string 
     */
    public function getBlocagedeblocage()
    {
        return $this->blocagedeblocage;
    }

    /**
     * Set capteurarticulation
     *
     * @param string $capteurarticulation
     * @return essaideroute
     */
    public function setCapteurarticulation($capteurarticulation)
    {
        $this->capteurarticulation = $capteurarticulation;

        return $this;
    }

    /**
     * Get capteurarticulation
     *
     * @return string 
     */
    public function getCapteurarticulation()
    {
        return $this->capteurarticulation;
    }

    /**
     * Set freinageralentisseur
     *
     * @param string $freinageralentisseur
     * @return essaideroute
     */
    public function setFreinageralentisseur($freinageralentisseur)
    {
        $this->freinageralentisseur = $freinageralentisseur;

        return $this;
    }

    /**
     * Get freinageralentisseur
     *
     * @return string 
     */
    public function getFreinageralentisseur()
    {
        return $this->freinageralentisseur;
    }

    /**
     * Set freinagedeservice
     *
     * @param string $freinagedeservice
     * @return essaideroute
     */
    public function setFreinagedeservice($freinagedeservice)
    {
        $this->freinagedeservice = $freinagedeservice;

        return $this;
    }

    /**
     * Get freinagedeservice
     *
     * @return string 
     */
    public function getFreinagedeservice()
    {
        return $this->freinagedeservice;
    }

    /**
     * Set memoirededefautvide
     *
     * @param string $memoirededefautvide
     * @return essaideroute
     */
    public function setMemoirededefautvide($memoirededefautvide)
    {
        $this->memoirededefautvide = $memoirededefautvide;

        return $this;
    }

    /**
     * Get memoirededefautvide
     *
     * @return string 
     */
    public function getMemoirededefautvide()
    {
        return $this->memoirededefautvide;
    }

    /**
     * Set fonctrelevment
     *
     * @param string $fonctrelevment
     * @return essaideroute
     */
    public function setFonctrelevment($fonctrelevment)
    {
        $this->fonctrelevment = $fonctrelevment;

        return $this;
    }

    /**
     * Get fonctrelevment
     *
     * @return string 
     */
    public function getFonctrelevment()
    {
        return $this->fonctrelevment;
    }

    /**
     * Set kilometrageparcoru
     *
     * @param string $kilometrageparcoru
     * @return essaideroute
     */
    public function setKilometrageparcoru($kilometrageparcoru)
    {
        $this->kilometrageparcoru = $kilometrageparcoru;

        return $this;
    }

    /**
     * Get kilometrageparcoru
     *
     * @return string 
     */
    public function getKilometrageparcoru()
    {
        return $this->kilometrageparcoru;
    }
}
