<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * securite
 *
 * @ORM\Table(name="securite")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\securiteRepository")
 */
class securite
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
     * @ORM\Column(name="plombage", type="string", length=255, nullable=true)
     */
    private $plombage;

    /**
     * @var string
     *
     * @ORM\Column(name="etancheite", type="string", length=255, nullable=true)
     */
    private $etancheite;

    /**
     * @var string
     *
     * @ORM\Column(name="etancheitetoit", type="string", length=255, nullable=true)
     */
    private $etancheitetoit;

    /**
     * @var string
     *
     * @ORM\Column(name="cooffres", type="string", length=255, nullable=true)
     */
    private $cooffres;

    /**
     * @var string
     *
     * @ORM\Column(name="portiere", type="string", length=255, nullable=true)
     */
    private $portiere;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqplombage", type="string", length=255, nullable=true)
     */
    private $rmqplombage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqetancheite", type="string", length=255, nullable=true)
     */
    private $rmqetancheite;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqetancheitetoit", type="string", length=255, nullable=true)
     */
    private $rmqetancheitetoit;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcooffres", type="string", length=255, nullable=true)
     */
    private $rmqcooffres;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqportiere", type="string", length=255, nullable=true)
     */
    private $rmqportiere;

    /**
     * @return string
     */
    public function getRmqplombage()
    {
        return $this->rmqplombage;
    }

    /**
     * @param string $rmqplombage
     */
    public function setRmqplombage($rmqplombage)
    {
        $this->rmqplombage = $rmqplombage;
    }

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
    public function getRmqetancheitetoit()
    {
        return $this->rmqetancheitetoit;
    }

    /**
     * @param string $rmqetancheitetoit
     */
    public function setRmqetancheitetoit($rmqetancheitetoit)
    {
        $this->rmqetancheitetoit = $rmqetancheitetoit;
    }

    /**
     * @return string
     */
    public function getRmqcooffres()
    {
        return $this->rmqcooffres;
    }

    /**
     * @param string $rmqcooffres
     */
    public function setRmqcooffres($rmqcooffres)
    {
        $this->rmqcooffres = $rmqcooffres;
    }

    /**
     * @return string
     */
    public function getRmqportiere()
    {
        return $this->rmqportiere;
    }

    /**
     * @param string $rmqportiere
     */
    public function setRmqportiere($rmqportiere)
    {
        $this->rmqportiere = $rmqportiere;
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
     * Set plombage
     *
     * @param string $plombage
     * @return securite
     */
    public function setPlombage($plombage)
    {
        $this->plombage = $plombage;

        return $this;
    }

    /**
     * Get plombage
     *
     * @return string 
     */
    public function getPlombage()
    {
        return $this->plombage;
    }

    /**
     * Set etancheite
     *
     * @param string $etancheite
     * @return securite
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
     * Set etancheitetoit
     *
     * @param string $etancheitetoit
     * @return securite
     */
    public function setEtancheitetoit($etancheitetoit)
    {
        $this->etancheitetoit = $etancheitetoit;

        return $this;
    }

    /**
     * Get etancheitetoit
     *
     * @return string 
     */
    public function getEtancheitetoit()
    {
        return $this->etancheitetoit;
    }

    /**
     * Set cooffres
     *
     * @param string $cooffres
     * @return securite
     */
    public function setCooffres($cooffres)
    {
        $this->cooffres = $cooffres;

        return $this;
    }

    /**
     * Get cooffres
     *
     * @return string 
     */
    public function getCooffres()
    {
        return $this->cooffres;
    }

    /**
     * Set portiere
     *
     * @param string $portiere
     * @return securite
     */
    public function setPortiere($portiere)
    {
        $this->portiere = $portiere;

        return $this;
    }

    /**
     * Get portiere
     *
     * @return string 
     */
    public function getPortiere()
    {
        return $this->portiere;
    }
}
