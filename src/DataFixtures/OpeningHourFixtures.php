<?php

namespace App\DataFixtures;

use App\Entity\OpeningHour;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class OpeningHourFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $lundi = new OpeningHour();
        $lundi->setDayname("lundi");
        $lundi->setDaynumber(1);
        $lundi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $lundi->setClosingTime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($lundi);

        $mardi = new OpeningHour();
        $mardi->setDayname("mardi");
        $mardi->setDaynumber(2);
        $mardi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $mardi->setClosingTime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($mardi);

        $mercredi = new OpeningHour();
        $mercredi->setDayname("mercredi");
        $mercredi->setDaynumber(3);
        $mercredi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $mercredi->setClosingTime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($mercredi);

        $jeudi = new OpeningHour();
        $jeudi->setDayname("jeudi");
        $jeudi->setDaynumber(4);
        $jeudi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $jeudi->setClosingTime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($jeudi);

        $vendredi = new OpeningHour();
        $vendredi->setDayname("vendredi");
        $vendredi->setDaynumber(5);
        $vendredi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $vendredi->setClosingTime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($vendredi);

        $samedi = new OpeningHour();
        $samedi->setDayname("samedi");
        $samedi->setDaynumber(6);
        $samedi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $samedi->setClosingTime(new \DateTime("2020-01-01 12:00:00"));
        $manager->persist($samedi);

        $dimanche = new OpeningHour();
        $dimanche->setDayname("dimanche");
        $dimanche->setDaynumber(7);
        $manager->persist($dimanche);


        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
