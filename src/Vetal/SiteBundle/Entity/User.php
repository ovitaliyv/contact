<?php

namespace Vetal\SiteBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Vetal\SiteBundle\Repository\UserRepository")
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser {

  const ROLE_ADMIN = 'ROLE_ADMIN';

  /**
   * @ORM\Id
   * @ORM\Column(name="id", type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;


/**
 * @ORM\OneToOne(targetEntity="Vetal\SiteBundle\Entity\Profile", mappedBy="user", cascade={"all"}, orphanRemoval=TRUE)
 */
  private $profile;

  public function __construct() {
    parent::__construct();
    // your own logic
  }

  /**
   * Get id
   *
   * @return integer 
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set profile
   *
   * @param Profile $profile
   */
  public function setProfile(Profile $profile) {
    $this->profile = $profile;
  }

  /**
   * Get profile
   *
   * @return Profile 
   */
  public function getProfile() {
    return $this->profile;
  }

  /**
   * Set users
   *
   * @param User $users
   */
  public function setUsers(User $users) {
    $this->users = $users;
  }

  /**
   * Get users
   *
   * @return User 
   */
  public function getUsers() {
    return $this->users;
  }

}