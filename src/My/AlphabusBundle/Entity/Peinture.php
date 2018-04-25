<?php

namespace My\AlphabusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Peinture
 *
 * @ORM\Table(name="peinture")
 * @ORM\Entity(repositoryClass="My\AlphabusBundle\Repository\PeintureRepository")
 */
class Peinture
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
     * @var bool
     *
     * @ORM\Column(name="etat", type="boolean", options={"default"=false}, nullable=true)
     */
    private $etat;

    /**
     * @return bool
     */
    public function isEtat()
    {
        return $this->etat;
    }

    /**
     * @param bool $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="protectionrouille", type="string", length=255, nullable=true)
     */
    private $protectionrouille;

    /**
     * @var string
     *
     * @ORM\Column(name="couchepeinture", type="string", length=255, nullable=true)
     */
    private $couchepeinture;

    /**
     * @var string
     *
     * @ORM\Column(name="peinturefaceav", type="string", length=255, nullable=true)
     */
    private $peinturefaceav;

    /**
     * @var string
     *
     * @ORM\Column(name="peinturefacear", type="string", length=255, nullable=true)
     */
    private $peinturefacear;

    /**
     * @var string
     *
     * @ORM\Column(name="peinturefacedr", type="string", length=255, nullable=true)
     */
    private $peinturefacedr;

    /**
     * @var string
     *
     * @ORM\Column(name="peinturefaceg", type="string", length=255, nullable=true)
     */
    private $peinturefaceg;
 /**
     * @var string
     *
     * @ORM\Column(name="etanchete", type="string", length=255, nullable=true)
     */
    private $etanchete;
    /**
     * @var string
     *
     * @ORM\Column(name="interrieur", type="string", length=255, nullable=true)
     */
    private $interrieur;
     /**
     * @var string
     *
     * @ORM\Column(name="bascaisse", type="string", length=255, nullable=true)
     */
    private $bascaisse;
     /**
     * @var string
     *
     * @ORM\Column(name="decorationclient", type="string", length=255, nullable=true)
     */
    private $decorationclient;
     /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;
    
    /**
     * @var string
     *
     * @ORM\Column(name="repprotectionrouille", type="string", length=255, nullable=true)
     */
    private $repprotectionrouille;

    /**
     * @var string
     *
     * @ORM\Column(name="repcouchepeinture", type="string", length=255, nullable=true)
     */
    private $repcouchepeinture;

    /**
     * @var string
     *
     * @ORM\Column(name="reppeinturefaceav", type="string", length=255, nullable=true)
     */
    private $reppeinturefaceav;

    /**
     * @var string
     *
     * @ORM\Column(name="reppeinturefacear", type="string", length=255, nullable=true)
     */
    private $reppeinturefacear;

    /**
     * @var string
     *
     * @ORM\Column(name="reppeinturefacedr", type="string", length=255, nullable=true)
     */
    private $reppeinturefacedr;

    /**
     * @var string
     *
     * @ORM\Column(name="reppeinturefaceg", type="string", length=255, nullable=true)
     */
    private $reppeinturefaceg;
 /**
     * @var string
     *
     * @ORM\Column(name="repetanchete", type="string", length=255, nullable=true)
     */
    private $repetanchete;
    /**
     * @var string
     *
     * @ORM\Column(name="repinterrieur", type="string", length=255, nullable=true)
     */
    private $repinterrieur;
     /**
     * @var string
     *
     * @ORM\Column(name="repbascaisse", type="string", length=255, nullable=true)
     */
    private $repbascaisse;
     /**
     * @var string
     *
     * @ORM\Column(name="repdecorationclient", type="string", length=255, nullable=true)
     */
    private $repdecorationclient;
     /**
     * @var string
     *
     * @ORM\Column(name="repremarques", type="string", length=255, nullable=true)
     */
    private $repremarques;
    
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
     * Set date
     *
     * @param \DateTime $date
     * @return Peinture
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
     * Set protectionrouille
     *
     * @param string $protectionrouille
     * @return Peinture
     */
    public function setProtectionrouille($protectionrouille)
    {
        $this->protectionrouille = $protectionrouille;

        return $this;
    }

    /**
     * Get protectionrouille
     *
     * @return string 
     */
    public function getProtectionrouille()
    {
        return $this->protectionrouille;
    }

    /**
     * Set couchepeinture
     *
     * @param string $couchepeinture
     * @return Peinture
     */
    public function setCouchepeinture($couchepeinture)
    {
        $this->couchepeinture = $couchepeinture;

        return $this;
    }

    /**
     * Get couchepeinture
     *
     * @return string 
     */
    public function getCouchepeinture()
    {
        return $this->couchepeinture;
    }

    /**
     * Set peinturefaceav
     *
     * @param string $peinturefaceav
     * @return Peinture
     */
    public function setPeinturefaceav($peinturefaceav)
    {
        $this->peinturefaceav = $peinturefaceav;

        return $this;
    }

    /**
     * Get peinturefaceav
     *
     * @return string 
     */
    public function getPeinturefaceav()
    {
        return $this->peinturefaceav;
    }

    /**
     * Set peinturefacear
     *
     * @param string $peinturefacear
     * @return Peinture
     */
    public function setPeinturefacear($peinturefacear)
    {
        $this->peinturefacear = $peinturefacear;

        return $this;
    }

    /**
     * Get peinturefacear
     *
     * @return string 
     */
    public function getPeinturefacear()
    {
        return $this->peinturefacear;
    }

    /**
     * Set peinturefacedr
     *
     * @param string $peinturefacedr
     * @return Peinture
     */
    public function setPeinturefacedr($peinturefacedr)
    {
        $this->peinturefacedr = $peinturefacedr;

        return $this;
    }

    /**
     * Get peinturefacedr
     *
     * @return string 
     */
    public function getPeinturefacedr()
    {
        return $this->peinturefacedr;
    }

    /**
     * Set peinturefaceg
     *
     * @param string $peinturefaceg
     * @return Peinture
     */
    public function setPeinturefaceg($peinturefaceg)
    {
        $this->peinturefaceg = $peinturefaceg;

        return $this;
    }

    /**
     * Get peinturefaceg
     *
     * @return string 
     */
    public function getPeinturefaceg()
    {
        return $this->peinturefaceg;
    }
    function getEtanchete() {
        return $this->etanchete;
    }

    function getInterrieur() {
        return $this->interrieur;
    }

    function getBascaisse() {
        return $this->bascaisse;
    }

    function getDecorationclient() {
        return $this->decorationclient;
    }

    function getRemarques() {
        return $this->remarques;
    }

    function setEtanchete($etanchete) {
        $this->etanchete = $etanchete;
    }

    function setInterrieur($interrieur) {
        $this->interrieur = $interrieur;
    }

    function setBascaisse($bascaisse) {
        $this->bascaisse = $bascaisse;
    }

    function setDecorationclient($decorationclient) {
        $this->decorationclient = $decorationclient;
    }

    function setRemarques($remarques) {
        $this->remarques = $remarques;
    }
    function getRepprotectionrouille() {
        return $this->repprotectionrouille;
    }

    function getRepcouchepeinture() {
        return $this->repcouchepeinture;
    }

    function getReppeinturefaceav() {
        return $this->reppeinturefaceav;
    }

    function getReppeinturefacear() {
        return $this->reppeinturefacear;
    }

    function getReppeinturefacedr() {
        return $this->reppeinturefacedr;
    }

    function getReppeinturefaceg() {
        return $this->reppeinturefaceg;
    }

    function getRepetanchete() {
        return $this->repetanchete;
    }

    function getRepinterrieur() {
        return $this->repinterrieur;
    }

    function getRepbascaisse() {
        return $this->repbascaisse;
    }

    function getRepdecorationclient() {
        return $this->repdecorationclient;
    }

    function getRepremarques() {
        return $this->repremarques;
    }

    function setRepprotectionrouille($repprotectionrouille) {
        $this->repprotectionrouille = $repprotectionrouille;
    }

    function setRepcouchepeinture($repcouchepeinture) {
        $this->repcouchepeinture = $repcouchepeinture;
    }

    function setReppeinturefaceav($reppeinturefaceav) {
        $this->reppeinturefaceav = $reppeinturefaceav;
    }

    function setReppeinturefacear($reppeinturefacear) {
        $this->reppeinturefacear = $reppeinturefacear;
    }

    function setReppeinturefacedr($reppeinturefacedr) {
        $this->reppeinturefacedr = $reppeinturefacedr;
    }

    function setReppeinturefaceg($reppeinturefaceg) {
        $this->reppeinturefaceg = $reppeinturefaceg;
    }

    function setRepetanchete($repetanchete) {
        $this->repetanchete = $repetanchete;
    }

    function setRepinterrieur($repinterrieur) {
        $this->repinterrieur = $repinterrieur;
    }

    function setRepbascaisse($repbascaisse) {
        $this->repbascaisse = $repbascaisse;
    }

    function setRepdecorationclient($repdecorationclient) {
        $this->repdecorationclient = $repdecorationclient;
    }

    function setRepremarques($repremarques) {
        $this->repremarques = $repremarques;
    }



}
