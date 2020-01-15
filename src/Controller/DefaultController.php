<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Entity\OpeningHour;
use App\Entity\SocialNetwork;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {

        $doctors = $this->getDoctrine()->getRepository(Doctor::class)->findAll();
        $openingHours = $this->getDoctrine()->getRepository(OpeningHour::class)->findAll();
        return $this->render('default/index.html.twig', [
            'doctors' => $doctors,
            'openingHours' => $openingHours,
        ]);
    }

    public function headerSocialNetworks()
    {
        $socialNetworks = $this->getDoctrine()->getRepository(SocialNetwork::class)->findAll();
        return $this->render('default/_socialnetwork.html.twig', [
            'socialNetworks' => $socialNetworks
        ]);
    }
}
