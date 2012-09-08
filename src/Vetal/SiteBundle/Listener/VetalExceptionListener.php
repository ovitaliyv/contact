<?php

namespace Vetal\SiteBundle\Listener;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Templating\EngineInterface;


class VetalExceptionListener {

  protected $container;
  protected $locale;
  protected $templating;
  
  public function __construct(ContainerInterface $container, EngineInterface $templating) {
    $this->templating = $templating;
    $this->container = $container;
    $request = $this->container->get('request');
    $this->locale = $request->cookies->get('lunetics_locale');
    if (!$this->locale) {
      $locales = $this->container->getParameter('lunetics_locale.allowed_locales');
      $this->locale = $request->getPreferredLanguage($locales);
    }
    $request->setLocale($this->locale);
  }
  

  public function onKernelException(GetResponseForExceptionEvent $event) {

    $exception = $event->getException();
    return $this->templating->render('TwigBundle:Exception:error.html.twig', array(
                '_locale' => $this->locale,
                'status_code' => $exception->getCode(),
                'status_text' => $exception->getMessage(),
            ));
  }

}