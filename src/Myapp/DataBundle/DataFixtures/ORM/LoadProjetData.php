<?php

namespace Myapp\DataBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Myapp\GestionProjetBundle\Entity\Projet;

class LoadProjetData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {


        $projet = new Projet();
        $projet->setNom('POL');
        $projet->setDateDebut(new \DateTime('1990-05-01'));
        $projet->setCout('10.2');
        $projet->addEmploye($this->getReference('E1'));
        $manager->persist($projet);


         $projet2 = new Projet();
        $projet2->setNom('UNIV');
        $projet2->setDateDebut(new \DateTime('1980-05-01'));
        $projet2->setCout('10.2');
        $projet2->addEmploye($this->getReference('E2'));
         $manager->persist($projet2);
        
        
        
        $projet3 = new Projet();
        $projet3->setNom('PPP');
        $projet3->setDateDebut(new \DateTime('1930-05-01'));
        $projet3->setCout('10.2');
        $projet3->addEmploye($this->getReference('E3'));
                $projet3->addEmploye($this->getReference('E2'));

        $manager->persist($projet3);


        

        $manager->flush();

        $this->addReference('P', $projet);
        $this->addReference('P1', $projet2);
        $this->addReference('P2', $projet3);
    }

    public function getOrder() {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 3;
    }

}

?>
