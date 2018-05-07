<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Accesoirexterieur
 *
 * @ORM\Table(name="accesoirexterieur")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\AccesoirexterieurRepository")
 */
class Accesoirexterieur
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
     * @ORM\Column(name="isolation", type="string", length=255, nullable=true)
     */
    private $isolation;

    /**
     * @var string
     *
     * @ORM\Column(name="finition", type="string", length=255, nullable=true)
     */
    private $finition;

    /**
     * @var string
     *
     * @ORM\Column(name="retroviseur", type="string", length=255, nullable=true)
     */
    private $retroviseur;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationpara", type="string", length=255, nullable=true)
     */
    private $fixationpara;

    /**
     * @var string
     *
     * @ORM\Column(name="etatparachoc", type="string", length=255, nullable=true)
     */
    private $etatparachoc;

    /**
     * @var string
     *
     * @ORM\Column(name="cachefeu", type="string", length=255, nullable=true)
     */
    private $cachefeu;

    /**
     * @var string
     *
     * @ORM\Column(name="grillebouches", type="string", length=255, nullable=true)
     */
    private $grillebouches;

    /**
     * @var string
     *
     * @ORM\Column(name="baguette", type="string", length=255, nullable=true)
     */
    private $baguette;

    /**
     * @var string
     *
     * @ORM\Column(name="porte", type="string", length=255, nullable=true)
     */
    private $porte;

    /**
     * @var string
     *
     * @ORM\Column(name="essui", type="string", length=255, nullable=true)
     */
    private $essui;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqisolation", type="string", length=255, nullable=true)
     */
    private $rmqisolation;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfinition", type="string", length=255, nullable=true)
     */
    private $rmqfinition;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqretroviseur", type="string", length=255, nullable=true)
     */
    private $rmqretroviseur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationpara", type="string", length=255, nullable=true)
     */
    private $rmqfixationpara;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqetatparachoc", type="string", length=255, nullable=true)
     */
    private $rmqetatparachoc;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcachefeu", type="string", length=255, nullable=true)
     */
    private $rmqcachefeu;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqgrillebouches", type="string", length=255, nullable=true)
     */
    private $rmqgrillebouches;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqbaguette", type="string", length=255, nullable=true)
     */
    private $rmqbaguette;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqporte", type="string", length=255, nullable=true)
     */
    private $rmqporte;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqessui", type="string", length=255, nullable=true)
     */
    private $rmqessui;

    /**
     * @return string
     */
    public function getRmqisolation()
    {
        return $this->rmqisolation;
    }

    /**
     * @param string $rmqisolation
     */
    public function setRmqisolation($rmqisolation)
    {
        $this->rmqisolation = $rmqisolation;
    }

    /**
     * @return string
     */
    public function getRmqfinition()
    {
        return $this->rmqfinition;
    }

    /**
     * @param string $rmqfinition
     */
    public function setRmqfinition($rmqfinition)
    {
        $this->rmqfinition = $rmqfinition;
    }

    /**
     * @return string
     */
    public function getRmqretroviseur()
    {
        return $this->rmqretroviseur;
    }

    /**
     * @param string $rmqretroviseur
     */
    public function setRmqretroviseur($rmqretroviseur)
    {
        $this->rmqretroviseur = $rmqretroviseur;
    }

    /**
     * @return string
     */
    public function getRmqfixationpara()
    {
        return $this->rmqfixationpara;
    }

    /**
     * @param string $rmqfixationpara
     */
    public function setRmqfixationpara($rmqfixationpara)
    {
        $this->rmqfixationpara = $rmqfixationpara;
    }

    /**
     * @return string
     */
    public function getRmqetatparachoc()
    {
        return $this->rmqetatparachoc;
    }

    /**
     * @param string $rmqetatparachoc
     */
    public function setRmqetatparachoc($rmqetatparachoc)
    {
        $this->rmqetatparachoc = $rmqetatparachoc;
    }

    /**
     * @return string
     */
    public function getRmqcachefeu()
    {
        return $this->rmqcachefeu;
    }

    /**
     * @param string $rmqcachefeu
     */
    public function setRmqcachefeu($rmqcachefeu)
    {
        $this->rmqcachefeu = $rmqcachefeu;
    }

    /**
     * @return string
     */
    public function getRmqgrillebouches()
    {
        return $this->rmqgrillebouches;
    }

    /**
     * @param string $rmqgrillebouches
     */
    public function setRmqgrillebouches($rmqgrillebouches)
    {
        $this->rmqgrillebouches = $rmqgrillebouches;
    }

    /**
     * @return string
     */
    public function getRmqbaguette()
    {
        return $this->rmqbaguette;
    }

    /**
     * @param string $rmqbaguette
     */
    public function setRmqbaguette($rmqbaguette)
    {
        $this->rmqbaguette = $rmqbaguette;
    }

    /**
     * @return string
     */
    public function getRmqporte()
    {
        return $this->rmqporte;
    }

    /**
     * @param string $rmqporte
     */
    public function setRmqporte($rmqporte)
    {
        $this->rmqporte = $rmqporte;
    }

    /**
     * @return string
     */
    public function getRmqessui()
    {
        return $this->rmqessui;
    }

    /**
     * @param string $rmqessui
     */
    public function setRmqessui($rmqessui)
    {
        $this->rmqessui = $rmqessui;
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
     * Set isolation
     *
     * @param string $isolation
     * @return Accesoirexterieur
     */
    public function setIsolation($isolation)
    {
        $this->isolation = $isolation;

        return $this;
    }

    /**
     * Get isolation
     *
     * @return string 
     */
    public function getIsolation()
    {
        return $this->isolation;
    }

    /**
     * Set finition
     *
     * @param string $finition
     * @return Accesoirexterieur
     */
    public function setFinition($finition)
    {
        $this->finition = $finition;

        return $this;
    }

    /**
     * Get finition
     *
     * @return string 
     */
    public function getFinition()
    {
        return $this->finition;
    }

    /**
     * Set retroviseur
     *
     * @param string $retroviseur
     * @return Accesoirexterieur
     */
    public function setRetroviseur($retroviseur)
    {
        $this->retroviseur = $retroviseur;

        return $this;
    }

    /**
     * Get retroviseur
     *
     * @return string 
     */
    public function getRetroviseur()
    {
        return $this->retroviseur;
    }

    /**
     * Set fixationpara
     *
     * @param string $fixationpara
     * @return Accesoirexterieur
     */
    public function setFixationpara($fixationpara)
    {
        $this->fixationpara = $fixationpara;

        return $this;
    }

    /**
     * Get fixationpara
     *
     * @return string 
     */
    public function getFixationpara()
    {
        return $this->fixationpara;
    }

    /**
     * Set etatparachoc
     *
     * @param string $etatparachoc
     * @return Accesoirexterieur
     */
    public function setEtatparachoc($etatparachoc)
    {
        $this->etatparachoc = $etatparachoc;

        return $this;
    }

    /**
     * Get etatparachoc
     *
     * @return string 
     */
    public function getEtatparachoc()
    {
        return $this->etatparachoc;
    }

    /**
     * Set cachefeu
     *
     * @param string $cachefeu
     * @return Accesoirexterieur
     */
    public function setCachefeu($cachefeu)
    {
        $this->cachefeu = $cachefeu;

        return $this;
    }

    /**
     * Get cachefeu
     *
     * @return string 
     */
    public function getCachefeu()
    {
        return $this->cachefeu;
    }

    /**
     * Set grillebouches
     *
     * @param string $grillebouches
     * @return Accesoirexterieur
     */
    public function setGrillebouches($grillebouches)
    {
        $this->grillebouches = $grillebouches;

        return $this;
    }

    /**
     * Get grillebouches
     *
     * @return string 
     */
    public function getGrillebouches()
    {
        return $this->grillebouches;
    }

    /**
     * Set baguette
     *
     * @param string $baguette
     * @return Accesoirexterieur
     */
    public function setBaguette($baguette)
    {
        $this->baguette = $baguette;

        return $this;
    }

    /**
     * Get baguette
     *
     * @return string 
     */
    public function getBaguette()
    {
        return $this->baguette;
    }

    /**
     * Set porte
     *
     * @param string $porte
     * @return Accesoirexterieur
     */
    public function setPorte($porte)
    {
        $this->porte = $porte;

        return $this;
    }

    /**
     * Get porte
     *
     * @return string 
     */
    public function getPorte()
    {
        return $this->porte;
    }

    /**
     * Set essui
     *
     * @param string $essui
     * @return Accesoirexterieur
     */
    public function setEssui($essui)
    {
        $this->essui = $essui;

        return $this;
    }

    /**
     * Get essui
     *
     * @return string 
     */
    public function getEssui()
    {
        return $this->essui;
    }
}
