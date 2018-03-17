<?php
namespace Myapp\DataBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Myapp\GestionProjetBundle\Entity\Departement;

class LoadDepartementData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
               
        $depart1=new Departement();
        $depart1->setNom('informatique');
        $manager->persist($depart1);
        
        $depart2=new Departement();
        $depart2->setNom('RH');
        $manager->persist($depart2);
        
        $depart3=new Departement();
        $depart3->setNom('finance');
        $manager->persist($depart3);
        
        $manager->flush();

        $this->addReference('d1', $depart1);
        $this->addReference('d2', $depart2);
        $this->addReference('d3', $depart3);

    }

    public function getOrder()
    {
        // the order in which fixtures will be loaded
        // the lower the number, the sooner that this fixture is loaded
        return 1;
    }
}


?>
