<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * portire
 *
 * @ORM\Table(name="portire")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\portireRepository")
 */
class portire
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
     * @ORM\Column(name="etanchetie", type="string", length=255, nullable=true)
     */
    private $etanchetie;

    /**
     * @var string
     *
     * @ORM\Column(name="overclose", type="string", length=255, nullable=true)
     */
    private $overclose;

    /**
     * @var string
     *
     * @ORM\Column(name="habillagecommande", type="string", length=255, nullable=true)
     */
    private $habillagecommande;

    /**
     * @var string
     *
     * @ORM\Column(name="jointbaguette", type="string", length=255, nullable=true)
     */
    private $jointbaguette;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqetanchetie", type="string", length=255, nullable=true)
     */
    private $rmqetanchetie;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqoverclose", type="string", length=255, nullable=true)
     */
    private $rmqoverclose;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqhabillagecommande", type="string", length=255, nullable=true)
     */
    private $rmqhabillagecommande;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqjointbaguette", type="string", length=255, nullable=true)
     */
    private $rmqjointbaguette;

    /**
     * @return string
     */
    public function getRmqetanchetie()
    {
        return $this->rmqetanchetie;
    }

    /**
     * @param string $rmqetanchetie
     */
    public function setRmqetanchetie($rmqetanchetie)
    {
        $this->rmqetanchetie = $rmqetanchetie;
    }

    /**
     * @return string
     */
    public function getRmqoverclose()
    {
        return $this->rmqoverclose;
    }

    /**
     * @param string $rmqoverclose
     */
    public function setRmqoverclose($rmqoverclose)
    {
        $this->rmqoverclose = $rmqoverclose;
    }

    /**
     * @return string
     */
    public function getRmqhabillagecommande()
    {
        return $this->rmqhabillagecommande;
    }

    /**
     * @param string $rmqhabillagecommande
     */
    public function setRmqhabillagecommande($rmqhabillagecommande)
    {
        $this->rmqhabillagecommande = $rmqhabillagecommande;
    }

    /**
     * @return string
     */
    public function getRmqjointbaguette()
    {
        return $this->rmqjointbaguette;
    }

    /**
     * @param string $rmqjointbaguette
     */
    public function setRmqjointbaguette($rmqjointbaguette)
    {
        $this->rmqjointbaguette = $rmqjointbaguette;
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
     * Set etanchetie
     *
     * @param string $etanchetie
     * @return portire
     */
    public function setEtanchetie($etanchetie)
    {
        $this->etanchetie = $etanchetie;

        return $this;
    }

    /**
     * Get etanchetie
     *
     * @return string 
     */
    public function getEtanchetie()
    {
        return $this->etanchetie;
    }

    /**
     * Set overclose
     *
     * @param string $overclose
     * @return portire
     */
    public function setOverclose($overclose)
    {
        $this->overclose = $overclose;

        return $this;
    }

    /**
     * Get overclose
     *
     * @return string 
     */
    public function getOverclose()
    {
        return $this->overclose;
    }

    /**
     * Set habillagecommande
     *
     * @param string $habillagecommande
     * @return portire
     */
    public function setHabillagecommande($habillagecommande)
    {
        $this->habillagecommande = $habillagecommande;

        return $this;
    }

    /**
     * Get habillagecommande
     *
     * @return string 
     */
    public function getHabillagecommande()
    {
        return $this->habillagecommande;
    }

    /**
     * Set jointbaguette
     *
     * @param string $jointbaguette
     * @return portire
     */
    public function setJointbaguette($jointbaguette)
    {
        $this->jointbaguette = $jointbaguette;

        return $this;
    }

    /**
     * Get jointbaguette
     *
     * @return string 
     */
    public function getJointbaguette()
    {
        return $this->jointbaguette;
    }
}
