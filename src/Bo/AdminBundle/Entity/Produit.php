<?php

namespace Bo\AdminBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity(repositoryClass="Bo\AdminBundle\Entity\ProduitRepository")
 */
class Produit
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="isDisponible", type="boolean", nullable = true)
     */
    private $isDisponible = false;
    
    /**
     * @var string
     *
     * @ORM\Column(name="fileImg", type="text", length=255, nullable=true)
     */
    private $fileImg;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;
    
     /**
     * @var datetime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;
    
    
    

      /**
     * @ORM\ManyToOne(targetEntity="ProduitCategorie", inversedBy="produits")
     * @ORM\JoinColumn(name="categorie_id",referencedColumnName="id")
     */
    protected $produitCategorie;
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
     * @return Produit
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
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Produit
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set produitCategorie
     *
     * @param \Bo\AdminBundle\Entity\ProduitCategorie $produitCategorie
     * @return Produit
     */
    public function setProduitCategorie(\Bo\AdminBundle\Entity\ProduitCategorie $produitCategorie = null)
    {
        $this->produitCategorie = $produitCategorie;

        return $this;
    }

    /**
     * Get produitCategorie
     *
     * @return \Bo\AdminBundle\Entity\ProduitCategorie 
     */
    public function getProduitCategorie()
    {
        return $this->produitCategorie;
    }

    /**
     * Set isDisponible
     *
     * @param boolean $isDisponible
     * @return Produit
     */
    public function setIsDisponible($isDisponible)
    {
        $this->isDisponible = $isDisponible;

        return $this;
    }

    /**
     * Get isDisponible
     *
     * @return boolean 
     */
    public function getIsDisponible()
    {
        return $this->isDisponible;
    }

    /**
     * Set fileImg
     *
     * @param string $fileImg
     * @return Produit
     */
    public function setFileimg($fileImg)
    {
        $this->fileImg = $fileImg;

        return $this;
    }

    /**
     * Get fileImg
     *
     * @return string 
     */
    public function getFileimg()
    {
        return $this->fileImg;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Produit
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Produit
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    
    function __construct() {
        $this->created = new \DateTime();
        $this->updated = new \DateTime();
    }
    
    
     public function __toString() {
        return $this->description;
    }

    
    /**
     * @Assert\File(maxSize="6000000")
     */
    protected $fileImgUpload;

    public function getFileImgUpload()
    {
        return $this->fileImgUpload;
    }

    public function setFileImgUpload($fileImgUpload)
    {
        $this->fileImgUpload = $fileImgUpload;
    }

    public function getAbsoluteFileImg()
    {
        return null === $this->fileImg ? null : $this->getUploadRootDir() . '/' . $this->fileImg;
    }

    public function getWebFileImg()
    {
        return null === $this->fileImg ? null : $this->getUploadDir() . '/' . $this->fileImg;
    }

    protected function getUploadRootDir()
    {
        return __DIR__ . '/../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir()
    {
        return 'uploads';
    }

    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
        if(null !== $this->fileImgUpload) {
            $this->fileImg = 'file_img_' . sha1(uniqid(mt_rand(), true)) . '.' . $this->fileImgUpload->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function uploadFiles()
    {
        if(null !== $this->fileImgUpload) {
            $this->fileImgUpload->move($this->getUploadRootDir(), $this->fileImg);

            unset($this->fileImgUpload);
        }
    }

    /**
     * @ORM\PrePersist()
     */
    public function setCreatedValue()
    {
        $this->created = new \DateTime();
    }
    
    /**
     * @ORM\PreUpdate()
     */
    public function setUpdatedValue()
    {
        $this->updated = new \DateTime();
    }
}
