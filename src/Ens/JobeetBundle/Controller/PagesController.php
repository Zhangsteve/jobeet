<?php

namespace Ens\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController  extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsJobeetBundle:Pages:index.html.twig');
    }
}
