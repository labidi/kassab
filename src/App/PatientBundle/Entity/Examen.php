<?php

namespace App\PatientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PatientBundle\Entity\ExamenRepository")
 */
class Examen
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="hb", type="string", length=255)
     */
    private $hb;

    /**
     * @var string
     *
     * @ORM\Column(name="ht", type="string", length=255)
     */
    private $ht;

    /**
     * @var string
     *
     * @ORM\Column(name="plq", type="string", length=255)
     */
    private $plq;

    /**
     * @var string
     *
     * @ORM\Column(name="gie", type="string", length=255)
     */
    private $gie;

    /**
     * @var string
     *
     * @ORM\Column(name="uree", type="string", length=255)
     */
    private $uree;

    /**
     * @var string
     *
     * @ORM\Column(name="creat", type="string", length=255)
     */
    private $creat;

    /**
     * @var string
     *
     * @ORM\Column(name="naplus", type="string", length=255)
     */
    private $naplus;

    /**
     * @var string
     *
     * @ORM\Column(name="kplus", type="string", length=255)
     */
    private $kplus;

    /**
     * @var string
     *
     * @ORM\Column(name="tp", type="string", length=255)
     */
    private $tp;

    /**
     * @var string
     *
     * @ORM\Column(name="tca", type="string", length=255)
     */
    private $tca;

    /**
     * @var string
     *
     * @ORM\Column(name="gs", type="string", length=255)
     */
    private $gs;

    /**
     * @ORM\ManyToOne(targetEntity="Patient", inversedBy="examens")
     * @ORM\JoinColumn(name="patient_id", referencedColumnName="id")
     */
    private $patient;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Examen
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set hb
     *
     * @param string $hb
     *
     * @return Examen
     */
    public function setHb($hb)
    {
        $this->hb = $hb;

        return $this;
    }

    /**
     * Get hb
     *
     * @return string
     */
    public function getHb()
    {
        return $this->hb;
    }

    /**
     * Set ht
     *
     * @param string $ht
     *
     * @return Examen
     */
    public function setHt($ht)
    {
        $this->ht = $ht;

        return $this;
    }

    /**
     * Get ht
     *
     * @return string
     */
    public function getHt()
    {
        return $this->ht;
    }

    /**
     * Set plq
     *
     * @param string $plq
     *
     * @return Examen
     */
    public function setPlq($plq)
    {
        $this->plq = $plq;

        return $this;
    }

    /**
     * Get plq
     *
     * @return string
     */
    public function getPlq()
    {
        return $this->plq;
    }

    /**
     * Set gie
     *
     * @param string $gie
     *
     * @return Examen
     */
    public function setGie($gie)
    {
        $this->gie = $gie;

        return $this;
    }

    /**
     * Get gie
     *
     * @return string
     */
    public function getGie()
    {
        return $this->gie;
    }

    /**
     * Set uree
     *
     * @param string $uree
     *
     * @return Examen
     */
    public function setUree($uree)
    {
        $this->uree = $uree;

        return $this;
    }

    /**
     * Get uree
     *
     * @return string
     */
    public function getUree()
    {
        return $this->uree;
    }

    /**
     * Set creat
     *
     * @param string $creat
     *
     * @return Examen
     */
    public function setCreat($creat)
    {
        $this->creat = $creat;

        return $this;
    }

    /**
     * Get creat
     *
     * @return string
     */
    public function getCreat()
    {
        return $this->creat;
    }

    /**
     * Set naplus
     *
     * @param string $naplus
     *
     * @return Examen
     */
    public function setNaplus($naplus)
    {
        $this->naplus = $naplus;

        return $this;
    }

    /**
     * Get naplus
     *
     * @return string
     */
    public function getNaplus()
    {
        return $this->naplus;
    }

    /**
     * Set kplus
     *
     * @param string $kplus
     *
     * @return Examen
     */
    public function setKplus($kplus)
    {
        $this->kplus = $kplus;

        return $this;
    }

    /**
     * Get kplus
     *
     * @return string
     */
    public function getKplus()
    {
        return $this->kplus;
    }

    /**
     * Set tp
     *
     * @param string $tp
     *
     * @return Examen
     */
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get tp
     *
     * @return string
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set tca
     *
     * @param string $tca
     *
     * @return Examen
     */
    public function setTca($tca)
    {
        $this->tca = $tca;

        return $this;
    }

    /**
     * Get tca
     *
     * @return string
     */
    public function getTca()
    {
        return $this->tca;
    }

    /**
     * Set gs
     *
     * @param string $gs
     *
     * @return Examen
     */
    public function setGs($gs)
    {
        $this->gs = $gs;

        return $this;
    }

    /**
     * Get gs
     *
     * @return string
     */
    public function getGs()
    {
        return $this->gs;
    }

    /**
     * Set patient
     *
     * @param \App\PatientBundle\Entity\Patient $patient
     *
     * @return Examen
     */
    public function setPatient(\App\PatientBundle\Entity\Patient $patient = null)
    {
        $this->patient = $patient;

        return $this;
    }

    /**
     * Get patient
     *
     * @return \App\PatientBundle\Entity\Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }
}
