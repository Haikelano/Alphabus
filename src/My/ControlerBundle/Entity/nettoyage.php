<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * nettoyage
 *
 * @ORM\Table(name="nettoyage")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\nettoyageRepository")
 */
class nettoyage
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
     * @ORM\Column(name="moteur", type="string", length=255, nullable=true)
     */
    private $moteur;

    /**
     * @var string
     *
     * @ORM\Column(name="exterieur", type="string", length=255, nullable=true)
     */
    private $exterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="vitrage", type="string", length=255, nullable=true)
     */
    private $vitrage;

    /**
     * @var string
     *
     * @ORM\Column(name="interieur", type="string", length=255, nullable=true)
     */
    private $interieur;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqmoteur", type="string", length=255, nullable=true)
     */
    private $rmqmoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqexterieur", type="string", length=255, nullable=true)
     */
    private $rmqexterieur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqvitrage", type="string", length=255, nullable=true)
     */
    private $rmqvitrage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqinterieur", type="string", length=255, nullable=true)
     */
    private $rmqinterieur;

    /**
     * @return string
     */
    public function getRmqmoteur()
    {
        return $this->rmqmoteur;
    }

    /**
     * @param string $rmqmoteur
     */
    public function setRmqmoteur($rmqmoteur)
    {
        $this->rmqmoteur = $rmqmoteur;
    }

    /**
     * @return string
     */
    public function getRmqexterieur()
    {
        return $this->rmqexterieur;
    }

    /**
     * @param string $rmqexterieur
     */
    public function setRmqexterieur($rmqexterieur)
    {
        $this->rmqexterieur = $rmqexterieur;
    }

    /**
     * @return string
     */
    public function getRmqvitrage()
    {
        return $this->rmqvitrage;
    }

    /**
     * @param string $rmqvitrage
     */
    public function setRmqvitrage($rmqvitrage)
    {
        $this->rmqvitrage = $rmqvitrage;
    }

    /**
     * @return string
     */
    public function getRmqinterieur()
    {
        return $this->rmqinterieur;
    }

    /**
     * @param string $rmqinterieur
     */
    public function setRmqinterieur($rmqinterieur)
    {
        $this->rmqinterieur = $rmqinterieur;
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
     * Set moteur
     *
     * @param string $moteur
     * @return nettoyage
     */
    public function setMoteur($moteur)
    {
        $this->moteur = $moteur;

        return $this;
    }

    /**
     * Get moteur
     *
     * @return string 
     */
    public function getMoteur()
    {
        return $this->moteur;
    }

    /**
     * Set exterieur
     *
     * @param string $exterieur
     * @return nettoyage
     */
    public function setExterieur($exterieur)
    {
        $this->exterieur = $exterieur;

        return $this;
    }

    /**
     * Get exterieur
     *
     * @return string 
     */
    public function getExterieur()
    {
        return $this->exterieur;
    }

    /**
     * Set vitrage
     *
     * @param string $vitrage
     * @return nettoyage
     */
    public function setVitrage($vitrage)
    {
        $this->vitrage = $vitrage;

        return $this;
    }

    /**
     * Get vitrage
     *
     * @return string 
     */
    public function getVitrage()
    {
        return $this->vitrage;
    }

    /**
     * Set interieur
     *
     * @param string $interieur
     * @return nettoyage
     */
    public function setInterieur($interieur)
    {
        $this->interieur = $interieur;

        return $this;
    }

    /**
     * Get interieur
     *
     * @return string 
     */
    public function getInterieur()
    {
        return $this->interieur;
    }
}
