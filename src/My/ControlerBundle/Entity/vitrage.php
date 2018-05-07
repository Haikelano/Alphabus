<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * vitrage
 *
 * @ORM\Table(name="vitrage")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\vitrageRepository")
 */
class vitrage
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
     * @ORM\Column(name="etat", type="string", length=255, nullable=true)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="overclose", type="string", length=255, nullable=true)
     */
    private $overclose;

    /**
     * @var string
     *
     * @ORM\Column(name="montagejoint", type="string", length=255, nullable=true)
     */
    private $montagejoint;

    /**
     * @var string
     *
     * @ORM\Column(name="montagecle", type="string", length=255, nullable=true)
     */
    private $montagecle;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqetat", type="string", length=255, nullable=true)
     */
    private $rmqetat;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqoverclose", type="string", length=255, nullable=true)
     */
    private $rmqoverclose;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqmontagejoint", type="string", length=255, nullable=true)
     */
    private $rmqmontagejoint;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqmontagecle", type="string", length=255, nullable=true)
     */
    private $rmqmontagecle;

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
    public function getRmqmontagejoint()
    {
        return $this->rmqmontagejoint;
    }

    /**
     * @param string $rmqmontagejoint
     */
    public function setRmqmontagejoint($rmqmontagejoint)
    {
        $this->rmqmontagejoint = $rmqmontagejoint;
    }

    /**
     * @return string
     */
    public function getRmqmontagecle()
    {
        return $this->rmqmontagecle;
    }

    /**
     * @param string $rmqmontagecle
     */
    public function setRmqmontagecle($rmqmontagecle)
    {
        $this->rmqmontagecle = $rmqmontagecle;
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
     * Set etat
     *
     * @param string $etat
     * @return vitrage
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
     * Set overclose
     *
     * @param string $overclose
     * @return vitrage
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
     * Set montagejoint
     *
     * @param string $montagejoint
     * @return vitrage
     */
    public function setMontagejoint($montagejoint)
    {
        $this->montagejoint = $montagejoint;

        return $this;
    }

    /**
     * Get montagejoint
     *
     * @return string 
     */
    public function getMontagejoint()
    {
        return $this->montagejoint;
    }

    /**
     * Set montagecle
     *
     * @param string $montagecle
     * @return vitrage
     */
    public function setMontagecle($montagecle)
    {
        $this->montagecle = $montagecle;

        return $this;
    }

    /**
     * Get montagecle
     *
     * @return string 
     */
    public function getMontagecle()
    {
        return $this->montagecle;
    }
}
