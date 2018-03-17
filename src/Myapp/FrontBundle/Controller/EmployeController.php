<?php

namespace Myapp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmployeController extends Controller
{
    public function indexAction()
    {
     $em = $this->getDoctrine()->getManager();
        $employe = $em->getRepository('GestionProjetBundle:Employe')->findAll();
        return $this->render("FrontBundle:Employe:index.html.twig", array(
                    'employe' => $employe,
        ));
    }

}
