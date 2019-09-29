<?php

namespace TpaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ExportationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('denomEntreprise')->add('prenoNomInspecteur')->add('dateInspection')->add('lieuInspection')->add('personneRencontre')->add('fonctionpersonneRencontre')->add('variete')->add('categorie')->add('qteDeclare')->add('nbColis')->add('typeTransport')->add('tailleEchantillon')->add('nbColiControle')->add('nbMangueControle')->add('registreReceptionMangue')->add('declarationSupp')->add('marqueColis')->add('conformiteColis')->add('numeroLot')->add('conformiteLot')->add('numeropalette')->add('conformitePalette')->add('maturite')->add('piqureMoucheFruit')->add('pourriturePendonculaire')->add('charanconNoyaux')->add('traceArthrocnose')->add('marquageNIMP15')->add('etatSanitaireGeneral')->add('commentaire');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TpaBundle\Entity\Exportation'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'tpabundle_exportation';
    }


}
