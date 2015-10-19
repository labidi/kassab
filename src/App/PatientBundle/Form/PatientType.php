<?php

namespace App\PatientBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PatientType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom',null,array('label'=>'Nom','attr' => array('placeholder'=>'Nom du patient')))
            ->add('prenom',null,array('label'=>'Prenom','attr' => array('placeholder'=>'Prenom du patient')))
            ->add('age',null,array('label'=>'Age','attr' => array('placeholder'=>'Age du patient')))
            ->add('num_dossier',null,array('label'=>'N° dossier','attr' => array('placeholder'=>'Numero du dossier')))
            ->add('diagnostic',null,array('attr' => array('placeholder'=>'Diagnostic')))
            ->add('intervention',null,array('attr' => array('placeholder'=>'Intervention')))
            ->add('service',null,array('attr' => array('placeholder'=>'Service')))
            ->add('chirurgien',null,array('attr' => array('placeholder'=>'Chirurgien')))
            ->add('date','date',array('attr' => array('class' => 'datepicker')))
            ->add('medecin_ar',null,array('label' => 'Médecin AR','attr' => array('placeholder'=>'Médecin AR')))
            ->add('diabete')
            ->add('diabete_depuis',null,array('label'=>'Depuis'))
            ->add('diabete_complications',null,array('label'=>'Complication'))
            ->add('diabete_traitement',null,array('label'=>'Traitement'))
            ->add('hta')
            ->add('hta_depuis',null,array('label'=>'Depuis'))
            ->add('hta_complications',null,array('label'=>'Complication'))
            ->add('hta_traitement',null,array('label'=>'Traitement'))
            ->add('coronarien')
            ->add('coronarien_depuis',null,array('label'=>'Depuis'))
            ->add('coronarien_complications',null,array('label'=>'Complication'))
            ->add('coronarien_traitement',null,array('label'=>'Traitement'))
            ->add('coronarien_evolution',null,array('label'=>'Evolution'))
            ->add('bpco')
            ->add('bpco_depuis',null,array('label'=>'Depuis'))
            ->add('bpco_stade',null,array('label'=>'Stade'))
            ->add('bpco_traitement',null,array('label'=>'Traitement'))
            ->add('atcd_autres',null,array('label'=>'Autres atcd médicaux'))
            ->add('atcd_chirurgicaux',null,array('label'=>' '))
            ->add('atcd_transfusionnel',null,array('label'=>' '))
            ->add('rai_atcd_transfusionnel',null,array('label'=>'RAI'))
            ->add('allergies')
            ->add('gravite')
            ->add('tabac')
            ->add('p_a',null,array('label'=>'P/A'))
            ->add('alcool')
            ->add('poids')
            ->add('taille')
            ->add('fc')
            ->add('ta')
            ->add('spo2')
            ->add('dyspne_d_effort',null,array('label'=>'Dyspnée d\'effort'))
            ->add('orthopnee',null,array('label'=>'Orthopnée'))
            ->add('dyspnee_paroxysthique_nocturne',null,array('label'=>'Dyspnée paroxysthique nocturne'))
            ->add('angor')
            ->add('omi')
            ->add('turjuscence_jugulaire')
            ->add('ascite')
            ->add('varices')
            ->add('auscultation_cardiaque',null,array('label'=>'Souffle cardiaque'))
            ->add('auscultation_pulmonaire',null,array('label'=>'Rales pulmonaires'))
            ->add('autres_interrogation_examen',null,array('label'=>'Autres signes d\'examen'))
            ->add('mallampati')
            ->add('ob')
            ->add('dtm')
            ->add('rachis')
            ->add('sous_interrogatoir_autres',null,array('label'=>'Autres'))
            ->add('asa')
            ->add('nyh')
            ->add('lee')
            ->add('terrain')
            ->add('ecg')
            ->add('rx_thorax')
            ->add('echo_coeur')
            ->add('autres_examen',null,array('label'=>'Autres'))
            ->add('avis_specialise',null,array('label'=>'Avis specialisé'))
            ->add('recommandations')
            ->add('technique_anesthesique')
            ->add('protocole_anesthesique')
            ->add('protocole_analgestique')
            ->add('epargne_sanguine')
            ->add('premedication',null,array('label'=>'Prémedication'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PatientBundle\Entity\Patient'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_patientbundle_patient';
    }
}
