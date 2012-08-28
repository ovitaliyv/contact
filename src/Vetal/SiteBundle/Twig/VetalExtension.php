<?php

namespace Vetal\SiteBundle\Twig;

use Twig_Extension;
use Doctrine\ORM\EntityManager;

class VetalExtension extends Twig_Extension {

  protected $em;

  public function __construct(EntityManager $em) {
    $this->em = $em;
  }

  public function getFilters() {
    return array(
        'var_dump' => new \Twig_Filter_Function('var_dump'),
    );
  }

  public function getGlobals() {
    $categories = $this->em->getRepository('VetalSiteBundle:Category')->findAllOrderedByName();
    return array(
        'categories' => $categories,
    );
  }

  public function getName() {
    return 'vetal_extension';
  }

}