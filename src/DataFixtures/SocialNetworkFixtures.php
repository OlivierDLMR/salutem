<?php

namespace App\DataFixtures;

use App\Entity\SocialNetwork;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SocialNetworkFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $facebook = new  SocialNetwork();
        $facebook->setName("Facebook");
        $facebook->setUrl("https://www.facebook.com");
        $facebook->setIcon("fa-facebook");
        $manager->persist($facebook);

        $twitter = new  SocialNetwork();
        $twitter->setName("Twitter");
        $twitter->setUrl("https://www.twitter.com");
        $twitter->setIcon("fa-twitter");
        $manager->persist($twitter);

        $linkedln = new  SocialNetwork();
        $linkedln->setName("Linkedln");
        $linkedln->setUrl("https://www.linkedln.com");
        $linkedln->setIcon("fa-linkedin");
        $manager->persist($linkedln);

        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
