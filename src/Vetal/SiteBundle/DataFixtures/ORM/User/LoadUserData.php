<?php

namespace Vetal\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
//use Symfony\Component\DependencyInjection\ContainerAwareInterface;
//use Symfony\Component\DependencyInjection\ContainerInterface;
use Vetal\SiteBundle\Entity\User;
use Vetal\SiteBundle\Entity\Profile;

class LoadUserData implements FixtureInterface {//, ContainerAwareInterface {
//  private $container;
//
//  public function setContainer(ContainerInterface $container = null) {
//    $this->container = $container;
//  }

  public function load(ObjectManager $manager) {

    $user = new User();
    $user->setUsername('admin');
    $user->setPlainPassword('admin');
    $user->setEmail('admin@mail.ru');
    $user->setLastLogin(new \DateTime('now'));
    $user->setEnabled(true);
    $user->setRoles(array(User::ROLE_SUPER_ADMIN));
    $manager->persist($user);

    $profile = new Profile();
    $profile->setUser($user);
    $profile->setFirstName('Администратор');
    $manager->persist($profile);
    $manager->flush();

    for ($usCount = 1; $usCount <= 5; $usCount++) {
      $user = new User();
      $user->setUsername('admin' . $usCount);
      $user->setPlainPassword('admin' . $usCount);
      $user->setEmail('admin' . $usCount . '@mail.ru');
      $user->setLastLogin(new \DateTime('now'));
      $user->setEnabled(true);
      $user->setRoles(array(User::ROLE_ADMIN));
      $manager->persist($user);
      //$manager->flush();

      $profileA = new Profile();
      $profileA->setUser($user);
      $profileA->setFirstName('Администратор' . $usCount);
      $manager->persist($profileA);
      $manager->flush();

      for ($uCount = 1; $uCount <= 7; $uCount++) {
        //Save the user
        $user = new User();
        $user->setUsername('user' . $usCount . $uCount);

        $user->setPlainPassword('user' . $usCount . $uCount);

        //$encoder = $this->container->get('security.encoder_factory')->getEncoder($user);
        //$user->setPassword($encoder->encodePassword('user' . $uCount, $user->getSalt()));

        $user->setEmail('user' . $usCount . $uCount . '@mail.ru');
        $user->setLastLogin(new \DateTime('now'));
        $user->setEnabled(true);
        $user->setRoles(array(User::ROLE_DEFAULT));
        $manager->persist($user);
        $manager->flush();

        $profile = new Profile();
        $profile->setUser($user);
        $profile->setProfiles($profileA);
        $profile->setFirstName('Пользователь' . $usCount . $uCount);
        $manager->persist($profile);
        $manager->flush();
      }
    }

    //Associate a reference for other fixtures
    //$this->addReference('user-admin', $user);
  }

  /**
   * Get the order of this execution
   * 
   * @return int 
   */
  public function getOrder() {
    return 1;
  }

}