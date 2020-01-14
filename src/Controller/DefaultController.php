<?php

namespace App\Controller;

use App\Entity\Doctor;
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
        return $this->render('default/index.html.twig', [
            'doctors' => $doctors,
        ]);
    }
}
