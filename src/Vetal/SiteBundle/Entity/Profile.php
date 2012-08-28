<?php

namespace Vetal\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vetal\SiteBundle\Entity\Profile
 * 
 *
 * @ORM\Entity
 * @ORM\Table(name="profile")
 */
class Profile {

  /**
   * @var bigint $id
   *
   * @ORM\Column(name="id", type="integer", nullable=true)
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="IDENTITY")
   */
  private $id;

  /**
   * @ORM\OneToOne(targetEntity="User")
   * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
   */
  private $user;

  /**
   * @var string $firstName
   *
   * @ORM\Column(name="first_name", type="string", length=20, nullable=true)
   */
  private $firstName;

  /**
   * @var string $lastName
   *
   * @ORM\Column(name="last_name", type="string", length=20, nullable=true)
   */
  private $lastName;

  /**
   * @var string $patronymic
   *
   * @ORM\Column(name="patronymic", type="string", length=20, nullable=true)
   */
  private $patronymic;

  /**
   * @var string $photo
   *
   * @ORM\Column(name="photo", type="string", length=255, nullable=true)
   */
  private $photo;

  /**
   * @var boolean $gender
   *
   * @ORM\Column(name="gender", type="boolean", nullable=true)
   */
  private $gender;

  /**
   * @var date $birthday
   *
   * @ORM\Column(name="birthday", type="date", nullable=true)
   */
  private $birthday;

  /**
   * @var string $birthplace
   *
   * @ORM\Column(name="birthplace", type="string", length=255, nullable=true)
   */
  private $birthplace;

  /**
   * @var boolean $height
   *
   * @ORM\Column(name="height", type="boolean", nullable=true)
   */
  private $height;

  /**
   * @var boolean $weight
   *
   * @ORM\Column(name="weight", type="boolean", nullable=true)
   */
  private $weight;

  /**
   * @var boolean $hairColor
   *
   * @ORM\Column(name="hair_color", type="boolean", nullable=true)
   */
  private $hairColor;

  /**
   * @var boolean $eyeColor
   *
   * @ORM\Column(name="eye_color", type="boolean", nullable=true)
   */
  private $eyeColor;

  /**
   * @var boolean $maritalStatus
   *
   * @ORM\Column(name="marital_status", type="boolean", nullable=true)
   */
  private $maritalStatus;

  /**
   * @var boolean $children
   *
   * @ORM\Column(name="children", type="boolean", nullable=true)
   */
  private $children;

  /**
   * @var boolean $education
   *
   * @ORM\Column(name="education", type="boolean", nullable=true)
   */
  private $education;

  /**
   * @var string $specialty
   *
   * @ORM\Column(name="specialty", type="string", length=255, nullable=true)
   */
  private $specialty;

  /**
   * @var string $passport
   *
   * @ORM\Column(name="passport", type="string", length=255, nullable=true)
   */
  private $passport;

  /**
   * @var string $adress
   *
   * @ORM\Column(name="adress", type="string", length=255, nullable=true)
   */
  private $adress;

  /**
   * @var string $phoneNumber
   *
   * @ORM\Column(name="phone_number", type="string", length=20, nullable=true)
   */
  private $phoneNumber;

  /**
   * @var string $email
   *
   * @ORM\Column(name="email", type="string", length=30, nullable=true)
   */
  private $email;

  /**
   * @var boolean $icq
   *
   * @ORM\Column(name="icq", type="boolean", nullable=true)
   */
  private $icq;

  /**
   * @var string $skype
   *
   * @ORM\Column(name="skype", type="string", length=30, nullable=true)
   */
  private $skype;

  /**
   * @var text $description
   *
   * @ORM\Column(name="description", type="text", nullable=true)
   */
  private $description;

  /**
   * @var text $hobbies
   *
   * @ORM\Column(name="hobbies", type="text", nullable=true)
   */
  private $hobbies;

  /**
   * @var text $lifePriorities
   *
   * @ORM\Column(name="life_priorities", type="text", nullable=true)
   */
  private $lifePriorities;

  /**
   * @var text $manOfMyDreams
   *
   * @ORM\Column(name="man_of_my_dreams", type="text", nullable=true)
   */
  private $manOfMyDreams;

  /**
   * @var text $more
   *
   * @ORM\Column(name="more", type="text", nullable=true)
   */
  private $more;

  /**
   * @var boolean $status
   *
   * @ORM\Column(name="status", type="boolean", nullable=true)
   */
  private $status;

  /**
   * @ORM\ManyToOne(targetEntity="Profile")
   * @ORM\JoinColumn(name="id_profile", referencedColumnName="id")
   */
  private $profiles;

  /**
   * @var Category
   *
   * @ORM\ManyToOne(targetEntity="Category")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="category_id", referencedColumnName="id")
   * })
   */
  private $category;

  /**
   * @var Country
   *
   * @ORM\ManyToOne(targetEntity="Country")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="country_id", referencedColumnName="id")
   * })
   */
  private $country;

  /**
   * @var Nationality
   *
   * @ORM\ManyToOne(targetEntity="Nationality")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="nationality_id", referencedColumnName="id")
   * })
   */
  private $nationality;

  /**
   * @var Profession
   *
   * @ORM\ManyToOne(targetEntity="Profession")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="profession_id", referencedColumnName="id")
   * })
   */
  private $profession;

  /**
   * @var Religion
   *
   * @ORM\ManyToOne(targetEntity="Religion")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="religion_id", referencedColumnName="id")
   * })
   */
  private $religion;



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
     * Set firstName
     *
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set patronymic
     *
     * @param string $patronymic
     */
    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
    }

    /**
     * Get patronymic
     *
     * @return string 
     */
    public function getPatronymic()
    {
        return $this->patronymic;
    }

    /**
     * Set photo
     *
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
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
     * Set gender
     *
     * @param boolean $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * Get gender
     *
     * @return boolean 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set birthday
     *
     * @param date $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Get birthday
     *
     * @return date 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set birthplace
     *
     * @param string $birthplace
     */
    public function setBirthplace($birthplace)
    {
        $this->birthplace = $birthplace;
    }

    /**
     * Get birthplace
     *
     * @return string 
     */
    public function getBirthplace()
    {
        return $this->birthplace;
    }

    /**
     * Set height
     *
     * @param boolean $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * Get height
     *
     * @return boolean 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param boolean $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get weight
     *
     * @return boolean 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set hairColor
     *
     * @param boolean $hairColor
     */
    public function setHairColor($hairColor)
    {
        $this->hairColor = $hairColor;
    }

    /**
     * Get hairColor
     *
     * @return boolean 
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * Set eyeColor
     *
     * @param boolean $eyeColor
     */
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }

    /**
     * Get eyeColor
     *
     * @return boolean 
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    /**
     * Set maritalStatus
     *
     * @param boolean $maritalStatus
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
    }

    /**
     * Get maritalStatus
     *
     * @return boolean 
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set children
     *
     * @param boolean $children
     */
    public function setChildren($children)
    {
        $this->children = $children;
    }

    /**
     * Get children
     *
     * @return boolean 
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set education
     *
     * @param boolean $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }

    /**
     * Get education
     *
     * @return boolean 
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set specialty
     *
     * @param string $specialty
     */
    public function setSpecialty($specialty)
    {
        $this->specialty = $specialty;
    }

    /**
     * Get specialty
     *
     * @return string 
     */
    public function getSpecialty()
    {
        return $this->specialty;
    }

    /**
     * Set passport
     *
     * @param string $passport
     */
    public function setPassport($passport)
    {
        $this->passport = $passport;
    }

    /**
     * Get passport
     *
     * @return string 
     */
    public function getPassport()
    {
        return $this->passport;
    }

    /**
     * Set adress
     *
     * @param string $adress
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set icq
     *
     * @param boolean $icq
     */
    public function setIcq($icq)
    {
        $this->icq = $icq;
    }

    /**
     * Get icq
     *
     * @return boolean 
     */
    public function getIcq()
    {
        return $this->icq;
    }

    /**
     * Set skype
     *
     * @param string $skype
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;
    }

    /**
     * Get skype
     *
     * @return string 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set hobbies
     *
     * @param text $hobbies
     */
    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;
    }

    /**
     * Get hobbies
     *
     * @return text 
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * Set lifePriorities
     *
     * @param text $lifePriorities
     */
    public function setLifePriorities($lifePriorities)
    {
        $this->lifePriorities = $lifePriorities;
    }

    /**
     * Get lifePriorities
     *
     * @return text 
     */
    public function getLifePriorities()
    {
        return $this->lifePriorities;
    }

    /**
     * Set manOfMyDreams
     *
     * @param text $manOfMyDreams
     */
    public function setManOfMyDreams($manOfMyDreams)
    {
        $this->manOfMyDreams = $manOfMyDreams;
    }

    /**
     * Get manOfMyDreams
     *
     * @return text 
     */
    public function getManOfMyDreams()
    {
        return $this->manOfMyDreams;
    }

    /**
     * Set more
     *
     * @param text $more
     */
    public function setMore($more)
    {
        $this->more = $more;
    }

    /**
     * Get more
     *
     * @return text 
     */
    public function getMore()
    {
        return $this->more;
    }

    /**
     * Set status
     *
     * @param boolean $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set user
     *
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set category
     *
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Get category
     *
     * @return Category 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set country
     *
     * @param Country $country
     */
    public function setCountry(Country $country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set nationality
     *
     * @param Nationality $nationality
     */
    public function setNationality(Nationality $nationality)
    {
        $this->nationality = $nationality;
    }

    /**
     * Get nationality
     *
     * @return Nationality 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set profession
     *
     * @param Profession $profession
     */
    public function setProfession(Profession $profession)
    {
        $this->profession = $profession;
    }

    /**
     * Get profession
     *
     * @return Profession 
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set religion
     *
     * @param Religion $religion
     */
    public function setReligion(Religion $religion)
    {
        $this->religion = $religion;
    }

    /**
     * Get religion
     *
     * @return Religion 
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set profiles
     *
     * @param Profile $profiles
     */
    public function setProfiles(Profile $profiles)
    {
        $this->profiles = $profiles;
    }

    /**
     * Get profiles
     *
     * @return Profile 
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
}