<?php

namespace App\PatientBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="App\PatientBundle\Entity\PatientRepository")
 */
class Patient
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
     * @ORM\Column(type="string", length=255)
     */
    protected $nom;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $prenom;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $age;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $num_dossier;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $diagnostic;
     /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $intervention;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $service;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $chirurgien;
    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $date;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $medecin_ar;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $diabete;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $diabete_depuis;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $diabete_complications;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $diabete_traitement;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $hta;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $hta_depuis;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $hta_complications;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $hta_traitement;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $coronarien;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $coronarien_depuis;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $coronarien_complications;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $coronarien_traitement;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $coronarien_evolution;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $bpco;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $bpco_depuis;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $bpco_stade;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $bpco_traitement;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $atcd_autres;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $atcd_chirurgicaux;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $atcd_transfusionnel;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $rai_atcd_transfusionnel;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $allergies;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $gravite;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $tabac;
    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $p_a;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $alcool;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $poids;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $taille;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $fc;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $ta;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $spo2;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $dyspne_d_effort;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $orthopnee;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $dyspnee_paroxysthique_nocturne;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $angor;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $omi;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $turjuscence_jugulaire;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $ascite;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $varices;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $auscultation_cardiaque;
    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $auscultation_pulmonaire;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $autres_interrogation_examen;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $mallampati;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $ob;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $dtm;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $rachis;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $sous_interrogatoir_autres;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $asa;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $nyh;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $lee;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $terrain;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $ecg;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $rx_thorax;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $echo_coeur;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $autres_examen;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $avis_specialise;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $recommandations;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $technique_anesthesique;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $protocole_anesthesique;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $protocole_analgestique;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $epargne_sanguine;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    protected $premedication;

    // ...
    /**
     * @ORM\OneToMany(targetEntity="Examen", mappedBy="patient", cascade={"persist"})
     */
    private $examens;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Patient
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Patient
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Patient
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set numDossier
     *
     * @param string $numDossier
     *
     * @return Patient
     */
    public function setNumDossier($numDossier)
    {
        $this->num_dossier = $numDossier;

        return $this;
    }

    /**
     * Get numDossier
     *
     * @return string
     */
    public function getNumDossier()
    {
        return $this->num_dossier;
    }

    /**
     * Set diagnostic
     *
     * @param string $diagnostic
     *
     * @return Patient
     */
    public function setDiagnostic($diagnostic)
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }

    /**
     * Get diagnostic
     *
     * @return string
     */
    public function getDiagnostic()
    {
        return $this->diagnostic;
    }

    /**
     * Set intervention
     *
     * @param string $intervention
     *
     * @return Patient
     */
    public function setIntervention($intervention)
    {
        $this->intervention = $intervention;

        return $this;
    }

    /**
     * Get intervention
     *
     * @return string
     */
    public function getIntervention()
    {
        return $this->intervention;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return Patient
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set chirurgien
     *
     * @param string $chirurgien
     *
     * @return Patient
     */
    public function setChirurgien($chirurgien)
    {
        $this->chirurgien = $chirurgien;

        return $this;
    }

    /**
     * Get chirurgien
     *
     * @return string
     */
    public function getChirurgien()
    {
        return $this->chirurgien;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Patient
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
     * Set medecinAr
     *
     * @param string $medecinAr
     *
     * @return Patient
     */
    public function setMedecinAr($medecinAr)
    {
        $this->medecin_ar = $medecinAr;

        return $this;
    }

    /**
     * Get medecinAr
     *
     * @return string
     */
    public function getMedecinAr()
    {
        return $this->medecin_ar;
    }

    /**
     * Set diabete
     *
     * @param boolean $diabete
     *
     * @return Patient
     */
    public function setDiabete($diabete)
    {
        $this->diabete = $diabete;

        return $this;
    }

    /**
     * Get diabete
     *
     * @return boolean
     */
    public function getDiabete()
    {
        return $this->diabete;
    }

    /**
     * Set diabeteDepuis
     *
     * @param string $diabeteDepuis
     *
     * @return Patient
     */
    public function setDiabeteDepuis($diabeteDepuis)
    {
        $this->diabete_depuis = $diabeteDepuis;

        return $this;
    }

    /**
     * Get diabeteDepuis
     *
     * @return string
     */
    public function getDiabeteDepuis()
    {
        return $this->diabete_depuis;
    }

    /**
     * Set diabeteComplications
     *
     * @param string $diabeteComplications
     *
     * @return Patient
     */
    public function setDiabeteComplications($diabeteComplications)
    {
        $this->diabete_complications = $diabeteComplications;

        return $this;
    }

    /**
     * Get diabeteComplications
     *
     * @return string
     */
    public function getDiabeteComplications()
    {
        return $this->diabete_complications;
    }

    /**
     * Set diabeteTraitement
     *
     * @param string $diabeteTraitement
     *
     * @return Patient
     */
    public function setDiabeteTraitement($diabeteTraitement)
    {
        $this->diabete_traitement = $diabeteTraitement;

        return $this;
    }

    /**
     * Get diabeteTraitement
     *
     * @return string
     */
    public function getDiabeteTraitement()
    {
        return $this->diabete_traitement;
    }

    /**
     * Set hta
     *
     * @param boolean $hta
     *
     * @return Patient
     */
    public function setHta($hta)
    {
        $this->hta = $hta;

        return $this;
    }

    /**
     * Get hta
     *
     * @return boolean
     */
    public function getHta()
    {
        return $this->hta;
    }

    /**
     * Set htaDepuis
     *
     * @param string $htaDepuis
     *
     * @return Patient
     */
    public function setHtaDepuis($htaDepuis)
    {
        $this->hta_depuis = $htaDepuis;

        return $this;
    }

    /**
     * Get htaDepuis
     *
     * @return string
     */
    public function getHtaDepuis()
    {
        return $this->hta_depuis;
    }

    /**
     * Set htaComplications
     *
     * @param string $htaComplications
     *
     * @return Patient
     */
    public function setHtaComplications($htaComplications)
    {
        $this->hta_complications = $htaComplications;

        return $this;
    }

    /**
     * Get htaComplications
     *
     * @return string
     */
    public function getHtaComplications()
    {
        return $this->hta_complications;
    }

    /**
     * Set htaTraitement
     *
     * @param string $htaTraitement
     *
     * @return Patient
     */
    public function setHtaTraitement($htaTraitement)
    {
        $this->hta_traitement = $htaTraitement;

        return $this;
    }

    /**
     * Get htaTraitement
     *
     * @return string
     */
    public function getHtaTraitement()
    {
        return $this->hta_traitement;
    }

    /**
     * Set coronarien
     *
     * @param boolean $coronarien
     *
     * @return Patient
     */
    public function setCoronarien($coronarien)
    {
        $this->coronarien = $coronarien;

        return $this;
    }

    /**
     * Get coronarien
     *
     * @return boolean
     */
    public function getCoronarien()
    {
        return $this->coronarien;
    }

    /**
     * Set coronarienDepuis
     *
     * @param string $coronarienDepuis
     *
     * @return Patient
     */
    public function setCoronarienDepuis($coronarienDepuis)
    {
        $this->coronarien_depuis = $coronarienDepuis;

        return $this;
    }

    /**
     * Get coronarienDepuis
     *
     * @return string
     */
    public function getCoronarienDepuis()
    {
        return $this->coronarien_depuis;
    }

    /**
     * Set coronarienComplications
     *
     * @param string $coronarienComplications
     *
     * @return Patient
     */
    public function setCoronarienComplications($coronarienComplications)
    {
        $this->coronarien_complications = $coronarienComplications;

        return $this;
    }

    /**
     * Get coronarienComplications
     *
     * @return string
     */
    public function getCoronarienComplications()
    {
        return $this->coronarien_complications;
    }

    /**
     * Set coronarienTraitement
     *
     * @param string $coronarienTraitement
     *
     * @return Patient
     */
    public function setCoronarienTraitement($coronarienTraitement)
    {
        $this->coronarien_traitement = $coronarienTraitement;

        return $this;
    }

    /**
     * Get coronarienTraitement
     *
     * @return string
     */
    public function getCoronarienTraitement()
    {
        return $this->coronarien_traitement;
    }

    /**
     * Set coronarienEvolution
     *
     * @param string $coronarienEvolution
     *
     * @return Patient
     */
    public function setCoronarienEvolution($coronarienEvolution)
    {
        $this->coronarien_evolution = $coronarienEvolution;

        return $this;
    }

    /**
     * Get coronarienEvolution
     *
     * @return string
     */
    public function getCoronarienEvolution()
    {
        return $this->coronarien_evolution;
    }

    /**
     * Set bpco
     *
     * @param boolean $bpco
     *
     * @return Patient
     */
    public function setBpco($bpco)
    {
        $this->bpco = $bpco;

        return $this;
    }

    /**
     * Get bpco
     *
     * @return boolean
     */
    public function getBpco()
    {
        return $this->bpco;
    }

    /**
     * Set bpcoDepuis
     *
     * @param string $bpcoDepuis
     *
     * @return Patient
     */
    public function setBpcoDepuis($bpcoDepuis)
    {
        $this->bpco_depuis = $bpcoDepuis;

        return $this;
    }

    /**
     * Get bpcoDepuis
     *
     * @return string
     */
    public function getBpcoDepuis()
    {
        return $this->bpco_depuis;
    }

    /**
     * Set bpcoStade
     *
     * @param string $bpcoStade
     *
     * @return Patient
     */
    public function setBpcoStade($bpcoStade)
    {
        $this->bpco_stade = $bpcoStade;

        return $this;
    }

    /**
     * Get bpcoStade
     *
     * @return string
     */
    public function getBpcoStade()
    {
        return $this->bpco_stade;
    }

    /**
     * Set bpcoTraitement
     *
     * @param string $bpcoTraitement
     *
     * @return Patient
     */
    public function setBpcoTraitement($bpcoTraitement)
    {
        $this->bpco_traitement = $bpcoTraitement;

        return $this;
    }

    /**
     * Get bpcoTraitement
     *
     * @return string
     */
    public function getBpcoTraitement()
    {
        return $this->bpco_traitement;
    }

    /**
     * Set atcdAutres
     *
     * @param string $atcdAutres
     *
     * @return Patient
     */
    public function setAtcdAutres($atcdAutres)
    {
        $this->atcd_autres = $atcdAutres;

        return $this;
    }

    /**
     * Get atcdAutres
     *
     * @return string
     */
    public function getAtcdAutres()
    {
        return $this->atcd_autres;
    }

    /**
     * Set atcdChirurgicaux
     *
     * @param string $atcdChirurgicaux
     *
     * @return Patient
     */
    public function setAtcdChirurgicaux($atcdChirurgicaux)
    {
        $this->atcd_chirurgicaux = $atcdChirurgicaux;

        return $this;
    }

    /**
     * Get atcdChirurgicaux
     *
     * @return string
     */
    public function getAtcdChirurgicaux()
    {
        return $this->atcd_chirurgicaux;
    }

    /**
     * Set atcdTransfusionnel
     *
     * @param boolean $atcdTransfusionnel
     *
     * @return Patient
     */
    public function setAtcdTransfusionnel($atcdTransfusionnel)
    {
        $this->atcd_transfusionnel = $atcdTransfusionnel;

        return $this;
    }

    /**
     * Get atcdTransfusionnel
     *
     * @return boolean
     */
    public function getAtcdTransfusionnel()
    {
        return $this->atcd_transfusionnel;
    }

    /**
     * Set raiAtcdTransfusionnel
     *
     * @param string $raiAtcdTransfusionnel
     *
     * @return Patient
     */
    public function setRaiAtcdTransfusionnel($raiAtcdTransfusionnel)
    {
        $this->rai_atcd_transfusionnel = $raiAtcdTransfusionnel;

        return $this;
    }

    /**
     * Get raiAtcdTransfusionnel
     *
     * @return string
     */
    public function getRaiAtcdTransfusionnel()
    {
        return $this->rai_atcd_transfusionnel;
    }

    /**
     * Set allergies
     *
     * @param boolean $allergies
     *
     * @return Patient
     */
    public function setAllergies($allergies)
    {
        $this->allergies = $allergies;

        return $this;
    }

    /**
     * Get allergies
     *
     * @return boolean
     */
    public function getAllergies()
    {
        return $this->allergies;
    }

    /**
     * Set gravite
     *
     * @param boolean $gravite
     *
     * @return Patient
     */
    public function setGravite($gravite)
    {
        $this->gravite = $gravite;

        return $this;
    }

    /**
     * Get gravite
     *
     * @return boolean
     */
    public function getGravite()
    {
        return $this->gravite;
    }

    /**
     * Set tabac
     *
     * @param boolean $tabac
     *
     * @return Patient
     */
    public function setTabac($tabac)
    {
        $this->tabac = $tabac;

        return $this;
    }

    /**
     * Get tabac
     *
     * @return boolean
     */
    public function getTabac()
    {
        return $this->tabac;
    }

    /**
     * Set pA
     *
     * @param boolean $pA
     *
     * @return Patient
     */
    public function setPA($pA)
    {
        $this->p_a = $pA;

        return $this;
    }

    /**
     * Get pA
     *
     * @return boolean
     */
    public function getPA()
    {
        return $this->p_a;
    }

    /**
     * Set alcool
     *
     * @param boolean $alcool
     *
     * @return Patient
     */
    public function setAlcool($alcool)
    {
        $this->alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool
     *
     * @return boolean
     */
    public function getAlcool()
    {
        return $this->alcool;
    }

    /**
     * Set poids
     *
     * @param string $poids
     *
     * @return Patient
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set taille
     *
     * @param string $taille
     *
     * @return Patient
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string
     */
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set fc
     *
     * @param string $fc
     *
     * @return Patient
     */
    public function setFc($fc)
    {
        $this->fc = $fc;

        return $this;
    }

    /**
     * Get fc
     *
     * @return string
     */
    public function getFc()
    {
        return $this->fc;
    }

    /**
     * Set ta
     *
     * @param string $ta
     *
     * @return Patient
     */
    public function setTa($ta)
    {
        $this->ta = $ta;

        return $this;
    }

    /**
     * Get ta
     *
     * @return string
     */
    public function getTa()
    {
        return $this->ta;
    }

    /**
     * Set spo2
     *
     * @param string $spo2
     *
     * @return Patient
     */
    public function setSpo2($spo2)
    {
        $this->spo2 = $spo2;

        return $this;
    }

    /**
     * Get spo2
     *
     * @return string
     */
    public function getSpo2()
    {
        return $this->spo2;
    }

    /**
     * Set dyspneDEffort
     *
     * @param boolean $dyspneDEffort
     *
     * @return Patient
     */
    public function setDyspneDEffort($dyspneDEffort)
    {
        $this->dyspne_d_effort = $dyspneDEffort;

        return $this;
    }

    /**
     * Get dyspneDEffort
     *
     * @return boolean
     */
    public function getDyspneDEffort()
    {
        return $this->dyspne_d_effort;
    }

    /**
     * Set orthopnee
     *
     * @param boolean $orthopnee
     *
     * @return Patient
     */
    public function setOrthopnee($orthopnee)
    {
        $this->orthopnee = $orthopnee;

        return $this;
    }

    /**
     * Get orthopnee
     *
     * @return boolean
     */
    public function getOrthopnee()
    {
        return $this->orthopnee;
    }

    /**
     * Set dyspneeParoxysthiqueNocturne
     *
     * @param boolean $dyspneeParoxysthiqueNocturne
     *
     * @return Patient
     */
    public function setDyspneeParoxysthiqueNocturne($dyspneeParoxysthiqueNocturne)
    {
        $this->dyspnee_paroxysthique_nocturne = $dyspneeParoxysthiqueNocturne;

        return $this;
    }

    /**
     * Get dyspneeParoxysthiqueNocturne
     *
     * @return boolean
     */
    public function getDyspneeParoxysthiqueNocturne()
    {
        return $this->dyspnee_paroxysthique_nocturne;
    }

    /**
     * Set angor
     *
     * @param boolean $angor
     *
     * @return Patient
     */
    public function setAngor($angor)
    {
        $this->angor = $angor;

        return $this;
    }

    /**
     * Get angor
     *
     * @return boolean
     */
    public function getAngor()
    {
        return $this->angor;
    }

    /**
     * Set omi
     *
     * @param boolean $omi
     *
     * @return Patient
     */
    public function setOmi($omi)
    {
        $this->omi = $omi;

        return $this;
    }

    /**
     * Get omi
     *
     * @return boolean
     */
    public function getOmi()
    {
        return $this->omi;
    }

    /**
     * Set turjuscenceJugulaire
     *
     * @param boolean $turjuscenceJugulaire
     *
     * @return Patient
     */
    public function setTurjuscenceJugulaire($turjuscenceJugulaire)
    {
        $this->turjuscence_jugulaire = $turjuscenceJugulaire;

        return $this;
    }

    /**
     * Get turjuscenceJugulaire
     *
     * @return boolean
     */
    public function getTurjuscenceJugulaire()
    {
        return $this->turjuscence_jugulaire;
    }

    /**
     * Set ascite
     *
     * @param boolean $ascite
     *
     * @return Patient
     */
    public function setAscite($ascite)
    {
        $this->ascite = $ascite;

        return $this;
    }

    /**
     * Get ascite
     *
     * @return boolean
     */
    public function getAscite()
    {
        return $this->ascite;
    }

    /**
     * Set varices
     *
     * @param boolean $varices
     *
     * @return Patient
     */
    public function setVarices($varices)
    {
        $this->varices = $varices;

        return $this;
    }

    /**
     * Get varices
     *
     * @return boolean
     */
    public function getVarices()
    {
        return $this->varices;
    }

    /**
     * Set auscultationCardiaque
     *
     * @param boolean $auscultationCardiaque
     *
     * @return Patient
     */
    public function setAuscultationCardiaque($auscultationCardiaque)
    {
        $this->auscultation_cardiaque = $auscultationCardiaque;

        return $this;
    }

    /**
     * Get auscultationCardiaque
     *
     * @return boolean
     */
    public function getAuscultationCardiaque()
    {
        return $this->auscultation_cardiaque;
    }

    /**
     * Set auscultationPulmonaire
     *
     * @param boolean $auscultationPulmonaire
     *
     * @return Patient
     */
    public function setAuscultationPulmonaire($auscultationPulmonaire)
    {
        $this->auscultation_pulmonaire = $auscultationPulmonaire;

        return $this;
    }

    /**
     * Get auscultationPulmonaire
     *
     * @return boolean
     */
    public function getAuscultationPulmonaire()
    {
        return $this->auscultation_pulmonaire;
    }

    /**
     * Set autresInterrogationExamen
     *
     * @param boolean $autresInterrogationExamen
     *
     * @return Patient
     */
    public function setAutresInterrogationExamen($autresInterrogationExamen)
    {
        $this->autres_interrogation_examen = $autresInterrogationExamen;

        return $this;
    }

    /**
     * Get autresInterrogationExamen
     *
     * @return boolean
     */
    public function getAutresInterrogationExamen()
    {
        return $this->autres_interrogation_examen;
    }

    /**
     * Set mallampati
     *
     * @param string $mallampati
     *
     * @return Patient
     */
    public function setMallampati($mallampati)
    {
        $this->mallampati = $mallampati;

        return $this;
    }

    /**
     * Get mallampati
     *
     * @return string
     */
    public function getMallampati()
    {
        return $this->mallampati;
    }

    /**
     * Set ob
     *
     * @param string $ob
     *
     * @return Patient
     */
    public function setOb($ob)
    {
        $this->ob = $ob;

        return $this;
    }

    /**
     * Get ob
     *
     * @return string
     */
    public function getOb()
    {
        return $this->ob;
    }

    /**
     * Set dtm
     *
     * @param string $dtm
     *
     * @return Patient
     */
    public function setDtm($dtm)
    {
        $this->dtm = $dtm;

        return $this;
    }

    /**
     * Get dtm
     *
     * @return string
     */
    public function getDtm()
    {
        return $this->dtm;
    }

    /**
     * Set rachis
     *
     * @param string $rachis
     *
     * @return Patient
     */
    public function setRachis($rachis)
    {
        $this->rachis = $rachis;

        return $this;
    }

    /**
     * Get rachis
     *
     * @return string
     */
    public function getRachis()
    {
        return $this->rachis;
    }

    /**
     * Set sousInterrogatoirAutres
     *
     * @param string $sousInterrogatoirAutres
     *
     * @return Patient
     */
    public function setSousInterrogatoirAutres($sousInterrogatoirAutres)
    {
        $this->sous_interrogatoir_autres = $sousInterrogatoirAutres;

        return $this;
    }

    /**
     * Get sousInterrogatoirAutres
     *
     * @return string
     */
    public function getSousInterrogatoirAutres()
    {
        return $this->sous_interrogatoir_autres;
    }

    /**
     * Set asa
     *
     * @param string $asa
     *
     * @return Patient
     */
    public function setAsa($asa)
    {
        $this->asa = $asa;

        return $this;
    }

    /**
     * Get asa
     *
     * @return string
     */
    public function getAsa()
    {
        return $this->asa;
    }

    /**
     * Set nyh
     *
     * @param string $nyh
     *
     * @return Patient
     */
    public function setNyh($nyh)
    {
        $this->nyh = $nyh;

        return $this;
    }

    /**
     * Get nyh
     *
     * @return string
     */
    public function getNyh()
    {
        return $this->nyh;
    }

    /**
     * Set lee
     *
     * @param string $lee
     *
     * @return Patient
     */
    public function setLee($lee)
    {
        $this->lee = $lee;

        return $this;
    }

    /**
     * Get lee
     *
     * @return string
     */
    public function getLee()
    {
        return $this->lee;
    }

    /**
     * Set terrain
     *
     * @param string $terrain
     *
     * @return Patient
     */
    public function setTerrain($terrain)
    {
        $this->terrain = $terrain;

        return $this;
    }

    /**
     * Get terrain
     *
     * @return string
     */
    public function getTerrain()
    {
        return $this->terrain;
    }

    /**
     * Set ecg
     *
     * @param string $ecg
     *
     * @return Patient
     */
    public function setEcg($ecg)
    {
        $this->ecg = $ecg;

        return $this;
    }

    /**
     * Get ecg
     *
     * @return string
     */
    public function getEcg()
    {
        return $this->ecg;
    }

    /**
     * Set rxThorax
     *
     * @param string $rxThorax
     *
     * @return Patient
     */
    public function setRxThorax($rxThorax)
    {
        $this->rx_thorax = $rxThorax;

        return $this;
    }

    /**
     * Get rxThorax
     *
     * @return string
     */
    public function getRxThorax()
    {
        return $this->rx_thorax;
    }

    /**
     * Set echoCoeur
     *
     * @param string $echoCoeur
     *
     * @return Patient
     */
    public function setEchoCoeur($echoCoeur)
    {
        $this->echo_coeur = $echoCoeur;

        return $this;
    }

    /**
     * Get echoCoeur
     *
     * @return string
     */
    public function getEchoCoeur()
    {
        return $this->echo_coeur;
    }

    /**
     * Set autresExamen
     *
     * @param string $autresExamen
     *
     * @return Patient
     */
    public function setAutresExamen($autresExamen)
    {
        $this->autres_examen = $autresExamen;

        return $this;
    }

    /**
     * Get autresExamen
     *
     * @return string
     */
    public function getAutresExamen()
    {
        return $this->autres_examen;
    }

    /**
     * Set avisSpecialise
     *
     * @param string $avisSpecialise
     *
     * @return Patient
     */
    public function setAvisSpecialise($avisSpecialise)
    {
        $this->avis_specialise = $avisSpecialise;

        return $this;
    }

    /**
     * Get avisSpecialise
     *
     * @return string
     */
    public function getAvisSpecialise()
    {
        return $this->avis_specialise;
    }

    /**
     * Set recommandations
     *
     * @param string $recommandations
     *
     * @return Patient
     */
    public function setRecommandations($recommandations)
    {
        $this->recommandations = $recommandations;

        return $this;
    }

    /**
     * Get recommandations
     *
     * @return string
     */
    public function getRecommandations()
    {
        return $this->recommandations;
    }

    /**
     * Set techniqueAnesthesique
     *
     * @param string $techniqueAnesthesique
     *
     * @return Patient
     */
    public function setTechniqueAnesthesique($techniqueAnesthesique)
    {
        $this->technique_anesthesique = $techniqueAnesthesique;

        return $this;
    }

    /**
     * Get techniqueAnesthesique
     *
     * @return string
     */
    public function getTechniqueAnesthesique()
    {
        return $this->technique_anesthesique;
    }

    /**
     * Set protocoleAnesthesique
     *
     * @param string $protocoleAnesthesique
     *
     * @return Patient
     */
    public function setProtocoleAnesthesique($protocoleAnesthesique)
    {
        $this->protocole_anesthesique = $protocoleAnesthesique;

        return $this;
    }

    /**
     * Get protocoleAnesthesique
     *
     * @return string
     */
    public function getProtocoleAnesthesique()
    {
        return $this->protocole_anesthesique;
    }

    /**
     * Set protocoleAnalgestique
     *
     * @param string $protocoleAnalgestique
     *
     * @return Patient
     */
    public function setProtocoleAnalgestique($protocoleAnalgestique)
    {
        $this->protocole_analgestique = $protocoleAnalgestique;

        return $this;
    }

    /**
     * Get protocoleAnalgestique
     *
     * @return string
     */
    public function getProtocoleAnalgestique()
    {
        return $this->protocole_analgestique;
    }

    /**
     * Set epargneSanguine
     *
     * @param string $epargneSanguine
     *
     * @return Patient
     */
    public function setEpargneSanguine($epargneSanguine)
    {
        $this->epargne_sanguine = $epargneSanguine;

        return $this;
    }

    /**
     * Get epargneSanguine
     *
     * @return string
     */
    public function getEpargneSanguine()
    {
        return $this->epargne_sanguine;
    }

    /**
     * Set premedication
     *
     * @param string $premedication
     *
     * @return Patient
     */
    public function setPremedication($premedication)
    {
        $this->premedication = $premedication;

        return $this;
    }

    /**
     * Get premedication
     *
     * @return string
     */
    public function getPremedication()
    {
        return $this->premedication;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->examens = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add examen
     *
     * @param \App\PatientBundle\Entity\Examen $examen
     *
     * @return Patient
     */
    public function addExamen(\App\PatientBundle\Entity\Examen $examen)
    {
        $examen->setPatient($this) ;
        $this->examens[] = $examen;

        return $this;
    }

    /**
     * Remove examen
     *
     * @param \App\PatientBundle\Entity\Examen $examen
     */
    public function removeExamen(\App\PatientBundle\Entity\Examen $examen)
    {
        $this->examens->removeElement($examen);
    }

    /**
     * Get examens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExamens()
    {
        return $this->examens;
    }
}
