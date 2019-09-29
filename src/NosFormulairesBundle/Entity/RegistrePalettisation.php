<?php

namespace NosFormulairesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegistrePalettisation
 *
 * @ORM\Table(name="registre_palettisation", indexes={@ORM\Index(name="FK5qbslk1ioudummgell60ha6", columns={"id_campagne"}), @ORM\Index(name="FK5qbslk1ioudummgell60ha6hhgfd", columns={"code_lot"})})
 * @ORM\Entity
 */
class RegistrePalettisation
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="n_palette", type="integer", nullable=false)
     */
    private $nPalette;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbre_cartons", type="integer", nullable=false)
     */
    private $nbreCartons;

    /**
     * @var integer
     *
     * @ORM\Column(name="total_cartons", type="integer", nullable=false)
     */
    private $totalCartons;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure_entree_ch_froide", type="integer", nullable=false)
     */
    private $heureEntreeChFroide;

    /**
     * @var integer
     *
     * @ORM\Column(name="heure_sortie_ch_froide", type="integer", nullable=false)
     */
    private $heureSortieChFroide;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=100, nullable=false)
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="parcking_liste", type="string", length=100, nullable=false)
     */
    private $parckingListe;

    /**
     * @var string
     *
     * @ORM\Column(name="paragraphe", type="string", length=100, nullable=false)
     */
    private $paragraphe;

    /**
     * @var string
     *
     * @ORM\Column(name="produit_calibre", type="string", length=100, nullable=false)
     */
    private $produitCalibre;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer", nullable=true)
     */
    private $statut = '0';

    /**
     * @var \Lot
     *
     * @ORM\ManyToOne(targetEntity="Lot")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_lot", referencedColumnName="identifiant")
     * })
     */
    private $codeLot;

    /**
     * @var \Campagne
     *
     * @ORM\ManyToOne(targetEntity="Campagne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_campagne", referencedColumnName="identifiant")
     * })
     */
    private $idCampagne;



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
     * @return RegistrePalettisation
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
     * Set nPalette
     *
     * @param integer $nPalette
     *
     * @return RegistrePalettisation
     */
    public function setNPalette($nPalette)
    {
        $this->nPalette = $nPalette;

        return $this;
    }

    /**
     * Get nPalette
     *
     * @return integer
     */
    public function getNPalette()
    {
        return $this->nPalette;
    }

    /**
     * Set nbreCartons
     *
     * @param integer $nbreCartons
     *
     * @return RegistrePalettisation
     */
    public function setNbreCartons($nbreCartons)
    {
        $this->nbreCartons = $nbreCartons;

        return $this;
    }

    /**
     * Get nbreCartons
     *
     * @return integer
     */
    public function getNbreCartons()
    {
        return $this->nbreCartons;
    }

    /**
     * Set totalCartons
     *
     * @param integer $totalCartons
     *
     * @return RegistrePalettisation
     */
    public function setTotalCartons($totalCartons)
    {
        $this->totalCartons = $totalCartons;

        return $this;
    }

    /**
     * Get totalCartons
     *
     * @return integer
     */
    public function getTotalCartons()
    {
        return $this->totalCartons;
    }

    /**
     * Set heureEntreeChFroide
     *
     * @param integer $heureEntreeChFroide
     *
     * @return RegistrePalettisation
     */
    public function setHeureEntreeChFroide($heureEntreeChFroide)
    {
        $this->heureEntreeChFroide = $heureEntreeChFroide;

        return $this;
    }

    /**
     * Get heureEntreeChFroide
     *
     * @return integer
     */
    public function getHeureEntreeChFroide()
    {
        return $this->heureEntreeChFroide;
    }

    /**
     * Set heureSortieChFroide
     *
     * @param integer $heureSortieChFroide
     *
     * @return RegistrePalettisation
     */
    public function setHeureSortieChFroide($heureSortieChFroide)
    {
        $this->heureSortieChFroide = $heureSortieChFroide;

        return $this;
    }

    /**
     * Get heureSortieChFroide
     *
     * @return integer
     */
    public function getHeureSortieChFroide()
    {
        return $this->heureSortieChFroide;
    }

    /**
     * Set destinataire
     *
     * @param string $destinataire
     *
     * @return RegistrePalettisation
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set parckingListe
     *
     * @param string $parckingListe
     *
     * @return RegistrePalettisation
     */
    public function setParckingListe($parckingListe)
    {
        $this->parckingListe = $parckingListe;

        return $this;
    }

    /**
     * Get parckingListe
     *
     * @return string
     */
    public function getParckingListe()
    {
        return $this->parckingListe;
    }

    /**
     * Set paragraphe
     *
     * @param string $paragraphe
     *
     * @return RegistrePalettisation
     */
    public function setParagraphe($paragraphe)
    {
        $this->paragraphe = $paragraphe;

        return $this;
    }

    /**
     * Get paragraphe
     *
     * @return string
     */
    public function getParagraphe()
    {
        return $this->paragraphe;
    }

    /**
     * Set produitCalibre
     *
     * @param string $produitCalibre
     *
     * @return RegistrePalettisation
     */
    public function setProduitCalibre($produitCalibre)
    {
        $this->produitCalibre = $produitCalibre;

        return $this;
    }

    /**
     * Get produitCalibre
     *
     * @return string
     */
    public function getProduitCalibre()
    {
        return $this->produitCalibre;
    }

    /**
     * Set codeLot
     *
     * @param \NosFormulairesBundle\Entity\Lot $codeLot
     *
     * @return RegistrePalettisation
     */
    public function setCodeLot(\NosFormulairesBundle\Entity\Lot $codeLot = null)
    {
        $this->codeLot = $codeLot;

        return $this;
    }

    /**
     * Get codeLot
     *
     * @return \NosFormulairesBundle\Entity\Lot
     */
    public function getCodeLot()
    {
        return $this->codeLot;
    }

    /**
     * Set idCampagne
     *
     * @param \NosFormulairesBundle\Entity\Campagne $idCampagne
     *
     * @return RegistrePalettisation
     */
    public function setIdCampagne(\NosFormulairesBundle\Entity\Campagne $idCampagne = null)
    {
        $this->idCampagne = $idCampagne;

        return $this;
    }

    /**
     * Get idCampagne
     *
     * @return \NosFormulairesBundle\Entity\Campagne
     */
    public function getIdCampagne()
    {
        return $this->idCampagne;
    }

     /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return RegistrePalettisation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return integer
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
