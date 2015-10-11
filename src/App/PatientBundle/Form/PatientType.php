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
            ->add('nom')
            ->add('prenom')
            ->add('age')
            ->add('num_dossier')
            ->add('diagnostic')
            ->add('intervention')
            ->add('service')
            ->add('chirurgien')
            ->add('date')
            ->add('medecin_ar')
            ->add('diabete')
            ->add('diabete_depuis')
            ->add('diabete_complications')
            ->add('diabete_traitement')
            ->add('hta')
            ->add('hta_depuis')
            ->add('hta_complications')
            ->add('hta_traitement')
            ->add('coronarien')
            ->add('coronarien_depuis')
            ->add('coronarien_complications')
            ->add('coronarien_traitement')
            ->add('coronarien_evolution')
            ->add('bpco')
            ->add('bpco_depuis')
            ->add('bpco_stade')
            ->add('bpco_traitement')
            ->add('atcd_autres')
            ->add('atcd_chirurgicaux')
            ->add('atcd_transfusionnel')
            ->add('rai_atcd_transfusionnel')
            ->add('allergies')
            ->add('gravite')
            ->add('tabac')
            ->add('p_a')
            ->add('alcool')
            ->add('poids')
            ->add('taille')
            ->add('fc')
            ->add('ta')
            ->add('spo2')
            ->add('dyspne_d_effort')
            ->add('orthopnee')
            ->add('dyspnee_paroxysthique_nocturne')
            ->add('angor')
            ->add('omi')
            ->add('turjuscence_jugulaire')
            ->add('ascite')
            ->add('varices')
            ->add('auscultation_cardiaque')
            ->add('auscultation_pulmonaire')
            ->add('autres_interrogation_examen')
            ->add('mallampati')
            ->add('ob')
            ->add('dtm')
            ->add('rachis')
            ->add('sous_interrogatoir_autres')
            ->add('asa')
            ->add('nyh')
            ->add('lee')
            ->add('terrain')
            ->add('ecg')
            ->add('rx_thorax')
            ->add('echo_coeur')
            ->add('autres_examen')
            ->add('avis_specialise')
            ->add('recommandations')
            ->add('technique_anesthesique')
            ->add('protocole_anesthesique')
            ->add('protocole_analgestique')
            ->add('epargne_sanguine')
            ->add('premedication')
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
