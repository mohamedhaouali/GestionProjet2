<?php

namespace Myapp\GestionProjetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionProjetBundle:Default:index.html.twig');
    }
    public function acceuilAction()
    {
        return $this->render('GestionProjetBundle:Default:page_une.html.twig');
    }
    public function pageAction($num)
    {
        return $this->render('GestionProjetBundle:Default:page.html.twig',array('nbr'=>$num));
    }
}
