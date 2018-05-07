<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * chauffage
 *
 * @ORM\Table(name="chauffage")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\chauffageRepository")
 */
class chauffage
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
     * @ORM\Column(name="sensrotation", type="string", length=255, nullable=true)
     */
    private $sensrotation;

    /**
     * @var string
     *
     * @ORM\Column(name="presenceprotection", type="string", length=255, nullable=true)
     */
    private $presenceprotection;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctdegivrage", type="string", length=255, nullable=true)
     */
    private $fonctdegivrage;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationgaine", type="string", length=255, nullable=true)
     */
    private $fixationgaine;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationbouches", type="string", length=255, nullable=true)
     */
    private $fixationbouches;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqsensrotation", type="string", length=255, nullable=true)
     */
    private $rmqsensrotation;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqpresenceprotection", type="string", length=255, nullable=true)
     */
    private $rmqpresenceprotection;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctdegivrage", type="string", length=255, nullable=true)
     */
    private $rmqfonctdegivrage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationgaine", type="string", length=255, nullable=true)
     */
    private $rmqfixationgaine;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationbouches", type="string", length=255, nullable=true)
     */
    private $rmqfixationbouches;

    /**
     * @return string
     */
    public function getRmqsensrotation()
    {
        return $this->rmqsensrotation;
    }

    /**
     * @param string $rmqsensrotation
     */
    public function setRmqsensrotation($rmqsensrotation)
    {
        $this->rmqsensrotation = $rmqsensrotation;
    }

    /**
     * @return string
     */
    public function getRmqpresenceprotection()
    {
        return $this->rmqpresenceprotection;
    }

    /**
     * @param string $rmqpresenceprotection
     */
    public function setRmqpresenceprotection($rmqpresenceprotection)
    {
        $this->rmqpresenceprotection = $rmqpresenceprotection;
    }

    /**
     * @return string
     */
    public function getRmqfonctdegivrage()
    {
        return $this->rmqfonctdegivrage;
    }

    /**
     * @param string $rmqfonctdegivrage
     */
    public function setRmqfonctdegivrage($rmqfonctdegivrage)
    {
        $this->rmqfonctdegivrage = $rmqfonctdegivrage;
    }

    /**
     * @return string
     */
    public function getRmqfixationgaine()
    {
        return $this->rmqfixationgaine;
    }

    /**
     * @param string $rmqfixationgaine
     */
    public function setRmqfixationgaine($rmqfixationgaine)
    {
        $this->rmqfixationgaine = $rmqfixationgaine;
    }

    /**
     * @return string
     */
    public function getRmqfixationbouches()
    {
        return $this->rmqfixationbouches;
    }

    /**
     * @param string $rmqfixationbouches
     */
    public function setRmqfixationbouches($rmqfixationbouches)
    {
        $this->rmqfixationbouches = $rmqfixationbouches;
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
     * Set sensrotation
     *
     * @param string $sensrotation
     * @return chauffage
     */
    public function setSensrotation($sensrotation)
    {
        $this->sensrotation = $sensrotation;

        return $this;
    }

    /**
     * Get sensrotation
     *
     * @return string 
     */
    public function getSensrotation()
    {
        return $this->sensrotation;
    }

    /**
     * Set presenceprotection
     *
     * @param string $presenceprotection
     * @return chauffage
     */
    public function setPresenceprotection($presenceprotection)
    {
        $this->presenceprotection = $presenceprotection;

        return $this;
    }

    /**
     * Get presenceprotection
     *
     * @return string 
     */
    public function getPresenceprotection()
    {
        return $this->presenceprotection;
    }

    /**
     * Set fonctdegivrage
     *
     * @param string $fonctdegivrage
     * @return chauffage
     */
    public function setFonctdegivrage($fonctdegivrage)
    {
        $this->fonctdegivrage = $fonctdegivrage;

        return $this;
    }

    /**
     * Get fonctdegivrage
     *
     * @return string 
     */
    public function getFonctdegivrage()
    {
        return $this->fonctdegivrage;
    }

    /**
     * Set fixationgaine
     *
     * @param string $fixationgaine
     * @return chauffage
     */
    public function setFixationgaine($fixationgaine)
    {
        $this->fixationgaine = $fixationgaine;

        return $this;
    }

    /**
     * Get fixationgaine
     *
     * @return string 
     */
    public function getFixationgaine()
    {
        return $this->fixationgaine;
    }

    /**
     * Set fixationbouches
     *
     * @param string $fixationbouches
     * @return chauffage
     */
    public function setFixationbouches($fixationbouches)
    {
        $this->fixationbouches = $fixationbouches;

        return $this;
    }

    /**
     * Get fixationbouches
     *
     * @return string 
     */
    public function getFixationbouches()
    {
        return $this->fixationbouches;
    }
}
