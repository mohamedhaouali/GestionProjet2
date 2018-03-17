<?php

namespace Myapp\FrontBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProjetType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom')
                ->add('dateDebut')
                ->add('cout')
                ->add('Employe', EntityType::class, array(
                    // query choices from this entity
                    'class' => 'GestionProjetBundle:Employe',
                    // use the User.username property as the visible option string
                    'choice_label' => 'nom',
                    'multiple' => true
                        )
        );
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Myapp\GestionProjetBundle\Entity\Projet'
        ));
    }

}
