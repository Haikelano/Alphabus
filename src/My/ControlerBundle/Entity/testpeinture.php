<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * peinture
 *
 * @ORM\Table(name="testpeinture")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\testpeintureRepository")
 */
class testpeinture
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
     * @ORM\Column(name="peinturemaintien", type="string", length=255, nullable=true)
     */
    private $peinturemaintien;

    /**
     * @var string
     *
     * @ORM\Column(name="abscvapeur", type="string", length=255, nullable=true)
     */
    private $abscvapeur;

    /**
     * @var string
     *
     * @ORM\Column(name="abscimpureté", type="string", length=255, nullable=true)
     */
    private $abscimpureté;

    /**
     * @var string
     *
     * @ORM\Column(name="peauorange", type="string", length=255, nullable=true)
     */
    private $peauorange;

    /**
     * @var string
     *
     * @ORM\Column(name="abscgratinure", type="string", length=255, nullable=true)
     */
    private $abscgratinure;

    /**
     * @var string
     *
     * @ORM\Column(name="brillance", type="string", length=255, nullable=true)
     */
    private $brillance;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqpeinturemaintien", type="string", length=255, nullable=true)
     */
    private $rmqpeinturemaintien;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqabscvapeur", type="string", length=255, nullable=true)
     */
    private $rmqabscvapeur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqabscimpureté", type="string", length=255, nullable=true)
     */
    private $rmqabscimpureté;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqpeauorange", type="string", length=255, nullable=true)
     */
    private $rmqpeauorange;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqabscgratinure", type="string", length=255, nullable=true)
     */
    private $rmqabscgratinure;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqbrillance", type="string", length=255, nullable=true)
     */
    private $rmqbrillance;

    /**
     * @return string
     */
    public function getRmqpeinturemaintien()
    {
        return $this->rmqpeinturemaintien;
    }

    /**
     * @param string $rmqpeinturemaintien
     */
    public function setRmqpeinturemaintien($rmqpeinturemaintien)
    {
        $this->rmqpeinturemaintien = $rmqpeinturemaintien;
    }

    /**
     * @return string
     */
    public function getRmqabscvapeur()
    {
        return $this->rmqabscvapeur;
    }

    /**
     * @param string $rmqabscvapeur
     */
    public function setRmqabscvapeur($rmqabscvapeur)
    {
        $this->rmqabscvapeur = $rmqabscvapeur;
    }

    /**
     * @return string
     */
    public function getRmqabscimpureté()
    {
        return $this->rmqabscimpureté;
    }

    /**
     * @param string $rmqabscimpureté
     */
    public function setRmqabscimpureté($rmqabscimpureté)
    {
        $this->rmqabscimpureté = $rmqabscimpureté;
    }

    /**
     * @return string
     */
    public function getRmqpeauorange()
    {
        return $this->rmqpeauorange;
    }

    /**
     * @param string $rmqpeauorange
     */
    public function setRmqpeauorange($rmqpeauorange)
    {
        $this->rmqpeauorange = $rmqpeauorange;
    }

    /**
     * @return string
     */
    public function getRmqabscgratinure()
    {
        return $this->rmqabscgratinure;
    }

    /**
     * @param string $rmqabscgratinure
     */
    public function setRmqabscgratinure($rmqabscgratinure)
    {
        $this->rmqabscgratinure = $rmqabscgratinure;
    }

    /**
     * @return string
     */
    public function getRmqbrillance()
    {
        return $this->rmqbrillance;
    }

    /**
     * @param string $rmqbrillance
     */
    public function setRmqbrillance($rmqbrillance)
    {
        $this->rmqbrillance = $rmqbrillance;
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
     * Set peinturemaintien
     *
     * @param string $peinturemaintien
     * @return testpeinture
     */
    public function setPeinturemaintien($peinturemaintien)
    {
        $this->peinturemaintien = $peinturemaintien;

        return $this;
    }

    /**
     * Get peinturemaintien
     *
     * @return string 
     */
    public function getPeinturemaintien()
    {
        return $this->peinturemaintien;
    }

    /**
     * Set abscvapeur
     *
     * @param string $abscvapeur
     * @return testpeinture
     */
    public function setAbscvapeur($abscvapeur)
    {
        $this->abscvapeur = $abscvapeur;

        return $this;
    }

    /**
     * Get abscvapeur
     *
     * @return string 
     */
    public function getAbscvapeur()
    {
        return $this->abscvapeur;
    }

    /**
     * Set abscimpureté
     *
     * @param string $abscimpureté
     * @return testpeinture
     */
    public function setAbscimpureté($abscimpureté)
    {
        $this->abscimpureté = $abscimpureté;

        return $this;
    }

    /**
     * Get abscimpureté
     *
     * @return string 
     */
    public function getAbscimpureté()
    {
        return $this->abscimpureté;
    }

    /**
     * Set peauorange
     *
     * @param string $peauorange
     * @return testpeinture
     */
    public function setPeauorange($peauorange)
    {
        $this->peauorange = $peauorange;

        return $this;
    }

    /**
     * Get peauorange
     *
     * @return string 
     */
    public function getPeauorange()
    {
        return $this->peauorange;
    }

    /**
     * Set abscgratinure
     *
     * @param string $abscgratinure
     * @return testpeinture
     */
    public function setAbscgratinure($abscgratinure)
    {
        $this->abscgratinure = $abscgratinure;

        return $this;
    }

    /**
     * Get abscgratinure
     *
     * @return string 
     */
    public function getAbscgratinure()
    {
        return $this->abscgratinure;
    }

    /**
     * Set brillance
     *
     * @param string $brillance
     * @return testpeinture
     */
    public function setBrillance($brillance)
    {
        $this->brillance = $brillance;

        return $this;
    }

    /**
     * Get brillance
     *
     * @return string 
     */
    public function getBrillance()
    {
        return $this->brillance;
    }
}
