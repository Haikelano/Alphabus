<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * roues
 *
 * @ORM\Table(name="roues")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\rouesRepository")
 */
class roues
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
     * @ORM\Column(name="serrage", type="string", length=255, nullable=true)
     */
    private $serrage;

    /**
     * @var string
     *
     * @ORM\Column(name="fixation", type="string", length=255, nullable=true)
     */
    private $fixation;

    /**
     * @var string
     *
     * @ORM\Column(name="pression", type="string", length=255, nullable=true)
     */
    private $pression;

    /**
     * @var string
     *
     * @ORM\Column(name="fixationroue", type="string", length=255, nullable=true)
     */
    private $fixationroue;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqserrage", type="string", length=255, nullable=true)
     */
    private $rmqserrage;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixation", type="string", length=255, nullable=true)
     */
    private $rmqfixation;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqpression", type="string", length=255, nullable=true)
     */
    private $rmqpression;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfixationroue", type="string", length=255, nullable=true)
     */
    private $rmqfixationroue;

    /**
     * @return string
     */
    public function getRmqserrage()
    {
        return $this->rmqserrage;
    }

    /**
     * @param string $rmqserrage
     */
    public function setRmqserrage($rmqserrage)
    {
        $this->rmqserrage = $rmqserrage;
    }

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
    public function getRmqpression()
    {
        return $this->rmqpression;
    }

    /**
     * @param string $rmqpression
     */
    public function setRmqpression($rmqpression)
    {
        $this->rmqpression = $rmqpression;
    }

    /**
     * @return string
     */
    public function getRmqfixationroue()
    {
        return $this->rmqfixationroue;
    }

    /**
     * @param string $rmqfixationroue
     */
    public function setRmqfixationroue($rmqfixationroue)
    {
        $this->rmqfixationroue = $rmqfixationroue;
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
     * Set serrage
     *
     * @param string $serrage
     * @return roues
     */
    public function setSerrage($serrage)
    {
        $this->serrage = $serrage;

        return $this;
    }

    /**
     * Get serrage
     *
     * @return string 
     */
    public function getSerrage()
    {
        return $this->serrage;
    }

    /**
     * Set fixation
     *
     * @param string $fixation
     * @return roues
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
     * Set pression
     *
     * @param string $pression
     * @return roues
     */
    public function setPression($pression)
    {
        $this->pression = $pression;

        return $this;
    }

    /**
     * Get pression
     *
     * @return string 
     */
    public function getPression()
    {
        return $this->pression;
    }

    /**
     * Set fixationroue
     *
     * @param string $fixationroue
     * @return roues
     */
    public function setFixationroue($fixationroue)
    {
        $this->fixationroue = $fixationroue;

        return $this;
    }

    /**
     * Get fixationroue
     *
     * @return string 
     */
    public function getFixationroue()
    {
        return $this->fixationroue;
    }
}
