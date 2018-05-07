<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tapisserie
 *
 * @ORM\Table(name="tapisserie")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\tapisserieRepository")
 */
class tapisserie
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
     * @ORM\Column(name="collage", type="string", length=255, nullable=true)
     */
    private $collage;

    /**
     * @var string
     *
     * @ORM\Column(name="coupure", type="string", length=255, nullable=true)
     */
    private $coupure;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="jointure", type="string", length=255, nullable=true)
     */
    private $jointure;


    /**
     * @var string
     *
     * @ORM\Column(name="rmqcollage", type="string", length=255, nullable=true)
     */
    private $rmqcollage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcoupure", type="string", length=255, nullable=true)
     */
    private $rmqcoupure;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqetat", type="string", length=255, nullable=true)
     */
    private $rmqetat;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqjointure", type="string", length=255, nullable=true)
     */
    private $rmqjointure;

    /**
     * @return string
     */
    public function getRmqcollage()
    {
        return $this->rmqcollage;
    }

    /**
     * @param string $rmqcollage
     */
    public function setRmqcollage($rmqcollage)
    {
        $this->rmqcollage = $rmqcollage;
    }

    /**
     * @return string
     */
    public function getRmqcoupure()
    {
        return $this->rmqcoupure;
    }

    /**
     * @param string $rmqcoupure
     */
    public function setRmqcoupure($rmqcoupure)
    {
        $this->rmqcoupure = $rmqcoupure;
    }

    /**
     * @return string
     */
    public function getRmqetat()
    {
        return $this->rmqetat;
    }

    /**
     * @param string $rmqetat
     */
    public function setRmqetat($rmqetat)
    {
        $this->rmqetat = $rmqetat;
    }

    /**
     * @return string
     */
    public function getRmqjointure()
    {
        return $this->rmqjointure;
    }

    /**
     * @param string $rmqjointure
     */
    public function setRmqjointure($rmqjointure)
    {
        $this->rmqjointure = $rmqjointure;
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
     * Set collage
     *
     * @param string $collage
     * @return tapisserie
     */
    public function setCollage($collage)
    {
        $this->collage = $collage;

        return $this;
    }

    /**
     * Get collage
     *
     * @return string 
     */
    public function getCollage()
    {
        return $this->collage;
    }

    /**
     * Set coupure
     *
     * @param string $coupure
     * @return tapisserie
     */
    public function setCoupure($coupure)
    {
        $this->coupure = $coupure;

        return $this;
    }

    /**
     * Get coupure
     *
     * @return string 
     */
    public function getCoupure()
    {
        return $this->coupure;
    }

    /**
     * Set etat
     *
     * @param string $etat
     * @return tapisserie
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set jointure
     *
     * @param string $jointure
     * @return tapisserie
     */
    public function setJointure($jointure)
    {
        $this->jointure = $jointure;

        return $this;
    }

    /**
     * Get jointure
     *
     * @return string 
     */
    public function getJointure()
    {
        return $this->jointure;
    }
}
