<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * documentation
 *
 * @ORM\Table(name="documentation")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\documentationRepository")
 */
class documentation
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
     * @ORM\Column(name="modelclimatisation", type="string", length=255, nullable=true)
     */
    private $modelclimatisation;

    /**
     * @var string
     *
     * @ORM\Column(name="compresseurclim", type="string", length=255, nullable=true)
     */
    private $compresseurclim;

    /**
     * @var string
     *
     * @ORM\Column(name="evaporateur", type="string", length=255, nullable=true)
     */
    private $evaporateur;

    /**
     * @var string
     *
     * @ORM\Column(name="condenseur", type="string", length=255, nullable=true)
     */
    private $condenseur;

    /**
     * @var string
     *
     * @ORM\Column(name="refrigerateur", type="string", length=255, nullable=true)
     */
    private $refrigerateur;

    /**
     * @var string
     *
     * @ORM\Column(name="installationaudio", type="string", length=255, nullable=true)
     */
    private $installationaudio;

    /**
     * @var string
     *
     * @ORM\Column(name="posteradio", type="string", length=255, nullable=true)
     */
    private $posteradio;

    /**
     * @var string
     *
     * @ORM\Column(name="amplificateur", type="string", length=255, nullable=true)
     */
    private $amplificateur;

    /**
     * @var string
     *
     * @ORM\Column(name="lecteurdvd", type="string", length=255, nullable=true)
     */
    private $lecteurdvd;

    /**
     * @var string
     *
     * @ORM\Column(name="afficheurdestination", type="string", length=255, nullable=true)
     */
    private $afficheurdestination;

    /**
     * @var string
     *
     * @ORM\Column(name="afficheurdestination2", type="string", length=255, nullable=true)
     */
    private $afficheurdestination2;

    /**
     * @var string
     *
     * @ORM\Column(name="necran", type="string", length=255, nullable=true)
     */
    private $necran;


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
     * Set modelclimatisation
     *
     * @param string $modelclimatisation
     * @return documentation
     */
    public function setModelclimatisation($modelclimatisation)
    {
        $this->modelclimatisation = $modelclimatisation;

        return $this;
    }

    /**
     * Get modelclimatisation
     *
     * @return string 
     */
    public function getModelclimatisation()
    {
        return $this->modelclimatisation;
    }

    /**
     * Set compresseurclim
     *
     * @param string $compresseurclim
     * @return documentation
     */
    public function setCompresseurclim($compresseurclim)
    {
        $this->compresseurclim = $compresseurclim;

        return $this;
    }

    /**
     * Get compresseurclim
     *
     * @return string 
     */
    public function getCompresseurclim()
    {
        return $this->compresseurclim;
    }

    /**
     * Set evaporateur
     *
     * @param string $evaporateur
     * @return documentation
     */
    public function setEvaporateur($evaporateur)
    {
        $this->evaporateur = $evaporateur;

        return $this;
    }

    /**
     * Get evaporateur
     *
     * @return string 
     */
    public function getEvaporateur()
    {
        return $this->evaporateur;
    }

    /**
     * Set condenseur
     *
     * @param string $condenseur
     * @return documentation
     */
    public function setCondenseur($condenseur)
    {
        $this->condenseur = $condenseur;

        return $this;
    }

    /**
     * Get condenseur
     *
     * @return string 
     */
    public function getCondenseur()
    {
        return $this->condenseur;
    }

    /**
     * Set refrigerateur
     *
     * @param string $refrigerateur
     * @return documentation
     */
    public function setRefrigerateur($refrigerateur)
    {
        $this->refrigerateur = $refrigerateur;

        return $this;
    }

    /**
     * Get refrigerateur
     *
     * @return string 
     */
    public function getRefrigerateur()
    {
        return $this->refrigerateur;
    }

    /**
     * Set installationaudio
     *
     * @param string $installationaudio
     * @return documentation
     */
    public function setInstallationaudio($installationaudio)
    {
        $this->installationaudio = $installationaudio;

        return $this;
    }

    /**
     * Get installationaudio
     *
     * @return string 
     */
    public function getInstallationaudio()
    {
        return $this->installationaudio;
    }

    /**
     * Set posteradio
     *
     * @param string $posteradio
     * @return documentation
     */
    public function setPosteradio($posteradio)
    {
        $this->posteradio = $posteradio;

        return $this;
    }

    /**
     * Get posteradio
     *
     * @return string 
     */
    public function getPosteradio()
    {
        return $this->posteradio;
    }

    /**
     * Set amplificateur
     *
     * @param string $amplificateur
     * @return documentation
     */
    public function setAmplificateur($amplificateur)
    {
        $this->amplificateur = $amplificateur;

        return $this;
    }

    /**
     * Get amplificateur
     *
     * @return string 
     */
    public function getAmplificateur()
    {
        return $this->amplificateur;
    }

    /**
     * Set lecteurdvd
     *
     * @param string $lecteurdvd
     * @return documentation
     */
    public function setLecteurdvd($lecteurdvd)
    {
        $this->lecteurdvd = $lecteurdvd;

        return $this;
    }

    /**
     * Get lecteurdvd
     *
     * @return string 
     */
    public function getLecteurdvd()
    {
        return $this->lecteurdvd;
    }

    /**
     * Set afficheurdestination
     *
     * @param string $afficheurdestination
     * @return documentation
     */
    public function setAfficheurdestination($afficheurdestination)
    {
        $this->afficheurdestination = $afficheurdestination;

        return $this;
    }

    /**
     * Get afficheurdestination
     *
     * @return string 
     */
    public function getAfficheurdestination()
    {
        return $this->afficheurdestination;
    }

    /**
     * Set afficheurdestination2
     *
     * @param string $afficheurdestination2
     * @return documentation
     */
    public function setAfficheurdestination2($afficheurdestination2)
    {
        $this->afficheurdestination2 = $afficheurdestination2;

        return $this;
    }

    /**
     * Get afficheurdestination2
     *
     * @return string 
     */
    public function getAfficheurdestination2()
    {
        return $this->afficheurdestination2;
    }

    /**
     * Set necran
     *
     * @param string $necran
     * @return documentation
     */
    public function setNecran($necran)
    {
        $this->necran = $necran;

        return $this;
    }

    /**
     * Get necran
     *
     * @return string 
     */
    public function getNecran()
    {
        return $this->necran;
    }
}
