<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * climatisation
 *
 * @ORM\Table(name="climatisation")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\climatisationRepository")
 */
class climatisation
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
     * @ORM\Column(name="fonctionnementclima", type="string", length=255, nullable=true)
     */
    private $fonctionnementclima;

    /**
     * @var string
     *
     * @ORM\Column(name="absencedruit", type="string", length=255, nullable=true)
     */
    private $absencedruit;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctcommande", type="string", length=255, nullable=true)
     */
    private $fonctcommande;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationfocture", type="string", length=255, nullable=true)
     */
    private $fixationfocture;

    /**
     * @var string
     *
     * @ORM\Column(name="controlemontage", type="string", length=255, nullable=true)
     */
    private $controlemontage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctionnementclima", type="string", length=255, nullable=true)
     */
    private $rmqfonctionnementclima;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqabsencedruit", type="string", length=255, nullable=true)
     */
    private $rmqabsencedruit;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctcommande", type="string", length=255, nullable=true)
     */
    private $rmqfonctcommande;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationfocture", type="string", length=255, nullable=true)
     */
    private $rmqfixationfocture;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcontrolemontage", type="string", length=255, nullable=true)
     */
    private $rmqcontrolemontage;

    /**
     * @return string
     */
    public function getRmqfonctionnementclima()
    {
        return $this->rmqfonctionnementclima;
    }

    /**
     * @param string $rmqfonctionnementclima
     */
    public function setRmqfonctionnementclima($rmqfonctionnementclima)
    {
        $this->rmqfonctionnementclima = $rmqfonctionnementclima;
    }

    /**
     * @return string
     */
    public function getRmqabsencedruit()
    {
        return $this->rmqabsencedruit;
    }

    /**
     * @param string $rmqabsencedruit
     */
    public function setRmqabsencedruit($rmqabsencedruit)
    {
        $this->rmqabsencedruit = $rmqabsencedruit;
    }

    /**
     * @return string
     */
    public function getRmqfonctcommande()
    {
        return $this->rmqfonctcommande;
    }

    /**
     * @param string $rmqfonctcommande
     */
    public function setRmqfonctcommande($rmqfonctcommande)
    {
        $this->rmqfonctcommande = $rmqfonctcommande;
    }

    /**
     * @return string
     */
    public function getRmqfixationfocture()
    {
        return $this->rmqfixationfocture;
    }

    /**
     * @param string $rmqfixationfocture
     */
    public function setRmqfixationfocture($rmqfixationfocture)
    {
        $this->rmqfixationfocture = $rmqfixationfocture;
    }

    /**
     * @return string
     */
    public function getRmqcontrolemontage()
    {
        return $this->rmqcontrolemontage;
    }

    /**
     * @param string $rmqcontrolemontage
     */
    public function setRmqcontrolemontage($rmqcontrolemontage)
    {
        $this->rmqcontrolemontage = $rmqcontrolemontage;
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
     * Set fonctionnementclima
     *
     * @param string $fonctionnementclima
     * @return climatisation
     */
    public function setFonctionnementclima($fonctionnementclima)
    {
        $this->fonctionnementclima = $fonctionnementclima;

        return $this;
    }

    /**
     * Get fonctionnementclima
     *
     * @return string 
     */
    public function getFonctionnementclima()
    {
        return $this->fonctionnementclima;
    }

    /**
     * Set absencedruit
     *
     * @param string $absencedruit
     * @return climatisation
     */
    public function setAbsencedruit($absencedruit)
    {
        $this->absencedruit = $absencedruit;

        return $this;
    }

    /**
     * Get absencedruit
     *
     * @return string 
     */
    public function getAbsencedruit()
    {
        return $this->absencedruit;
    }

    /**
     * Set fonctcommande
     *
     * @param string $fonctcommande
     * @return climatisation
     */
    public function setFonctcommande($fonctcommande)
    {
        $this->fonctcommande = $fonctcommande;

        return $this;
    }

    /**
     * Get fonctcommande
     *
     * @return string 
     */
    public function getFonctcommande()
    {
        return $this->fonctcommande;
    }

    /**
     * Set fixationfocture
     *
     * @param string $fixationfocture
     * @return climatisation
     */
    public function setFixationfocture($fixationfocture)
    {
        $this->fixationfocture = $fixationfocture;

        return $this;
    }

    /**
     * Get fixationfocture
     *
     * @return string 
     */
    public function getFixationfocture()
    {
        return $this->fixationfocture;
    }

    /**
     * Set controlemontage
     *
     * @param string $controlemontage
     * @return climatisation
     */
    public function setControlemontage($controlemontage)
    {
        $this->controlemontage = $controlemontage;

        return $this;
    }

    /**
     * Get controlemontage
     *
     * @return string 
     */
    public function getControlemontage()
    {
        return $this->controlemontage;
    }
}
