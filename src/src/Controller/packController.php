<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class packController extends Controller{
        /**
        *  @Route("/",name="homeaction")
        */
        public function listarPack() {
        //Entity Manager
        $em = $this->getDoctrine()->getEntityManager();
 
        /*
         * Repositorio de la entidad 
         * (si no creamos uno y le metemos métodos propios 
         * solamente tendrá los métodos de la clase de la entidad)
         */
        $pack = $em->getRepository("packator:Pack");
 
        // Consegir todo
        $po = $pack->findAll();
        foreach ($po as $p) {
            echo $p->getId();
            echo "<br/>";
            echo $p->getName();
            echo "<br/>";
            echo $p->getEmployee_id();
            echo "<hr/>";
        }
 
    }
}