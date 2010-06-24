<?php

namespace Application\PageRollerBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;

class PageRollerController extends Controller {

  public function viewAction() {

    $dm = $this->container->getDoctrine_Odm_Mongodb_DocumentManagerService();

    $u = new \Application\PageRollerBundle\Documents\Url();
    $u->setUrl('http://sg112.servergrove.com/intranet/server-status');

//    $dm->persist($u);
 //   $dm->flush();


    $urls = array(
        'http://www.symfony-project.org/',
        'http://www.symfony-reloaded.org/',
    );


    $i = $this->getUser()->getAttribute('idx', 0);

    $url = $urls[$i];

    if ($i < count($urls) - 1) {
      $i++;
    } else {
      $i = 0;
    }

    $this->getUser()->setAttribute('idx', $i);


    return $this->render('PageRollerBundle:view:index', array('url' => $url, 'next' => $urls[$i]));
  }

}
