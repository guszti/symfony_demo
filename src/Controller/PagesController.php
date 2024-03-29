<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class PagesController extends AbstractController
{ 
    public function index()
    {
        return $this->render('dashboard/index.html.twig');
    }

    /**
     * @Security("is_granted('ROLE_USER')", statusCode=404, message="Resource not found.")
     */
    public function user(){ 
        $user = $this->getUser();

        return $this->render('user/index.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Security("is_granted('ROLE_EDITOR')", statusCode=404, message="Resource not found.")
     */
    public function editor(){
        return $this->render('editor/index.html.twig');
    }
    /**
     * @Security("is_granted('ROLE_ADMIN')", statusCode=404, message="Resource not found.")
     */
    public function administrator(){
        return $this->render('administrator/index.html.twig');
    }
}
