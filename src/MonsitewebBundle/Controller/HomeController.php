<?php

namespace MonsitewebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function indexAction() {
        return $this->render('MonsitewebBundle:Default:index.html.twig');
    }

}
