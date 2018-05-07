<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * testetancheite
 *
 * @ORM\Table(name="testetancheite")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\testetancheiteRepository")
 */
class testetancheite
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
     * @ORM\Column(name="vitres", type="string", length=255, nullable=true)
     */
    private $vitres;

    /**
     * @var string
     *
     * @ORM\Column(name="articulation", type="string", length=255, nullable=true)
     */
    private $articulation;

    /**
     * @var string
     *
     * @ORM\Column(name="toit", type="string", length=255, nullable=true)
     */
    private $toit;

    /**
     * @var string
     *
     * @ORM\Column(name="coffers", type="string", length=255, nullable=true)
     */
    private $coffers;

    /**
     * @var string
     *
     * @ORM\Column(name="portiere", type="string", length=255, nullable=true)
     */
    private $portiere;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqvitres", type="string", length=255, nullable=true)
     */
    private $rmqvitres;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqarticulation", type="string", length=255, nullable=true)
     */
    private $rmqarticulation;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqtoit", type="string", length=255, nullable=true)
     */
    private $rmqtoit;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcoffers", type="string", length=255, nullable=true)
     */
    private $rmqcoffers;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqportiere", type="string", length=255, nullable=true)
     */
    private $rmqportiere;

    /**
     * @return string
     */
    public function getRmqvitres()
    {
        return $this->rmqvitres;
    }

    /**
     * @param string $rmqvitres
     */
    public function setRmqvitres($rmqvitres)
    {
        $this->rmqvitres = $rmqvitres;
    }

    /**
     * @return string
     */
    public function getRmqarticulation()
    {
        return $this->rmqarticulation;
    }

    /**
     * @param string $rmqarticulation
     */
    public function setRmqarticulation($rmqarticulation)
    {
        $this->rmqarticulation = $rmqarticulation;
    }

    /**
     * @return string
     */
    public function getRmqtoit()
    {
        return $this->rmqtoit;
    }

    /**
     * @param string $rmqtoit
     */
    public function setRmqtoit($rmqtoit)
    {
        $this->rmqtoit = $rmqtoit;
    }

    /**
     * @return string
     */
    public function getRmqcoffers()
    {
        return $this->rmqcoffers;
    }

    /**
     * @param string $rmqcoffers
     */
    public function setRmqcoffers($rmqcoffers)
    {
        $this->rmqcoffers = $rmqcoffers;
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
     * Set vitres
     *
     * @param string $vitres
     * @return testetancheite
     */
    public function setVitres($vitres)
    {
        $this->vitres = $vitres;

        return $this;
    }

    /**
     * Get vitres
     *
     * @return string 
     */
    public function getVitres()
    {
        return $this->vitres;
    }

    /**
     * Set articulation
     *
     * @param string $articulation
     * @return testetancheite
     */
    public function setArticulation($articulation)
    {
        $this->articulation = $articulation;

        return $this;
    }

    /**
     * Get articulation
     *
     * @return string 
     */
    public function getArticulation()
    {
        return $this->articulation;
    }

    /**
     * Set toit
     *
     * @param string $toit
     * @return testetancheite
     */
    public function setToit($toit)
    {
        $this->toit = $toit;

        return $this;
    }

    /**
     * Get toit
     *
     * @return string 
     */
    public function getToit()
    {
        return $this->toit;
    }

    /**
     * Set coffers
     *
     * @param string $coffers
     * @return testetancheite
     */
    public function setCoffers($coffers)
    {
        $this->coffers = $coffers;

        return $this;
    }

    /**
     * Get coffers
     *
     * @return string 
     */
    public function getCoffers()
    {
        return $this->coffers;
    }

    /**
     * Set portiere
     *
     * @param string $portiere
     * @return testetancheite
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
