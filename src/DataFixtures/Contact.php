<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class Contact extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $contact = new \App\Entity\Contact();
        $contact->setEmail("contact@salutem.fr");
        $contact->setPhone("0243654125");
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
