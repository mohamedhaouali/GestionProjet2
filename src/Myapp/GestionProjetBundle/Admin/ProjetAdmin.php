<?php

namespace Myapp\GestionProjetBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ProjetAdmin extends Admin {

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->addIdentifier('id')
                ->add('nom')
                ->add('dateDebut')
                ->add('cout')
                ->add('employe', 'string', array('template' => 'GestionProjetBundle:ModuleUsed:liste_employe.html.twig'))


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
                ->add('dateDebut', 'birthday', array('format' => 'ddMMyyyy', 'years' => range(1910, 2009)))
                ->add('cout')


                //  ->add('Employe', 'entity', array(
                //       'class' => 'Myapp\GestionProjetBundle\Entity\Employe',
                //      'choice_label' => 'nom','multiple'  => true)             )
                ->add('Employe', 'sonata_type_model', array('multiple' => true))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagrid) {
        $datagrid
                ->add('nom')
                ->add('dateDebut', 'doctrine_orm_date_range')


        ;
    }

    public function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('nom')
                ->add('dateDebut')
                ->add('cout')
                ->add('Employe')




        ;
    }

}

?>
