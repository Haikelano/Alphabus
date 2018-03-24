<?php

namespace My\AlphabusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Receptionchassis
 *
 * @ORM\Table(name="receptionchassis")
 * @ORM\Entity(repositoryClass="My\AlphabusBundle\Repository\ReceptionchassisRepository")
 */
class Receptionchassis
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
     * @ORM\Column(name="generalchassis", type="string", length=255, nullable=true)
     */
    private $generalchassis;

    /**
     * @var string
     *
     * @ORM\Column(name="huilemoreur", type="string", length=255, nullable=true)
     */
    private $huilemoreur;

    /**
     * @var string
     *
     * @ORM\Column(name="boitevitesse", type="string", length=255, nullable=true)
     */
    private $boitevitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="huiledirection", type="string", length=255, nullable=true)
     */
    private $huiledirection;

    /**
     * @var string
     *
     * @ORM\Column(name="liquiderefroidisement", type="string", length=255, nullable=true)
     */
    private $liquiderefroidisement;

    /**
     * @var string
     *
     * @ORM\Column(name="ventilateur", type="string", length=255, nullable=true)
     */
    private $ventilateur;

    /**
     * @var string
     *
     * @ORM\Column(name="embrayage", type="string", length=255, nullable=true)
     */
    private $embrayage;

    /**
     * @var string
     *
     * @ORM\Column(name="huilefuitechassis", type="string", length=255, nullable=true)
     */
    private $huilefuitechassis;

    /**
     * @var string
     *
     * @ORM\Column(name="fuitedaire", type="string", length=255, nullable=true)
     */
    private $fuitedaire;

    /**
     * @var string
     *
     * @ORM\Column(name="rouesecours", type="string", length=255, nullable=true)
     */
    private $rouesecours;

    /**
     * @var string
     *
     * @ORM\Column(name="filtresecondaire", type="string", length=255, nullable=true)
     */
    private $filtresecondaire;

    /**
     * @var string
     *
     * @ORM\Column(name="centraleelectrique", type="string", length=255, nullable=true)
     */
    private $centraleelectrique;

    /**
     * @var string
     *
     * @ORM\Column(name="tableaubord", type="string", length=255, nullable=true)
     */
    private $tableaubord;

    /**
     * @var string
     *
     * @ORM\Column(name="exthuiledirection", type="string", length=255, nullable=true)
     */
    private $exthuiledirection;

    /**
     * @var string
     *
     * @ORM\Column(name="cledouble", type="string", length=255, nullable=true)
     */
    private $cledouble;

    /**
     * @var string
     *
     * @ORM\Column(name="docchassis", type="string", length=255, nullable=true)
     */
    private $docchassis;

    /**
     * @var string
     *
     * @ORM\Column(name="codeereur", type="string", length=255, nullable=true)
     */
    private $codeereur;

    /**
     * @var string
     *
     * @ORM\Column(name="kitaccesoires", type="string", length=255, nullable=true)
     */
    private $kitaccesoires;

    /**
     * @var string
     *
     * @ORM\Column(name="remorquage", type="string", length=255, nullable=true)
     */
    private $remorquage;

    /**
     * @var string
     *
     * @ORM\Column(name="protectionchassis", type="string", length=255, nullable=true)
     */
    private $protectionchassis;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;
    
    /**
     * @var string
     *
     * @ORM\Column(name="rmqgeneralchassis", type="string", length=255, nullable=true)
     */
    private $rmqgeneralchassis;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqhuilemoreur", type="string", length=255, nullable=true)
     */
    private $rmqhuilemoreur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqboitevitesse", type="string", length=255, nullable=true)
     */
    private $rmqboitevitesse;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqhuiledirection", type="string", length=255, nullable=true)
     */
    private $rmqhuiledirection;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqliquiderefroidisement", type="string", length=255, nullable=true)
     */
    private $rmqliquiderefroidisement;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqventilateur", type="string", length=255, nullable=true)
     */
    private $rmqventilateur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqembrayage", type="string", length=255, nullable=true)
     */
    private $rmqembrayage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqhuilefuitechassis", type="string", length=255, nullable=true)
     */
    private $rmqhuilefuitechassis;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfuitedaire", type="string", length=255, nullable=true)
     */
    private $rmqfuitedaire;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqrouesecours", type="string", length=255, nullable=true)
     */
    private $rmqrouesecours;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfiltresecondaire", type="string", length=255, nullable=true)
     */
    private $rmqfiltresecondaire;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcentraleelectrique", type="string", length=255, nullable=true)
     */
    private $rmqcentraleelectrique;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqtableaubord", type="string", length=255, nullable=true)
     */
    private $rmqtableaubord;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqexthuiledirection", type="string", length=255, nullable=true)
     */
    private $rmqexthuiledirection;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcledouble", type="string", length=255, nullable=true)
     */
    private $rmqcledouble;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqdocchassis", type="string", length=255, nullable=true)
     */
    private $rmqdocchassis;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcodeereur", type="string", length=255, nullable=true)
     */
    private $rmqcodeereur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqkitaccesoires", type="string", length=255, nullable=true)
     */
    private $rmqkitaccesoires;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqremorquage", type="string", length=255, nullable=true)
     */
    private $rmqremorquage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqprotectionchassis", type="string", length=255, nullable=true)
     */
    private $rmqprotectionchassis;


    /**
     * @var string
     *
     * @ORM\Column(name="mecanicien", type="string", length=255, nullable=true)
     */
    private $mecanicien;

    /**
     * @var string
     *
     * @ORM\Column(name="contqualite", type="string", length=255, nullable=true)
     */
    private $contqualite;

    /**
     * @var string
     *
     * @ORM\Column(name="responsablequalite", type="string", length=255, nullable=true)
     */
    private $responsablequalite;


    /**
     * 
     * @ORM\OneToOne(targetEntity="My\AlphabusBundle\Entity\Chassis")
     * @ORM\JoinColumn(name="nchassis_id", referencedColumnName="nchassis")
     *
     */

    private $nchassis;

    function getRmqgeneralchassis() {
        return $this->rmqgeneralchassis;
    }

    function getRmqhuilemoreur() {
        return $this->rmqhuilemoreur;
    }

    function getRmqboitevitesse() {
        return $this->rmqboitevitesse;
    }

    function getRmqhuiledirection() {
        return $this->rmqhuiledirection;
    }

    function getRmqliquiderefroidisement() {
        return $this->rmqliquiderefroidisement;
    }

    function getRmqventilateur() {
        return $this->rmqventilateur;
    }

    function getRmqembrayage() {
        return $this->rmqembrayage;
    }

    function getRmqhuilefuitechassis() {
        return $this->rmqhuilefuitechassis;
    }

    function getRmqfuitedaire() {
        return $this->rmqfuitedaire;
    }

    function getRmqrouesecours() {
        return $this->rmqrouesecours;
    }

    function getRmqfiltresecondaire() {
        return $this->rmqfiltresecondaire;
    }

    function getRmqcentraleelectrique() {
        return $this->rmqcentraleelectrique;
    }

    function getRmqtableaubord() {
        return $this->rmqtableaubord;
    }

    function getRmqexthuiledirection() {
        return $this->rmqexthuiledirection;
    }

    function getRmqcledouble() {
        return $this->rmqcledouble;
    }

    function getRmqdocchassis() {
        return $this->rmqdocchassis;
    }

    function getRmqcodeereur() {
        return $this->rmqcodeereur;
    }

    function getRmqkitaccesoires() {
        return $this->rmqkitaccesoires;
    }

    function getRmqremorquage() {
        return $this->rmqremorquage;
    }

    function getRmqprotectionchassis() {
        return $this->rmqprotectionchassis;
    }

    function setRmqgeneralchassis($rmqgeneralchassis) {
        $this->rmqgeneralchassis = $rmqgeneralchassis;
    }

    function setRmqhuilemoreur($rmqhuilemoreur) {
        $this->rmqhuilemoreur = $rmqhuilemoreur;
    }

    function setRmqboitevitesse($rmqboitevitesse) {
        $this->rmqboitevitesse = $rmqboitevitesse;
    }

    function setRmqhuiledirection($rmqhuiledirection) {
        $this->rmqhuiledirection = $rmqhuiledirection;
    }

    function setRmqliquiderefroidisement($rmqliquiderefroidisement) {
        $this->rmqliquiderefroidisement = $rmqliquiderefroidisement;
    }

    function setRmqventilateur($rmqventilateur) {
        $this->rmqventilateur = $rmqventilateur;
    }

    function setRmqembrayage($rmqembrayage) {
        $this->rmqembrayage = $rmqembrayage;
    }

    function setRmqhuilefuitechassis($rmqhuilefuitechassis) {
        $this->rmqhuilefuitechassis = $rmqhuilefuitechassis;
    }

    function setRmqfuitedaire($rmqfuitedaire) {
        $this->rmqfuitedaire = $rmqfuitedaire;
    }

    function setRmqrouesecours($rmqrouesecours) {
        $this->rmqrouesecours = $rmqrouesecours;
    }

    function setRmqfiltresecondaire($rmqfiltresecondaire) {
        $this->rmqfiltresecondaire = $rmqfiltresecondaire;
    }

    function setRmqcentraleelectrique($rmqcentraleelectrique) {
        $this->rmqcentraleelectrique = $rmqcentraleelectrique;
    }

    function setRmqtableaubord($rmqtableaubord) {
        $this->rmqtableaubord = $rmqtableaubord;
    }

    function setRmqexthuiledirection($rmqexthuiledirection) {
        $this->rmqexthuiledirection = $rmqexthuiledirection;
    }

    function setRmqcledouble($rmqcledouble) {
        $this->rmqcledouble = $rmqcledouble;
    }

    function setRmqdocchassis($rmqdocchassis) {
        $this->rmqdocchassis = $rmqdocchassis;
    }

    function setRmqcodeereur($rmqcodeereur) {
        $this->rmqcodeereur = $rmqcodeereur;
    }

    function setRmqkitaccesoires($rmqkitaccesoires) {
        $this->rmqkitaccesoires = $rmqkitaccesoires;
    }

    function setRmqremorquage($rmqremorquage) {
        $this->rmqremorquage = $rmqremorquage;
    }

    function setRmqprotectionchassis($rmqprotectionchassis) {
        $this->rmqprotectionchassis = $rmqprotectionchassis;
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
     * Set generalchassis
     *
     * @param string $generalchassis
     * @return Receptionchassis
     */
    public function setGeneralchassis($generalchassis)
    {
        $this->generalchassis = $generalchassis;

        return $this;
    }

    /**
     * Get generalchassis
     *
     * @return string 
     */
    public function getGeneralchassis()
    {
        return $this->generalchassis;
    }

    /**
     * Set huilemoreur
     *
     * @param string $huilemoreur
     * @return Receptionchassis
     */
    public function setHuilemoreur($huilemoreur)
    {
        $this->huilemoreur = $huilemoreur;

        return $this;
    }

    /**
     * Get huilemoreur
     *
     * @return string 
     */
    public function getHuilemoreur()
    {
        return $this->huilemoreur;
    }

    /**
     * Set boitevitesse
     *
     * @param string $boitevitesse
     * @return Receptionchassis
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
     * Set huiledirection
     *
     * @param string $huiledirection
     * @return Receptionchassis
     */
    public function setHuiledirection($huiledirection)
    {
        $this->huiledirection = $huiledirection;

        return $this;
    }

    /**
     * Get huiledirection
     *
     * @return string 
     */
    public function getHuiledirection()
    {
        return $this->huiledirection;
    }

    /**
     * Set liquiderefroidisement
     *
     * @param string $liquiderefroidisement
     * @return Receptionchassis
     */
    public function setLiquiderefroidisement($liquiderefroidisement)
    {
        $this->liquiderefroidisement = $liquiderefroidisement;

        return $this;
    }

    /**
     * Get liquiderefroidisement
     *
     * @return string 
     */
    public function getLiquiderefroidisement()
    {
        return $this->liquiderefroidisement;
    }

    /**
     * Set ventilateur
     *
     * @param string $ventilateur
     * @return Receptionchassis
     */
    public function setVentilateur($ventilateur)
    {
        $this->ventilateur = $ventilateur;

        return $this;
    }

    /**
     * Get ventilateur
     *
     * @return string 
     */
    public function getVentilateur()
    {
        return $this->ventilateur;
    }

    /**
     * Set embrayage
     *
     * @param string $embrayage
     * @return Receptionchassis
     */
    public function setEmbrayage($embrayage)
    {
        $this->embrayage = $embrayage;

        return $this;
    }

    /**
     * Get embrayage
     *
     * @return string 
     */
    public function getEmbrayage()
    {
        return $this->embrayage;
    }

    /**
     * Set huilefuitechassis
     *
     * @param string $huilefuitechassis
     * @return Receptionchassis
     */
    public function setHuilefuitechassis($huilefuitechassis)
    {
        $this->huilefuitechassis = $huilefuitechassis;

        return $this;
    }

    /**
     * Get huilefuitechassis
     *
     * @return string 
     */
    public function getHuilefuitechassis()
    {
        return $this->huilefuitechassis;
    }

    /**
     * Set fuitedaire
     *
     * @param string $fuitedaire
     * @return Receptionchassis
     */
    public function setFuitedaire($fuitedaire)
    {
        $this->fuitedaire = $fuitedaire;

        return $this;
    }

    /**
     * Get fuitedaire
     *
     * @return string 
     */
    public function getFuitedaire()
    {
        return $this->fuitedaire;
    }

    /**
     * Set rouesecours
     *
     * @param string $rouesecours
     * @return Receptionchassis
     */
    public function setRouesecours($rouesecours)
    {
        $this->rouesecours = $rouesecours;

        return $this;
    }

    /**
     * Get rouesecours
     *
     * @return string 
     */
    public function getRouesecours()
    {
        return $this->rouesecours;
    }

    /**
     * Set filtresecondaire
     *
     * @param string $filtresecondaire
     * @return Receptionchassis
     */
    public function setFiltresecondaire($filtresecondaire)
    {
        $this->filtresecondaire = $filtresecondaire;

        return $this;
    }

    /**
     * Get filtresecondaire
     *
     * @return string 
     */
    public function getFiltresecondaire()
    {
        return $this->filtresecondaire;
    }

    /**
     * Set centraleelectrique
     *
     * @param string $centraleelectrique
     * @return Receptionchassis
     */
    public function setCentraleelectrique($centraleelectrique)
    {
        $this->centraleelectrique = $centraleelectrique;

        return $this;
    }

    /**
     * Get centraleelectrique
     *
     * @return string 
     */
    public function getCentraleelectrique()
    {
        return $this->centraleelectrique;
    }

    /**
     * Set tableaubord
     *
     * @param string $tableaubord
     * @return Receptionchassis
     */
    public function setTableaubord($tableaubord)
    {
        $this->tableaubord = $tableaubord;

        return $this;
    }

    /**
     * Get tableaubord
     *
     * @return string 
     */
    public function getTableaubord()
    {
        return $this->tableaubord;
    }

    /**
     * Set exthuiledirection
     *
     * @param string $exthuiledirection
     * @return Receptionchassis
     */
    public function setExthuiledirection($exthuiledirection)
    {
        $this->exthuiledirection = $exthuiledirection;

        return $this;
    }

    /**
     * Get exthuiledirection
     *
     * @return string 
     */
    public function getExthuiledirection()
    {
        return $this->exthuiledirection;
    }

    /**
     * Set cledouble
     *
     * @param string $cledouble
     * @return Receptionchassis
     */
    public function setCledouble($cledouble)
    {
        $this->cledouble = $cledouble;

        return $this;
    }

    /**
     * Get cledouble
     *
     * @return string 
     */
    public function getCledouble()
    {
        return $this->cledouble;
    }

    /**
     * Set docchassis
     *
     * @param string $docchassis
     * @return Receptionchassis
     */
    public function setDocchassis($docchassis)
    {
        $this->docchassis = $docchassis;

        return $this;
    }

    /**
     * Get docchassis
     *
     * @return string 
     */
    public function getDocchassis()
    {
        return $this->docchassis;
    }

    /**
     * Set codeereur
     *
     * @param string $codeereur
     * @return Receptionchassis
     */
    public function setCodeereur($codeereur)
    {
        $this->codeereur = $codeereur;

        return $this;
    }

    /**
     * Get codeereur
     *
     * @return string 
     */
    public function getCodeereur()
    {
        return $this->codeereur;
    }

    /**
     * Set kitaccesoires
     *
     * @param string $kitaccesoires
     * @return Receptionchassis
     */
    public function setKitaccesoires($kitaccesoires)
    {
        $this->kitaccesoires = $kitaccesoires;

        return $this;
    }

    /**
     * Get kitaccesoires
     *
     * @return string 
     */
    public function getKitaccesoires()
    {
        return $this->kitaccesoires;
    }

    /**
     * Set remorquage
     *
     * @param string $remorquage
     * @return Receptionchassis
     */
    public function setRemorquage($remorquage)
    {
        $this->remorquage = $remorquage;

        return $this;
    }

    /**
     * Get remorquage
     *
     * @return string 
     */
    public function getRemorquage()
    {
        return $this->remorquage;
    }

    /**
     * Set protectionchassis
     *
     * @param string $protectionchassis
     * @return Receptionchassis
     */
    public function setProtectionchassis($protectionchassis)
    {
        $this->protectionchassis = $protectionchassis;

        return $this;
    }

    /**
     * Get protectionchassis
     *
     * @return string 
     */
    public function getProtectionchassis()
    {
        return $this->protectionchassis;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Receptionchassis
     */
    public function setRemarques($remarques)
    {
        $this->remarques = $remarques;

        return $this;
    }

    /**
     * Get remarques
     *
     * @return string 
     */
    public function getRemarques()
    {
        return $this->remarques;
    }

    /**
     * Set mecanicien
     *
     * @param string $mecanicien
     * @return Receptionchassis
     */
    public function setMecanicien($mecanicien)
    {
        $this->mecanicien = $mecanicien;

        return $this;
    }

    /**
     * Get mecanicien
     *
     * @return string 
     */
    public function getMecanicien()
    {
        return $this->mecanicien;
    }

    /**
     * Set contqualite
     *
     * @param string $contqualite
     * @return Receptionchassis
     */
    public function setContqualite($contqualite)
    {
        $this->contqualite = $contqualite;

        return $this;
    }

    /**
     * Get contqualite
     *
     * @return string 
     */
    public function getContqualite()
    {
        return $this->contqualite;
    }

    /**
     * Set responsablequalite
     *
     * @param string $responsablequalite
     * @return Receptionchassis
     */
    public function setResponsablequalite($responsablequalite)
    {
        $this->responsablequalite = $responsablequalite;

        return $this;
    }

    /**
     * Get responsablequalite
     *
     * @return string 
     */
    public function getResponsablequalite()
    {
        return $this->responsablequalite;
    }

    function getNchassis() {
        return $this->nchassis;
    }

    function setNchassis($nchassis) {
        $this->nchassis = $nchassis;
    }


}
