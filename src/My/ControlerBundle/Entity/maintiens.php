<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * maintiens
 *
 * @ORM\Table(name="maintiens")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\maintiensRepository")
 */
class maintiens
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
     * @ORM\Column(name="fixation", type="string", length=255, nullable=true)
     */
    private $fixation;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationmantiens", type="string", length=255, nullable=true)
     */
    private $fixationmantiens;

    /**
     * @var string
     *
     * @ORM\Column(name="toleprotection", type="string", length=255, nullable=true)
     */
    private $toleprotection;
    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixation", type="string", length=255, nullable=true)
     */
    private $rmqfixation;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationmantiens", type="string", length=255, nullable=true)
     */
    private $rmqfixationmantiens;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqtoleprotection", type="string", length=255, nullable=true)
     */
    private $rmqtoleprotection;

    /**
     * @return string
     */
    public function getRmqfixation()
    {
        return $this->rmqfixation;
    }

    /**
     * @param string $rmqfixation
     */
    public function setRmqfixation($rmqfixation)
    {
        $this->rmqfixation = $rmqfixation;
    }

    /**
     * @return string
     */
    public function getRmqfixationmantiens()
    {
        return $this->rmqfixationmantiens;
    }

    /**
     * @param string $rmqfixationmantiens
     */
    public function setRmqfixationmantiens($rmqfixationmantiens)
    {
        $this->rmqfixationmantiens = $rmqfixationmantiens;
    }

    /**
     * @return string
     */
    public function getRmqtoleprotection()
    {
        return $this->rmqtoleprotection;
    }

    /**
     * @param string $rmqtoleprotection
     */
    public function setRmqtoleprotection($rmqtoleprotection)
    {
        $this->rmqtoleprotection = $rmqtoleprotection;
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
     * Set fixation
     *
     * @param string $fixation
     * @return maintiens
     */
    public function setFixation($fixation)
    {
        $this->fixation = $fixation;

        return $this;
    }

    /**
     * Get fixation
     *
     * @return string 
     */
    public function getFixation()
    {
        return $this->fixation;
    }

    /**
     * Set fixationmantiens
     *
     * @param string $fixationmantiens
     * @return maintiens
     */
    public function setFixationmantiens($fixationmantiens)
    {
        $this->fixationmantiens = $fixationmantiens;

        return $this;
    }

    /**
     * Get fixationmantiens
     *
     * @return string 
     */
    public function getFixationmantiens()
    {
        return $this->fixationmantiens;
    }

    /**
     * Set toleprotection
     *
     * @param string $toleprotection
     * @return maintiens
     */
    public function setToleprotection($toleprotection)
    {
        $this->toleprotection = $toleprotection;

        return $this;
    }

    /**
     * Get toleprotection
     *
     * @return string 
     */
    public function getToleprotection()
    {
        return $this->toleprotection;
    }
}
