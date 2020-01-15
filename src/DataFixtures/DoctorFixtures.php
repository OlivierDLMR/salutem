<?php

namespace App\DataFixtures;

use App\Entity\Doctor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class DoctorFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $jack = new Doctor();
        $jack->setFirstname("Jack");
        $jack->setLastname("Smith");
        $jack->setPhoto("doctor-1.jpg");
        $jack->setDescription("lorem ipsum...");
        $jack->addSkill($this->getReference("skill-homeopathe"));
        $jack->addSkill($this->getReference("skill-dentiste"));
        $manager->persist($jack);

        $norman = new Doctor();
        $norman->setFirstname("Norman");
        $norman->setLastname("Pedric");
        $norman->setPhoto("doctor-2.jpg");
        $norman->setDescription("la description de Norman...");
        $manager->persist($norman);

        $maria = new Doctor();
        $maria->setFirstname("Maria");
        $maria->setLastname("Martin");
        $maria->setPhoto("doctor-3.jpg");
        $maria->setDescription("Hi there...");
        $maria->addSkill($this->getReference("skill-dentiste"));
        $manager->persist($maria);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }

    /**
     * @inheritDoc
     */
    public function getDependencies()
    {
        Return [
            SkillFixtures::class
        ];
    }
}
