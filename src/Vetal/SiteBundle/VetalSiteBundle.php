<?php

namespace Vetal\SiteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class VetalSiteBundle extends Bundle {

  public function getParent() {
    return 'FOSUserBundle';
  }

}
