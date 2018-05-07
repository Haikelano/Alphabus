<?php

namespace My\ControlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * equipementoptionel
 *
 * @ORM\Table(name="equipementoptionel")
 * @ORM\Entity(repositoryClass="My\ControlerBundle\Repository\equipementoptionelRepository")
 */
class equipementoptionel
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
     * @ORM\Column(name="tachygraphe", type="string", length=255, nullable=true)
     */
    private $tachygraphe;

    /**
     * @var string
     *
     * @ORM\Column(name="plombagetachygraphe", type="string", length=255, nullable=true)
     */
    private $plombagetachygraphe;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctrefegirateur", type="string", length=255, nullable=true)
     */
    private $fonctrefegirateur;

    /**
     * @var string
     *
     * @ORM\Column(name="camerasurvaillence", type="string", length=255, nullable=true)
     */
    private $camerasurvaillence;

    /**
     * @var string
     *
     * @ORM\Column(name="afficheursdestination", type="string", length=255, nullable=true)
     */
    private $afficheursdestination;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctradio", type="string", length=255, nullable=true)
     */
    private $fonctradio;

    /**
     * @var string
     *
     * @ORM\Column(name="fontlecteur", type="string", length=255, nullable=true)
     */
    private $fontlecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctecrans", type="string", length=255, nullable=true)
     */
    private $fonctecrans;

    /**
     * @var string
     *
     * @ORM\Column(name="fonctmicrophone", type="string", length=255, nullable=true)
     */
    private $fonctmicrophone;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqtachygraphe", type="string", length=255, nullable=true)
     */
    private $rmqtachygraphe;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqplombagetachygraphe", type="string", length=255, nullable=true)
     */
    private $rmqplombagetachygraphe;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctrefegirateur", type="string", length=255, nullable=true)
     */
    private $rmqfonctrefegirateur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqcamerasurvaillence", type="string", length=255, nullable=true)
     */
    private $rmqcamerasurvaillence;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqafficheursdestination", type="string", length=255, nullable=true)
     */
    private $rmqafficheursdestination;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctradio", type="string", length=255, nullable=true)
     */
    private $rmqfonctradio;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfontlecteur", type="string", length=255, nullable=true)
     */
    private $rmqfontlecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctecrans", type="string", length=255, nullable=true)
     */
    private $rmqfonctecrans;

    /**
     * @var string
     *
     * @ORM\Column(name="rmqfonctmicrophone", type="string", length=255, nullable=true)
     */
    private $rmqfonctmicrophone;

    /**
     * @return string
     */
    public function getRmqtachygraphe()
    {
        return $this->rmqtachygraphe;
    }

    /**
     * @param string $rmqtachygraphe
     */
    public function setRmqtachygraphe($rmqtachygraphe)
    {
        $this->rmqtachygraphe = $rmqtachygraphe;
    }

    /**
     * @return string
     */
    public function getRmqplombagetachygraphe()
    {
        return $this->rmqplombagetachygraphe;
    }

    /**
     * @param string $rmqplombagetachygraphe
     */
    public function setRmqplombagetachygraphe($rmqplombagetachygraphe)
    {
        $this->rmqplombagetachygraphe = $rmqplombagetachygraphe;
    }

    /**
     * @return string
     */
    public function getRmqfonctrefegirateur()
    {
        return $this->rmqfonctrefegirateur;
    }

    /**
     * @param string $rmqfonctrefegirateur
     */
    public function setRmqfonctrefegirateur($rmqfonctrefegirateur)
    {
        $this->rmqfonctrefegirateur = $rmqfonctrefegirateur;
    }

    /**
     * @return string
     */
    public function getRmqcamerasurvaillence()
    {
        return $this->rmqcamerasurvaillence;
    }

    /**
     * @param string $rmqcamerasurvaillence
     */
    public function setRmqcamerasurvaillence($rmqcamerasurvaillence)
    {
        $this->rmqcamerasurvaillence = $rmqcamerasurvaillence;
    }

    /**
     * @return string
     */
    public function getRmqafficheursdestination()
    {
        return $this->rmqafficheursdestination;
    }

    /**
     * @param string $rmqafficheursdestination
     */
    public function setRmqafficheursdestination($rmqafficheursdestination)
    {
        $this->rmqafficheursdestination = $rmqafficheursdestination;
    }

    /**
     * @return string
     */
    public function getRmqfonctradio()
    {
        return $this->rmqfonctradio;
    }

    /**
     * @param string $rmqfonctradio
     */
    public function setRmqfonctradio($rmqfonctradio)
    {
        $this->rmqfonctradio = $rmqfonctradio;
    }

    /**
     * @return string
     */
    public function getRmqfontlecteur()
    {
        return $this->rmqfontlecteur;
    }

    /**
     * @param string $rmqfontlecteur
     */
    public function setRmqfontlecteur($rmqfontlecteur)
    {
        $this->rmqfontlecteur = $rmqfontlecteur;
    }

    /**
     * @return string
     */
    public function getRmqfonctecrans()
    {
        return $this->rmqfonctecrans;
    }

    /**
     * @param string $rmqfonctecrans
     */
    public function setRmqfonctecrans($rmqfonctecrans)
    {
        $this->rmqfonctecrans = $rmqfonctecrans;
    }

    /**
     * @return string
     */
    public function getRmqfonctmicrophone()
    {
        return $this->rmqfonctmicrophone;
    }

    /**
     * @param string $rmqfonctmicrophone
     */
    public function setRmqfonctmicrophone($rmqfonctmicrophone)
    {
        $this->rmqfonctmicrophone = $rmqfonctmicrophone;
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
     * Set tachygraphe
     *
     * @param string $tachygraphe
     * @return equipementoptionel
     */
    public function setTachygraphe($tachygraphe)
    {
        $this->tachygraphe = $tachygraphe;

        return $this;
    }

    /**
     * Get tachygraphe
     *
     * @return string 
     */
    public function getTachygraphe()
    {
        return $this->tachygraphe;
    }

    /**
     * Set plombagetachygraphe
     *
     * @param string $plombagetachygraphe
     * @return equipementoptionel
     */
    public function setPlombagetachygraphe($plombagetachygraphe)
    {
        $this->plombagetachygraphe = $plombagetachygraphe;

        return $this;
    }

    /**
     * Get plombagetachygraphe
     *
     * @return string 
     */
    public function getPlombagetachygraphe()
    {
        return $this->plombagetachygraphe;
    }

    /**
     * Set fonctrefegirateur
     *
     * @param string $fonctrefegirateur
     * @return equipementoptionel
     */
    public function setFonctrefegirateur($fonctrefegirateur)
    {
        $this->fonctrefegirateur = $fonctrefegirateur;

        return $this;
    }

    /**
     * Get fonctrefegirateur
     *
     * @return string 
     */
    public function getFonctrefegirateur()
    {
        return $this->fonctrefegirateur;
    }

    /**
     * Set camerasurvaillence
     *
     * @param string $camerasurvaillence
     * @return equipementoptionel
     */
    public function setCamerasurvaillence($camerasurvaillence)
    {
        $this->camerasurvaillence = $camerasurvaillence;

        return $this;
    }

    /**
     * Get camerasurvaillence
     *
     * @return string 
     */
    public function getCamerasurvaillence()
    {
        return $this->camerasurvaillence;
    }

    /**
     * Set afficheursdestination
     *
     * @param string $afficheursdestination
     * @return equipementoptionel
     */
    public function setAfficheursdestination($afficheursdestination)
    {
        $this->afficheursdestination = $afficheursdestination;

        return $this;
    }

    /**
     * Get afficheursdestination
     *
     * @return string 
     */
    public function getAfficheursdestination()
    {
        return $this->afficheursdestination;
    }

    /**
     * Set fonctradio
     *
     * @param string $fonctradio
     * @return equipementoptionel
     */
    public function setFonctradio($fonctradio)
    {
        $this->fonctradio = $fonctradio;

        return $this;
    }

    /**
     * Get fonctradio
     *
     * @return string 
     */
    public function getFonctradio()
    {
        return $this->fonctradio;
    }

    /**
     * Set fontlecteur
     *
     * @param string $fontlecteur
     * @return equipementoptionel
     */
    public function setFontlecteur($fontlecteur)
    {
        $this->fontlecteur = $fontlecteur;

        return $this;
    }

    /**
     * Get fontlecteur
     *
     * @return string 
     */
    public function getFontlecteur()
    {
        return $this->fontlecteur;
    }

    /**
     * Set fonctecrans
     *
     * @param string $fonctecrans
     * @return equipementoptionel
     */
    public function setFonctecrans($fonctecrans)
    {
        $this->fonctecrans = $fonctecrans;

        return $this;
    }

    /**
     * Get fonctecrans
     *
     * @return string 
     */
    public function getFonctecrans()
    {
        return $this->fonctecrans;
    }

    /**
     * Set fonctmicrophone
     *
     * @param string $fonctmicrophone
     * @return equipementoptionel
     */
    public function setFonctmicrophone($fonctmicrophone)
    {
        $this->fonctmicrophone = $fonctmicrophone;

        return $this;
    }

    /**
     * Get fonctmicrophone
     *
     * @return string 
     */
    public function getFonctmicrophone()
    {
        return $this->fonctmicrophone;
    }
}
