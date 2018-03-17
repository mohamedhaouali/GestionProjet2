<?php

namespace Myapp\GestionProjetBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EmployeAdmin extends Admin {

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('id')
                ->add('nom')
                ->add('prenom')
                ->add('date')
                ->add('sexe')
                ->add('pays')
                ->add('departement')
                ->add('employe.nom')
                


                // add custom action links
                ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                    )
                ))
        ;
    }

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('nom')
                ->add('prenom')
                ->add('date', 'birthday', array('format' => 'ddMMyyyy', 'years' => range(1910,2107)))
                ->add('sexe', 'choice', array('choices' => array('homme' => 'h', 'femme' => 'f'), 'expanded' => TRUE))
                ->add('pays', 'country')
                ->add('departement', 'entity', array(
                    'class' => 'Myapp\GestionProjetBundle\Entity\Departement',
                    'choice_label' => 'nom',));
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid) {
        $datagrid
                ->add('sexe')
               // ->add('departement')
                ->add('date','doctrine_orm_date_range')

        ;
    }

}

?>
