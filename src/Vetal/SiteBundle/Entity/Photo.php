<?php

namespace Vetal\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetal\SiteBundle\Entity\Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity
 */
class Photo
{
    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $fileName
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=false)
     */
    private $fileName;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;


    /**
     * @var PhotoAlbum
     *
     * @ORM\ManyToOne(targetEntity="PhotoAlbum")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="photo_album_id", referencedColumnName="id")
     * })
     */
    private $photoAlbum;

    /**
     * @var Profile
     *
     * @ORM\ManyToOne(targetEntity="Profile")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="profile_id", referencedColumnName="id")
     * })
     */
    private $profile;



    /**
     * Get id
     *
     * @return bigint 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fileName
     *
     * @param string $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * Get fileName
     *
     * @return string 
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Set photoAlbum
     *
     * @param Vetal\SiteBundle\Entity\PhotoAlbum $photoAlbum
     */
    public function setPhotoAlbum(\Vetal\SiteBundle\Entity\PhotoAlbum $photoAlbum)
    {
        $this->photoAlbum = $photoAlbum;
    }

    /**
     * Get photoAlbum
     *
     * @return Vetal\SiteBundle\Entity\PhotoAlbum 
     */
    public function getPhotoAlbum()
    {
        return $this->photoAlbum;
    }

    /**
     * Set profile
     *
     * @param Vetal\SiteBundle\Entity\Profile $profile
     */
    public function setProfile(\Vetal\SiteBundle\Entity\Profile $profile)
    {
        $this->profile = $profile;
    }

    /**
     * Get profile
     *
     * @return Vetal\SiteBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }
}