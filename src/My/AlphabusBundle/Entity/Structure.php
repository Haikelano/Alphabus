<?php

namespace My\AlphabusBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Structure
 *
 * @ORM\Table(name="structure")
 * @ORM\Entity(repositoryClass="My\AlphabusBundle\Repository\StructureRepository")
 */
class Structure
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
     * @ORM\Column(name="protectionchassis", type="string", length=255, nullable=true)
     */
    private $protectionchassis;

    /**
     * @var string
     *
     * @ORM\Column(name="niveauchassis", type="string", length=255, nullable=true)
     */
    private $niveauchassis;

    /**
     * @var string
     *
     * @ORM\Column(name="geometriechassis", type="string", length=255, nullable=true)
     */
    private $geometriechassis;

    /**
     * @var string
     *
     * @ORM\Column(name="geometriecarrosserie", type="string", length=255, nullable=true)
     */
    private $geometriecarrosserie;

    /**
     * @var string
     *
     * @ORM\Column(name="renfort", type="string", length=255, nullable=true)
     */
    private $renfort;

    /**
     * @var string
     *
     * @ORM\Column(name="soudureconection", type="string", length=255, nullable=true)
     */
    private $soudureconection;

    /**
     * @var string
     *
     * @ORM\Column(name="soudurecarroserie", type="string", length=255, nullable=true)
     */
    private $soudurecarroserie;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationtolehabillage", type="string", length=255, nullable=true)
     */
    private $fixationtolehabillage;

    /**
     * @var string
     *
     * @ORM\Column(name="cadreparebrise", type="string", length=255, nullable=true)
     */
    private $cadreparebrise;

    /**
     * @var string
     *
     * @ORM\Column(name="cadreporte", type="string", length=255, nullable=true)
     */
    private $cadreporte;

    /**
     * @var string
     *
     * @ORM\Column(name="cadrevitre", type="string", length=255, nullable=true)
     */
    private $cadrevitre;

    /**
     * @var string
     *
     * @ORM\Column(name="jointbutyl", type="string", length=255, nullable=true)
     */
    private $jointbutyl;

    /**
     * @var string
     *
     * @ORM\Column(name="masitcportecofre", type="string", length=255, nullable=true)
     */
    private $masitcportecofre;

    /**
     * @var string
     *
     * @ORM\Column(name="poitssoudure", type="string", length=255, nullable=true)
     */
    private $poitssoudure;

    /**
     * @var string
     *
     * @ORM\Column(name="abspiecepolyester", type="string", length=255, nullable=true)
     */
    private $abspiecepolyester;

    /**
     * @var string
     *
     * @ORM\Column(name="surfacetoles", type="string", length=255, nullable=true)
     */
    private $surfacetoles;

    /**
     * @var string
     *
     * @ORM\Column(name="remarques", type="string", length=255, nullable=true)
     */
    private $remarques;
    /**
   * @var string
   *
   * @ORM\Column(name="repprotectionchassis", type="string", length=255, nullable=true)
   */
  private $repprotectionchassis;

  /**
   * @var string
   *
   * @ORM\Column(name="repniveauchassis", type="string", length=255, nullable=true)
   */
  private $repniveauchassis;

  /**
   * @var string
   *
   * @ORM\Column(name="repgeometriechassis", type="string", length=255, nullable=true)
   */
  private $repgeometriechassis;

  /**
   * @var string
   *
   * @ORM\Column(name="repgeometriecarrosserie", type="string", length=255, nullable=true)
   */
  private $repgeometriecarrosserie;

  /**
   * @var string
   *
   * @ORM\Column(name="reprenfort", type="string", length=255, nullable=true)
   */
  private $reprenfort;

  /**
   * @var string
   *
   * @ORM\Column(name="repsoudureconection", type="string", length=255, nullable=true)
   */
  private $repsoudureconection;

  /**
   * @var string
   *
   * @ORM\Column(name="repsoudurecarroserie", type="string", length=255, nullable=true)
   */
  private $repsoudurecarroserie;

  /**
   * @var string
   *
   * @ORM\Column(name="repfixationtolehabillage", type="string", length=255, nullable=true)
   */
  private $repfixationtolehabillage;

  /**
   * @var string
   *
   * @ORM\Column(name="repcadreparebrise", type="string", length=255, nullable=true)
   */
  private $repcadreparebrise;

  /**
   * @var string
   *
   * @ORM\Column(name="repcadreporte", type="string", length=255, nullable=true)
   */
  private $repcadreporte;

  /**
   * @var string
   *
   * @ORM\Column(name="repcadrevitre", type="string", length=255, nullable=true)
   */
  private $repcadrevitre;

  /**
   * @var string
   *
   * @ORM\Column(name="repjointbutyl", type="string", length=255, nullable=true)
   */
  private $repjointbutyl;

  /**
   * @var string
   *
   * @ORM\Column(name="repmasitcportecofre", type="string", length=255, nullable=true)
   */
  private $repmasitcportecofre;

  /**
   * @var string
   *
   * @ORM\Column(name="reppoitssoudure", type="string", length=255, nullable=true)
   */
  private $reppoitssoudure;

  /**
   * @var string
   *
   * @ORM\Column(name="repabspiecepolyester", type="string", length=255, nullable=true)
   */
  private $repabspiecepolyester;

  /**
   * @var string
   *
   * @ORM\Column(name="repsurfacetoles", type="string", length=255, nullable=true)
   */
  private $repsurfacetoles;

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
    function getRepprotectionchassis() {
        return $this->repprotectionchassis;
    }

    function getRepniveauchassis() {
        return $this->repniveauchassis;
    }

    function getRepgeometriechassis() {
        return $this->repgeometriechassis;
    }

    function getRepgeometriecarrosserie() {
        return $this->repgeometriecarrosserie;
    }

    function getReprenfort() {
        return $this->reprenfort;
    }

    function getRepsoudureconection() {
        return $this->repsoudureconection;
    }

    function getRepsoudurecarroserie() {
        return $this->repsoudurecarroserie;
    }

    function getRepfixationtolehabillage() {
        return $this->repfixationtolehabillage;
    }

    function getRepcadreparebrise() {
        return $this->repcadreparebrise;
    }

    function getRepcadreporte() {
        return $this->repcadreporte;
    }

    function getRepcadrevitre() {
        return $this->repcadrevitre;
    }

    function getRepjointbutyl() {
        return $this->repjointbutyl;
    }

    function getRepmasitcportecofre() {
        return $this->repmasitcportecofre;
    }

    function getReppoitssoudure() {
        return $this->reppoitssoudure;
    }

    function getRepabspiecepolyester() {
        return $this->repabspiecepolyester;
    }

    function getRepsurfacetoles() {
        return $this->repsurfacetoles;
    }

    function getRepremarques() {
        return $this->repremarques;
    }

    function setRepprotectionchassis($repprotectionchassis) {
        $this->repprotectionchassis = $repprotectionchassis;
    }

    function setRepniveauchassis($repniveauchassis) {
        $this->repniveauchassis = $repniveauchassis;
    }

    function setRepgeometriechassis($repgeometriechassis) {
        $this->repgeometriechassis = $repgeometriechassis;
    }

    function setRepgeometriecarrosserie($repgeometriecarrosserie) {
        $this->repgeometriecarrosserie = $repgeometriecarrosserie;
    }

    function setReprenfort($reprenfort) {
        $this->reprenfort = $reprenfort;
    }

    function setRepsoudureconection($repsoudureconection) {
        $this->repsoudureconection = $repsoudureconection;
    }

    function setRepsoudurecarroserie($repsoudurecarroserie) {
        $this->repsoudurecarroserie = $repsoudurecarroserie;
    }

    function setRepfixationtolehabillage($repfixationtolehabillage) {
        $this->repfixationtolehabillage = $repfixationtolehabillage;
    }

    function setRepcadreparebrise($repcadreparebrise) {
        $this->repcadreparebrise = $repcadreparebrise;
    }

    function setRepcadreporte($repcadreporte) {
        $this->repcadreporte = $repcadreporte;
    }

    function setRepcadrevitre($repcadrevitre) {
        $this->repcadrevitre = $repcadrevitre;
    }

    function setRepjointbutyl($repjointbutyl) {
        $this->repjointbutyl = $repjointbutyl;
    }

    function setRepmasitcportecofre($repmasitcportecofre) {
        $this->repmasitcportecofre = $repmasitcportecofre;
    }

    function setReppoitssoudure($reppoitssoudure) {
        $this->reppoitssoudure = $reppoitssoudure;
    }

    function setRepabspiecepolyester($repabspiecepolyester) {
        $this->repabspiecepolyester = $repabspiecepolyester;
    }

    function setRepsurfacetoles($repsurfacetoles) {
        $this->repsurfacetoles = $repsurfacetoles;
    }

    function setRepremarques($repremarques) {
        $this->repremarques = $repremarques;
    }

        /**
     * Set protectionchassis
     *
     * @param string $protectionchassis
     * @return Structure
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
     * Set niveauchassis
     *
     * @param string $niveauchassis
     * @return Structure
     */
    public function setNiveauchassis($niveauchassis)
    {
        $this->niveauchassis = $niveauchassis;

        return $this;
    }

    /**
     * Get niveauchassis
     *
     * @return string
     */
    public function getNiveauchassis()
    {
        return $this->niveauchassis;
    }

    /**
     * Set geometriechassis
     *
     * @param string $geometriechassis
     * @return Structure
     */
    public function setGeometriechassis($geometriechassis)
    {
        $this->geometriechassis = $geometriechassis;

        return $this;
    }

    /**
     * Get geometriechassis
     *
     * @return string
     */
    public function getGeometriechassis()
    {
        return $this->geometriechassis;
    }

    /**
     * Set geometriecarrosserie
     *
     * @param string $geometriecarrosserie
     * @return Structure
     */
    public function setGeometriecarrosserie($geometriecarrosserie)
    {
        $this->geometriecarrosserie = $geometriecarrosserie;

        return $this;
    }

    /**
     * Get geometriecarrosserie
     *
     * @return string
     */
    public function getGeometriecarrosserie()
    {
        return $this->geometriecarrosserie;
    }

    /**
     * Set renfort
     *
     * @param string $renfort
     * @return Structure
     */
    public function setRenfort($renfort)
    {
        $this->renfort = $renfort;

        return $this;
    }

    /**
     * Get renfort
     *
     * @return string
     */
    public function getRenfort()
    {
        return $this->renfort;
    }

    /**
     * Set soudureconection
     *
     * @param string $soudureconection
     * @return Structure
     */
    public function setSoudureconection($soudureconection)
    {
        $this->soudureconection = $soudureconection;

        return $this;
    }

    /**
     * Get soudureconection
     *
     * @return string
     */
    public function getSoudureconection()
    {
        return $this->soudureconection;
    }

    /**
     * Set soudurecarroserie
     *
     * @param string $soudurecarroserie
     * @return Structure
     */
    public function setSoudurecarroserie($soudurecarroserie)
    {
        $this->soudurecarroserie = $soudurecarroserie;

        return $this;
    }

    /**
     * Get soudurecarroserie
     *
     * @return string
     */
    public function getSoudurecarroserie()
    {
        return $this->soudurecarroserie;
    }

    /**
     * Set fixationtolehabillage
     *
     * @param string $fixationtolehabillage
     * @return Structure
     */
    public function setFixationtolehabillage($fixationtolehabillage)
    {
        $this->fixationtolehabillage = $fixationtolehabillage;

        return $this;
    }

    /**
     * Get fixationtolehabillage
     *
     * @return string
     */
    public function getFixationtolehabillage()
    {
        return $this->fixationtolehabillage;
    }

    /**
     * Set cadreparebrise
     *
     * @param string $cadreparebrise
     * @return Structure
     */
    public function setCadreparebrise($cadreparebrise)
    {
        $this->cadreparebrise = $cadreparebrise;

        return $this;
    }

    /**
     * Get cadreparebrise
     *
     * @return string
     */
    public function getCadreparebrise()
    {
        return $this->cadreparebrise;
    }

    /**
     * Set cadreporte
     *
     * @param string $cadreporte
     * @return Structure
     */
    public function setCadreporte($cadreporte)
    {
        $this->cadreporte = $cadreporte;

        return $this;
    }

    /**
     * Get cadreporte
     *
     * @return string
     */
    public function getCadreporte()
    {
        return $this->cadreporte;
    }

    /**
     * Set cadrevitre
     *
     * @param string $cadrevitre
     * @return Structure
     */
    public function setCadrevitre($cadrevitre)
    {
        $this->cadrevitre = $cadrevitre;

        return $this;
    }

    /**
     * Get cadrevitre
     *
     * @return string
     */
    public function getCadrevitre()
    {
        return $this->cadrevitre;
    }

    /**
     * Set jointbutyl
     *
     * @param string $jointbutyl
     * @return Structure
     */
    public function setJointbutyl($jointbutyl)
    {
        $this->jointbutyl = $jointbutyl;

        return $this;
    }

    /**
     * Get jointbutyl
     *
     * @return string
     */
    public function getJointbutyl()
    {
        return $this->jointbutyl;
    }

    /**
     * Set masitcportecofre
     *
     * @param string $masitcportecofre
     * @return Structure
     */
    public function setMasitcportecofre($masitcportecofre)
    {
        $this->masitcportecofre = $masitcportecofre;

        return $this;
    }

    /**
     * Get masitcportecofre
     *
     * @return string
     */
    public function getMasitcportecofre()
    {
        return $this->masitcportecofre;
    }

    /**
     * Set poitssoudure
     *
     * @param string $poitssoudure
     * @return Structure
     */
    public function setPoitssoudure($poitssoudure)
    {
        $this->poitssoudure = $poitssoudure;

        return $this;
    }

    /**
     * Get poitssoudure
     *
     * @return string
     */
    public function getPoitssoudure()
    {
        return $this->poitssoudure;
    }

    /**
     * Set abspiecepolyester
     *
     * @param string $abspiecepolyester
     * @return Structure
     */
    public function setAbspiecepolyester($abspiecepolyester)
    {
        $this->abspiecepolyester = $abspiecepolyester;

        return $this;
    }

    /**
     * Get abspiecepolyester
     *
     * @return string
     */
    public function getAbspiecepolyester()
    {
        return $this->abspiecepolyester;
    }

    /**
     * Set surfacetoles
     *
     * @param string $surfacetoles
     * @return Structure
     */
    public function setSurfacetoles($surfacetoles)
    {
        $this->surfacetoles = $surfacetoles;

        return $this;
    }

    /**
     * Get surfacetoles
     *
     * @return string
     */
    public function getSurfacetoles()
    {
        return $this->surfacetoles;
    }

    /**
     * Set remarques
     *
     * @param string $remarques
     * @return Structure
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
}
