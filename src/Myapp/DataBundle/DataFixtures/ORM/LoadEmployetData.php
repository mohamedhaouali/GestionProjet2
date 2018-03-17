<?php

namespace Myapp\DataBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Myapp\GestionProjetBundle\Entity\Employe;

class LoadEmployeData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {


        $employe = new Employe();
        $employe->setNom('safa');
        $employe->setPrenom('bb');
        $employe->setDate(new \DateTime('1980-05-01'));
        $employe->setSexe('femme');
        $employe->setPays('TT');
        $employe->setDepartement($this->getReference('d1'));
        $manager->persist($employe);


        $employe1 = new Employe();
        $employe1->setNom('safa1');
        $employe1->setPrenom('bb1');
        $employe1->setDate(new \DateTime('1999-05-05'));
        $employe1->setSexe('femme');
        $employe1->setPays('TT');
        $employe1->setDepartement($this->getReference('d2'));
        $manager->persist($employe1);


        $employe2 = new Employe();
        $employe2->setNom('safa2');
        $employe2->setPrenom('bb2');
        $employe2->setDate(new \DateTime('1999-05-05'));
        $employe2->setSexe('femme');
        $employe2->setPays('TT');
        $employe2->setDepartement($this->getReference('d1'));
        $manager->persist($employe2);

        $employe3 = new Employe();
        $employe3->setNom('safa3');
        $employe3->setPrenom('bb3');
        $employe3->setDate(new \DateTime('1999-05-05'));
        $employe3->setSexe('femme');
        $employe3->setPays('TT');
        $employe3->setDepartement($this->getReference('d3'));
        $manager->persist($employe3);

        $manager->flush();

        $this->addReference('E', $employe);
        $this->addReference('E1', $employe1);
        $this->addReference('E2', $employe2);
        $this->addReference('E3', $employe3);
    }

    public function getOrder() {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 2;
    }

}

?>
