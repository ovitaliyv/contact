<?php

namespace Vetal\SiteBundle\Twig;

use Twig_Extension;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManager;

class VetalExtension extends Twig_Extension {

  protected $container;
  protected $em;

  public function __construct(EntityManager $em, ContainerInterface $container) {
    $this->container = $container;
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

  public function getFunctions() {
    return array(
        'param' => new \Twig_Function_Method($this,'getParam'),
    );
  }

  public function getParam($paramName) {
    return $this->container->getParameter($paramName);
  }

  public function getName() {
    return 'vetal_extension';
  }

}