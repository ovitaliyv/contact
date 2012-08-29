<?php

namespace Vetal\SiteBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class DefaultController extends Controller {

  /**
   * Тестовое действие для отображения результата в шаблоне Twig с помощью render()
   * 
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function testAction() {

    return new Response('Тестовая <strong>срока</strong>');
  }

  public function indexAction() {

    return $this->render('VetalSiteBundle:Default:index.html.twig');
  }

  /**
   * Отображение информации о текущей категории
   * 
   * @param integer $category_id
   * @return VetalSiteBundle:Default:show.html.twig
   * @throws NotFoundException
   */
  public function showAction($category_id) {

    $repository = $this->getDoctrine()
            ->getRepository('VetalSiteBundle:Category');
    $category = $repository->find($category_id);
    if (!$category) {
      throw $this->createNotFoundException('Нет категории ' . $category_id);
    }
    return $this->render('VetalSiteBundle:Default:show.html.twig', array('category' => $category));
  }

  /**
   * Авторизация и в случае необходимости отображение формы входа
   * 
   * @return VetalSiteBundle:Security:login.html.twig
   */
  public function loginAction() {
    $request = $this->getRequest();
    $session = $request->getSession();

    // get the login error if there is one
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    } else {
      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    }

    return $this->render('VetalSiteBundle:Security:login.html.twig', array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error' => $error,
            ));
  }

  /**
   * Отображение данных профиля текущего пользователя со списком обслуживаемых клиентов
   * 
   * @return VetalSiteBundle:Default:showuserfull.html.twig
   */
  public function showUserProfileAction() {

    $token = $this->get('security.context')->getToken();
    $roles = $token->getRoles();

    if (count($roles) > 0) {
      $profile = $token->getUser()->getProfile();
      $clients = $this->getDoctrine()->getRepository('VetalSiteBundle:Profile')->findBy(array('profiles' => $token->getUser()->getId()));
      if ((gettype($profile) == 'NULL') || (gettype($profile) == null)) {
        $userProfile = null;
      } else {
        $userProfile = $profile;
      }
    } else {
      $userProfile = null;
    }
    return $this->render('VetalSiteBundle:Default:showuserfull.html.twig', array('userprofile' => $userProfile,
                'clients' => $clients));
  }

  /**
   * Отображение полного профиля клиента
   * 
   * @param integer $profile_id ID запрашиваемого профиля
   * @return VetalSiteBundle:Default:client.html.twig
   * @throws NotFoundException
   */
  public function clientAction($profile_id) {

    $repository = $this->getDoctrine()->getRepository('VetalSiteBundle:Profile');
    $profile = $repository->find($profile_id);
    if (!$profile) { // если запрашиваемого профиля не существует 
      throw $this->createNotFoundException('Нет профиля ' . $profile_id);
    }
    $profileAdmin = $profile->getProfiles(); // профиль свахи, за которой закреплен (если закреплен) запрашиваемый пользователь
    
    $token = $this->get('security.context')->getToken();
    $roles = $token->getRoles();
    $curr_user = $token->getUser();
    if ((!$curr_user)|(count($roles) == 0)) { // если запрашиваемого профиля не существует 
      throw new AccessDeniedException();
    }
    $curr_user_profile_id = $curr_user->getProfile()->getId(); // ID профиля текущего пользователя
    $isProfileAdmin = false; // признак того, что этот профиль закреплен за текущей свахой (текущим админом)
    if ($profileAdmin) {
      $isProfileAdmin = ($curr_user_profile_id == $profileAdmin->getId());
    }
    if (!(
            ($curr_user->getProfile()->getId() == $profile_id)
            || (true === $this->get('security.context')->isGranted('ROLE_SUPER_ADMIN'))
            || ($isProfileAdmin)
            )) {
      throw new AccessDeniedException();
    }
    return $this->render('VetalSiteBundle:Default:client.html.twig', array('client' => $profile));
  }

}
