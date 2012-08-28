<?php

namespace Vetal\SiteBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Vetal\SiteBundle\Entity\Category;

class LoadCategoryData implements FixtureInterface {

  public function load(ObjectManager $manager) {
    // Новая категория
      $category = new Category();
    // Заполнение полей новой категории
      $category->setName('не указано');
      $category->setColor('FFFFFF');
      $category->setDescription('');
      
      $manager->persist($category);
      $manager->flush();
      
    // Новая категория
      $category = new Category();
    // Заполнение полей новой категории
      $category->setName('пассивный поиск');
      $category->setColor('07b307');
      $category->setDescription('');
      
      $manager->persist($category);
      $manager->flush();
      
    // Новая категория
      $category = new Category();
    // Заполнение полей новой категории
      $category->setName('активный поиск');
      $category->setColor('FF0000');
      $category->setDescription('');
      
      $manager->persist($category);
      $manager->flush();
      
    // Новая категория
      $category = new Category();
    // Заполнение полей новой категории
      $category->setName('VIP');
      $category->setColor('FF8000');
      $category->setDescription('');
      
      $manager->persist($category);
      $manager->flush();
      
    // Новая категория
      $category = new Category();
    // Заполнение полей новой категории
      $category->setName('черный список');
      $category->setColor('000000');
      $category->setDescription('');
      
      $manager->persist($category);
      $manager->flush();
      
    // Новая категория
      $category = new Category();
    // Заполнение полей новой категории
      $category->setName('в паре');
      $category->setColor('0000FF');
      $category->setDescription('');
      
      $manager->persist($category);
      $manager->flush();
      
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