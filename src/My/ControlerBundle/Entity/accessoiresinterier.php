<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * accessoiresinterier
 *
 * @ORM\Table(name="accessoiresinterier")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\accessoiresinterierRepository")
 */
class accessoiresinterier
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
     * @ORM\Column(name="rideau", type="string", length=255, nullable=true)
     */
    private $rideau;

    /**
     * @var string
     *
     * @ORM\Column(name="parasoleil", type="string", length=255, nullable=true)
     */
    private $parasoleil;

    /**
     * @var string
     *
     * @ORM\Column(name="cendries", type="string", length=255, nullable=true)
     */
    private $cendries;

    /**
     * @var string
     *
     * @ORM\Column(name="trappes", type="string", length=255, nullable=true)
     */
    private $trappes;

    /**
     * @var string
     *
     * @ORM\Column(name="finitionmastic", type="string", length=255, nullable=true)
     */
    private $finitionmastic;

    /**
     * @var string
     *
     * @ORM\Column(name="baguettejoin", type="string", length=255, nullable=true)
     */
    private $baguettejoin;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationporte", type="string", length=255, nullable=true)
     */
    private $fixationporte;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationtableau", type="string", length=255, nullable=true)
     */
    private $fixationtableau;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqrideau", type="string", length=255, nullable=true)
     */
    private $rmqrideau;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqparasoleil", type="string", length=255, nullable=true)
     */
    private $rmqparasoleil;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcendries", type="string", length=255, nullable=true)
     */
    private $rmqcendries;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqtrappes", type="string", length=255, nullable=true)
     */
    private $rmqtrappes;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfinitionmastic", type="string", length=255, nullable=true)
     */
    private $rmqfinitionmastic;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqbaguettejoin", type="string", length=255, nullable=true)
     */
    private $rmqbaguettejoin;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationporte", type="string", length=255, nullable=true)
     */
    private $rmqfixationporte;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationtableau", type="string", length=255, nullable=true)
     */
    private $rmqfixationtableau;

    /**
     * @return string
     */
    public function getRmqrideau()
    {
        return $this->rmqrideau;
    }

    /**
     * @param string $rmqrideau
     */
    public function setRmqrideau($rmqrideau)
    {
        $this->rmqrideau = $rmqrideau;
    }

    /**
     * @return string
     */
    public function getRmqparasoleil()
    {
        return $this->rmqparasoleil;
    }

    /**
     * @param string $rmqparasoleil
     */
    public function setRmqparasoleil($rmqparasoleil)
    {
        $this->rmqparasoleil = $rmqparasoleil;
    }

    /**
     * @return string
     */
    public function getRmqcendries()
    {
        return $this->rmqcendries;
    }

    /**
     * @param string $rmqcendries
     */
    public function setRmqcendries($rmqcendries)
    {
        $this->rmqcendries = $rmqcendries;
    }

    /**
     * @return string
     */
    public function getRmqtrappes()
    {
        return $this->rmqtrappes;
    }

    /**
     * @param string $rmqtrappes
     */
    public function setRmqtrappes($rmqtrappes)
    {
        $this->rmqtrappes = $rmqtrappes;
    }

    /**
     * @return string
     */
    public function getRmqfinitionmastic()
    {
        return $this->rmqfinitionmastic;
    }

    /**
     * @param string $rmqfinitionmastic
     */
    public function setRmqfinitionmastic($rmqfinitionmastic)
    {
        $this->rmqfinitionmastic = $rmqfinitionmastic;
    }

    /**
     * @return string
     */
    public function getRmqbaguettejoin()
    {
        return $this->rmqbaguettejoin;
    }

    /**
     * @param string $rmqbaguettejoin
     */
    public function setRmqbaguettejoin($rmqbaguettejoin)
    {
        $this->rmqbaguettejoin = $rmqbaguettejoin;
    }

    /**
     * @return string
     */
    public function getRmqfixationporte()
    {
        return $this->rmqfixationporte;
    }

    /**
     * @param string $rmqfixationporte
     */
    public function setRmqfixationporte($rmqfixationporte)
    {
        $this->rmqfixationporte = $rmqfixationporte;
    }

    /**
     * @return string
     */
    public function getRmqfixationtableau()
    {
        return $this->rmqfixationtableau;
    }

    /**
     * @param string $rmqfixationtableau
     */
    public function setRmqfixationtableau($rmqfixationtableau)
    {
        $this->rmqfixationtableau = $rmqfixationtableau;
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
     * Set rideau
     *
     * @param string $rideau
     * @return accessoiresinterier
     */
    public function setRideau($rideau)
    {
        $this->rideau = $rideau;

        return $this;
    }

    /**
     * Get rideau
     *
     * @return string 
     */
    public function getRideau()
    {
        return $this->rideau;
    }

    /**
     * Set parasoleil
     *
     * @param string $parasoleil
     * @return accessoiresinterier
     */
    public function setParasoleil($parasoleil)
    {
        $this->parasoleil = $parasoleil;

        return $this;
    }

    /**
     * Get parasoleil
     *
     * @return string 
     */
    public function getParasoleil()
    {
        return $this->parasoleil;
    }

    /**
     * Set cendries
     *
     * @param string $cendries
     * @return accessoiresinterier
     */
    public function setCendries($cendries)
    {
        $this->cendries = $cendries;

        return $this;
    }

    /**
     * Get cendries
     *
     * @return string 
     */
    public function getCendries()
    {
        return $this->cendries;
    }

    /**
     * Set trappes
     *
     * @param string $trappes
     * @return accessoiresinterier
     */
    public function setTrappes($trappes)
    {
        $this->trappes = $trappes;

        return $this;
    }

    /**
     * Get trappes
     *
     * @return string 
     */
    public function getTrappes()
    {
        return $this->trappes;
    }

    /**
     * Set finitionmastic
     *
     * @param string $finitionmastic
     * @return accessoiresinterier
     */
    public function setFinitionmastic($finitionmastic)
    {
        $this->finitionmastic = $finitionmastic;

        return $this;
    }

    /**
     * Get finitionmastic
     *
     * @return string 
     */
    public function getFinitionmastic()
    {
        return $this->finitionmastic;
    }

    /**
     * Set baguettejoin
     *
     * @param string $baguettejoin
     * @return accessoiresinterier
     */
    public function setBaguettejoin($baguettejoin)
    {
        $this->baguettejoin = $baguettejoin;

        return $this;
    }

    /**
     * Get baguettejoin
     *
     * @return string 
     */
    public function getBaguettejoin()
    {
        return $this->baguettejoin;
    }

    /**
     * Set fixationporte
     *
     * @param string $fixationporte
     * @return accessoiresinterier
     */
    public function setFixationporte($fixationporte)
    {
        $this->fixationporte = $fixationporte;

        return $this;
    }

    /**
     * Get fixationporte
     *
     * @return string 
     */
    public function getFixationporte()
    {
        return $this->fixationporte;
    }

    /**
     * Set fixationtableau
     *
     * @param string $fixationtableau
     * @return accessoiresinterier
     */
    public function setFixationtableau($fixationtableau)
    {
        $this->fixationtableau = $fixationtableau;

        return $this;
    }

    /**
     * Get fixationtableau
     *
     * @return string 
     */
    public function getFixationtableau()
    {
        return $this->fixationtableau;
    }
}
