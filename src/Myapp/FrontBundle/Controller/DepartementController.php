<?php

namespace Myapp\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DepartementController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $departement = $em->getRepository('GestionProjetBundle:Departement')->findAll();
        return $this->render("FrontBundle:Departement:index.html.twig", array(
                    'departement' => $departement,
        ));
    }

}
