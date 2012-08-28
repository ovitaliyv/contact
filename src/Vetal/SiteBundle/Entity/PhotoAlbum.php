<?php

namespace Vetal\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetal\SiteBundle\Entity\PhotoAlbum
 *
 * @ORM\Table(name="photo_album")
 * @ORM\Entity
 */
class PhotoAlbum
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
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

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