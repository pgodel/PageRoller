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
        'http://sgadmin.servergrove.com/intranet/ganglia/?c=ServerGrove&m=&r=day&s=descending&hc=4',
        'http://38.108.46.129/cacti/graph_view.php?action=tree&tree_id=1&leaf_id=8',
        'http://38.108.46.129/ganglia/?c=ServerGrove&m=load_one&r=day&s=descending&hc=4&mc=2',
        'http://sg108.servergrove.com/intranet/server-status',
        'http://sg111.servergrove.com/intranet/server-status',
        'http://sg112.servergrove.com/intranet/server-status',
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
