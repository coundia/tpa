<?php

namespace TpaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheExportation
 *
 * @ORM\Table(name="fiche_exportation", indexes={@ORM\Index(name="FK_F3E43E25A255zza", columns={"id_producteur"}), @ORM\Index(name="FK_F3E43E25A2bff47", columns={"id_campage"}), @ORM\Index(name="FK_F3E43E25A25dd58d4", columns={"id_palettisation"})})
 * @ORM\Entity
 */
class FicheExportation
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
     * @var integer
     *
     * @ORM\Column(name="numero_exporation", type="integer", nullable=false)
     */
    private $numeroExporation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_exportation", type="datetime", nullable=false)
     */
    private $dateExportation;

    /**
     * @var string
     *
     * @ORM\Column(name="moyen_utilise", type="string", length=75, nullable=false)
     */
    private $moyenUtilise;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_exportation", type="string", length=100, nullable=false)
     */
    private $paysExportation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_compagnie", type="string", length=200, nullable=false)
     */
    private $nomCompagnie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_recepteur", type="string", length=100, nullable=true)
     */
    private $nomRecepteur;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=250, nullable=true)
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reception", type="datetime", nullable=true)
     */
    private $dateReception;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer", nullable=false)
     */
    private $statut = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="variete", type="string", length=50, nullable=false)
     */
    private $variete;

     /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=250, nullable=false)
     */
    private $photo;

    /**
     * @var \Producteur
     *
     * @ORM\ManyToOne(targetEntity="Producteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_producteur", referencedColumnName="id")
     * })
     */
    private $idProducteur;

    /**
     * @var \RegistrePalettisation
     *
     * @ORM\ManyToOne(targetEntity="RegistrePalettisation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_palettisation", referencedColumnName="id")
     * })
     */
    private $idPalettisation;

    /**
     * @var \Campagne
     *
     * @ORM\ManyToOne(targetEntity="Campagne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_campage", referencedColumnName="identifiant")
     * })
     */
    private $idCampage;



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
     * Set numeroExporation
     *
     * @param integer $numeroExporation
     *
     * @return FicheExportation
     */
    public function setNumeroExporation($numeroExporation)
    {
        $this->numeroExporation = $numeroExporation;

        return $this;
    }

    /**
     * Get numeroExporation
     *
     * @return integer
     */
    public function getNumeroExporation()
    {
        return $this->numeroExporation;
    }

    /**
     * Set dateExportation
     *
     * @param \DateTime $dateExportation
     *
     * @return FicheExportation
     */
    public function setDateExportation($dateExportation)
    {
        $this->dateExportation = $dateExportation;

        return $this;
    }

    /**
     * Get dateExportation
     *
     * @return \DateTime
     */
    public function getDateExportation()
    {
        return $this->dateExportation;
    }

    /**
     * Set moyenUtilise
     *
     * @param string $moyenUtilise
     *
     * @return FicheExportation
     */
    public function setMoyenUtilise($moyenUtilise)
    {
        $this->moyenUtilise = $moyenUtilise;

        return $this;
    }

    /**
     * Get moyenUtilise
     *
     * @return string
     */
    public function getMoyenUtilise()
    {
        return $this->moyenUtilise;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return FicheExportation
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return FicheExportation
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set paysExportation
     *
     * @param string $paysExportation
     *
     * @return FicheExportation
     */
    public function setPaysExportation($paysExportation)
    {
        $this->paysExportation = $paysExportation;

        return $this;
    }

    /**
     * Get paysExportation
     *
     * @return string
     */
    public function getPaysExportation()
    {
        return $this->paysExportation;
    }

    /**
     * Set nomCompagnie
     *
     * @param string $nomCompagnie
     *
     * @return FicheExportation
     */
    public function setNomCompagnie($nomCompagnie)
    {
        $this->nomCompagnie = $nomCompagnie;

        return $this;
    }

    /**
     * Get nomCompagnie
     *
     * @return string
     */
    public function getNomCompagnie()
    {
        return $this->nomCompagnie;
    }

    /**
     * Set nomRecepteur
     *
     * @param string $nomRecepteur
     *
     * @return FicheExportation
     */
    public function setNomRecepteur($nomRecepteur)
    {
        $this->nomRecepteur = $nomRecepteur;

        return $this;
    }

    /**
     * Get nomRecepteur
     *
     * @return string
     */
    public function getNomRecepteur()
    {
        return $this->nomRecepteur;
    }

    /**
     * Set dateReception
     *
     * @param \DateTime $dateReception
     *
     * @return FicheExportation
     */
    public function setDateReception($dateReception)
    {
        $this->dateReception = $dateReception;

        return $this;
    }

    /**
     * Get dateReception
     *
     * @return \DateTime
     */
    public function getDateReception()
    {
        return $this->dateReception;
    }

    /**
     * Set statut
     *
     * @param integer $statut
     *
     * @return FicheExportation
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

    /**
     * Set variete
     *
     * @param string $variete
     *
     * @return FicheExportation
     */
    public function setVariete($variete)
    {
        $this->variete = $variete;

        return $this;
    }

    /**
     * Get variete
     *
     * @return string
     */
    public function getVariete()
    {
        return $this->variete;
    }

    /**
     * Set idProducteur
     *
     * @param \TpaBundle\Entity\Producteur $idProducteur
     *
     * @return FicheExportation
     */
    public function setIdProducteur(\TpaBundle\Entity\Producteur $idProducteur = null)
    {
        $this->idProducteur = $idProducteur;

        return $this;
    }

    /**
     * Get idProducteur
     *
     * @return \TpaBundle\Entity\Producteur
     */
    public function getIdProducteur()
    {
        return $this->idProducteur;
    }

    /**
     * Set idPalettisation
     *
     * @param \TpaBundle\Entity\RegistrePalettisation $idPalettisation
     *
     * @return FicheExportation
     */
    public function setIdPalettisation(\TpaBundle\Entity\RegistrePalettisation $idPalettisation = null)
    {
        $this->idPalettisation = $idPalettisation;

        return $this;
    }

    /**
     * Get idPalettisation
     *
     * @return \TpaBundle\Entity\RegistrePalettisation
     */
    public function getIdPalettisation()
    {
        return $this->idPalettisation;
    }

    /**
     * Set idCampage
     *
     * @param \TpaBundle\Entity\Campagne $idCampage
     *
     * @return FicheExportation
     */
    public function setIdCampage(\TpaBundle\Entity\Campagne $idCampage = null)
    {
        $this->idCampage = $idCampage;

        return $this;
    }

    /**
     * Get idCampage
     *
     * @return \TpaBundle\Entity\Campagne
     */
    public function getIdCampage()
    {
        return $this->idCampage;
    }
}
