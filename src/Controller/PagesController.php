<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class PagesController extends AbstractController
{
    public function index()
    {
        return $this->render('dashboard/index.html.twig', [
            'controller_name' => 'PagesController'
        ]);
    }

    public function user($id){
        return $this->render('user/index.html.twig', [
            'controller_name' => 'PagesController',
            'id' => $id
        ]);
    }

    public function editor(){
        return $this->render('editor/index.html.twig', [
            'controller_name' => 'PagesController'
        ]);
    }

    public function administrator(){
        return $this->render('administrator/index.html.twig', [
            'controller_name' => 'PagesController'
        ]);
    }
}
