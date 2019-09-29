<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InspectionMangue
 *
 * @ORM\Table(name="inspection_mangue", indexes={@ORM\Index(name="IDX_6AC7E186A222637", columns={"conditionnement_id"})})
 * @ORM\Entity
 */
class InspectionMangue
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=20, nullable=true)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="referenceNotification", type="string", length=20, nullable=true)
     */
    private $referencenotification;

    /**
     * @var string
     *
     * @ORM\Column(name="exportateur", type="string", length=20, nullable=true)
     */
    private $exportateur;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroEnregistrement", type="string", length=20, nullable=true)
     */
    private $numeroenregistrement;

    /**
     * @var string
     *
     * @ORM\Column(name="motifNotification", type="string", length=50, nullable=true)
     */
    private $motifnotification;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="string", length=50, nullable=true)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="refCertifPhyto", type="string", length=50, nullable=true)
     */
    private $refcertifphyto;

    /**
     * @var string
     *
     * @ORM\Column(name="refFichInspection", type="string", length=50, nullable=true)
     */
    private $reffichinspection;

    /**
     * @var string
     *
     * @ORM\Column(name="equipeInvestig", type="string", length=50, nullable=true)
     */
    private $equipeinvestig;

    /**
     * @var integer
     *
     * @ORM\Column(name="conditionnement_id", type="integer", nullable=true)
     */
    private $conditionnementId;



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
     * @param string $date
     *
     * @return InspectionMangue
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set referencenotification
     *
     * @param string $referencenotification
     *
     * @return InspectionMangue
     */
    public function setReferencenotification($referencenotification)
    {
        $this->referencenotification = $referencenotification;

        return $this;
    }

    /**
     * Get referencenotification
     *
     * @return string
     */
    public function getReferencenotification()
    {
        return $this->referencenotification;
    }

    /**
     * Set exportateur
     *
     * @param string $exportateur
     *
     * @return InspectionMangue
     */
    public function setExportateur($exportateur)
    {
        $this->exportateur = $exportateur;

        return $this;
    }

    /**
     * Get exportateur
     *
     * @return string
     */
    public function getExportateur()
    {
        return $this->exportateur;
    }

    /**
     * Set numeroenregistrement
     *
     * @param string $numeroenregistrement
     *
     * @return InspectionMangue
     */
    public function setNumeroenregistrement($numeroenregistrement)
    {
        $this->numeroenregistrement = $numeroenregistrement;

        return $this;
    }

    /**
     * Get numeroenregistrement
     *
     * @return string
     */
    public function getNumeroenregistrement()
    {
        return $this->numeroenregistrement;
    }

    /**
     * Set motifnotification
     *
     * @param string $motifnotification
     *
     * @return InspectionMangue
     */
    public function setMotifnotification($motifnotification)
    {
        $this->motifnotification = $motifnotification;

        return $this;
    }

    /**
     * Get motifnotification
     *
     * @return string
     */
    public function getMotifnotification()
    {
        return $this->motifnotification;
    }

    /**
     * Set quantite
     *
     * @param string $quantite
     *
     * @return InspectionMangue
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set refcertifphyto
     *
     * @param string $refcertifphyto
     *
     * @return InspectionMangue
     */
    public function setRefcertifphyto($refcertifphyto)
    {
        $this->refcertifphyto = $refcertifphyto;

        return $this;
    }

    /**
     * Get refcertifphyto
     *
     * @return string
     */
    public function getRefcertifphyto()
    {
        return $this->refcertifphyto;
    }

    /**
     * Set reffichinspection
     *
     * @param string $reffichinspection
     *
     * @return InspectionMangue
     */
    public function setReffichinspection($reffichinspection)
    {
        $this->reffichinspection = $reffichinspection;

        return $this;
    }

    /**
     * Get reffichinspection
     *
     * @return string
     */
    public function getReffichinspection()
    {
        return $this->reffichinspection;
    }

    /**
     * Set equipeinvestig
     *
     * @param string $equipeinvestig
     *
     * @return InspectionMangue
     */
    public function setEquipeinvestig($equipeinvestig)
    {
        $this->equipeinvestig = $equipeinvestig;

        return $this;
    }

    /**
     * Get equipeinvestig
     *
     * @return string
     */
    public function getEquipeinvestig()
    {
        return $this->equipeinvestig;
    }

    /**
     * Set conditionnementId
     *
     * @param integer $conditionnementId
     *
     * @return InspectionMangue
     */
    public function setConditionnementId($conditionnementId)
    {
        $this->conditionnementId = $conditionnementId;

        return $this;
    }

    /**
     * Get conditionnementId
     *
     * @return integer
     */
    public function getConditionnementId()
    {
        return $this->conditionnementId;
    }
}
