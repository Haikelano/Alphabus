<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * soutebagage
 *
 * @ORM\Table(name="soutebagage")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\soutebagageRepository")
 */
class soutebagage
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
     * @ORM\Column(name="etancheite", type="string", length=255, nullable=true)
     */
    private $etancheite;

    /**
     * @var string
     *
     * @ORM\Column(name="serrures", type="string", length=255, nullable=true)
     */
    private $serrures;

    /**
     * @var string
     *
     * @ORM\Column(name="amortisseurs", type="string", length=255, nullable=true)
     */
    private $amortisseurs;

    /**
     * @var string
     *
     * @ORM\Column(name="ouverfermer", type="string", length=255, nullable=true)
     */
    private $ouverfermer;

    /**
     * @var string
     *
     * @ORM\Column(name="poignee", type="string", length=255, nullable=true)
     */
    private $poignee;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationverin", type="string", length=255, nullable=true)
     */
    private $fixationverin;

    /**
     * @var string
     *
     * @ORM\Column(name="absencevisserie", type="string", length=255, nullable=true)
     */
    private $absencevisserie;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqetancheite", type="string", length=255, nullable=true)
     */
    private $rmqetancheite;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqserrures", type="string", length=255, nullable=true)
     */
    private $rmqserrures;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqamortisseurs", type="string", length=255, nullable=true)
     */
    private $rmqamortisseurs;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqouverfermer", type="string", length=255, nullable=true)
     */
    private $rmqouverfermer;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqpoignee", type="string", length=255, nullable=true)
     */
    private $rmqpoignee;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationverin", type="string", length=255, nullable=true)
     */
    private $rmqfixationverin;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqabsencevisserie", type="string", length=255, nullable=true)
     */
    private $rmqabsencevisserie;

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
    public function getRmqserrures()
    {
        return $this->rmqserrures;
    }

    /**
     * @param string $rmqserrures
     */
    public function setRmqserrures($rmqserrures)
    {
        $this->rmqserrures = $rmqserrures;
    }

    /**
     * @return string
     */
    public function getRmqamortisseurs()
    {
        return $this->rmqamortisseurs;
    }

    /**
     * @param string $rmqamortisseurs
     */
    public function setRmqamortisseurs($rmqamortisseurs)
    {
        $this->rmqamortisseurs = $rmqamortisseurs;
    }

    /**
     * @return string
     */
    public function getRmqouverfermer()
    {
        return $this->rmqouverfermer;
    }

    /**
     * @param string $rmqouverfermer
     */
    public function setRmqouverfermer($rmqouverfermer)
    {
        $this->rmqouverfermer = $rmqouverfermer;
    }

    /**
     * @return string
     */
    public function getRmqpoignee()
    {
        return $this->rmqpoignee;
    }

    /**
     * @param string $rmqpoignee
     */
    public function setRmqpoignee($rmqpoignee)
    {
        $this->rmqpoignee = $rmqpoignee;
    }

    /**
     * @return string
     */
    public function getRmqfixationverin()
    {
        return $this->rmqfixationverin;
    }

    /**
     * @param string $rmqfixationverin
     */
    public function setRmqfixationverin($rmqfixationverin)
    {
        $this->rmqfixationverin = $rmqfixationverin;
    }

    /**
     * @return string
     */
    public function getRmqabsencevisserie()
    {
        return $this->rmqabsencevisserie;
    }

    /**
     * @param string $rmqabsencevisserie
     */
    public function setRmqabsencevisserie($rmqabsencevisserie)
    {
        $this->rmqabsencevisserie = $rmqabsencevisserie;
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
     * Set etancheite
     *
     * @param string $etancheite
     * @return soutebagage
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
     * Set serrures
     *
     * @param string $serrures
     * @return soutebagage
     */
    public function setSerrures($serrures)
    {
        $this->serrures = $serrures;

        return $this;
    }

    /**
     * Get serrures
     *
     * @return string 
     */
    public function getSerrures()
    {
        return $this->serrures;
    }

    /**
     * Set amortisseurs
     *
     * @param string $amortisseurs
     * @return soutebagage
     */
    public function setAmortisseurs($amortisseurs)
    {
        $this->amortisseurs = $amortisseurs;

        return $this;
    }

    /**
     * Get amortisseurs
     *
     * @return string 
     */
    public function getAmortisseurs()
    {
        return $this->amortisseurs;
    }

    /**
     * Set ouverfermer
     *
     * @param string $ouverfermer
     * @return soutebagage
     */
    public function setOuverfermer($ouverfermer)
    {
        $this->ouverfermer = $ouverfermer;

        return $this;
    }

    /**
     * Get ouverfermer
     *
     * @return string 
     */
    public function getOuverfermer()
    {
        return $this->ouverfermer;
    }

    /**
     * Set poignee
     *
     * @param string $poignee
     * @return soutebagage
     */
    public function setPoignee($poignee)
    {
        $this->poignee = $poignee;

        return $this;
    }

    /**
     * Get poignee
     *
     * @return string 
     */
    public function getPoignee()
    {
        return $this->poignee;
    }

    /**
     * Set fixationverin
     *
     * @param string $fixationverin
     * @return soutebagage
     */
    public function setFixationverin($fixationverin)
    {
        $this->fixationverin = $fixationverin;

        return $this;
    }

    /**
     * Get fixationverin
     *
     * @return string 
     */
    public function getFixationverin()
    {
        return $this->fixationverin;
    }

    /**
     * Set absencevisserie
     *
     * @param string $absencevisserie
     * @return soutebagage
     */
    public function setAbsencevisserie($absencevisserie)
    {
        $this->absencevisserie = $absencevisserie;

        return $this;
    }

    /**
     * Get absencevisserie
     *
     * @return string 
     */
    public function getAbsencevisserie()
    {
        return $this->absencevisserie;
    }
}
