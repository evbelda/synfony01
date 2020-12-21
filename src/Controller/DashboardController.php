<?php

namespace App\Controller;

use App\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class DashboardController extends AbstractController
//class DashboardController
{
    ///**
    // * @Route("/dashboard", name="dashboard")
    // */
    /**
     *  @Route("dashboard/{id}", name="get_one_dato", methods={"GET"})
     */

    public function index($id)
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
           /* $em = $this->getDoctrine()->getManager();

            return $this->get($id, $em);*/
    }
    




/*    public function get($id, $em):JsonResponse
    {
        //$dato = $this->UsuariosRepository->buscarDatosUsuario(['id' => $id]);
        //$em = $this->getDoctrine()->getManager();
        $dato = $em->getRepository(Usuarios::class)->buscarDatosUsuario($id);
        $data=[
            'id' => $dato->getId(),
            'nombre' => $dato->getNombre(),
            'email' => $dato->getEmail(),
            'password' => $dato->getPassword()
        ];

        $data=[
            'id' => 1,
            'nombre' => 'emi',
            'email' => 'emi@yo.com',
            'password' => 'emi'
        ];

        return new JsonResponse($data, Response::HTTP_OK); 
    }*/
}
