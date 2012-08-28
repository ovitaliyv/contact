<?php

namespace Vetal\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AdminController extends Controller {

  /**
   * Отображение данных профиля текущего пользователя со списком обслуживаемых клиентов
   * 
   * @return VetalSiteBundle:Default:showuserfull.html.twig
   */
  public function adminsAction() {

    if (false === $this->get('security.context')->isGranted('ROLE_SUPER_ADMIN')) {
      throw new AccessDeniedException();
    }
    $query = $this->getDoctrine()->getEntityManager()
                    ->createQuery(
                            'SELECT u.username, u.id FROM VetalSiteBundle:User u WHERE u.roles LIKE :role'
                    )->setParameter('role', '%"ROLE_ADMIN"%');

    $admins = $query->getResult();

    return $this->render('VetalSiteBundle:Admin:admins.html.twig', array('admins' => $admins));
  }

}
