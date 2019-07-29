<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\HttpFoundation\RedirectResponse;

class UserController extends AbstractController
{
    /**
     * @Route("/newuser", name="newuser")
     */
    public function createUsers(): Response
    {
        /*// you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $entityManager = $this->getDoctrine()->getManager();

        $newUser = new User();
        $newUser->setUsername('User3');
        $newUser->setRoles(['ROLE_USER']);
        $newUser->setPassword('user');
        $newUser->setLastonline(new \DateTime("now"));

        // tell Doctrine you want to (eventually) save the Product (no queries yet)
        $entityManager->persist($newUser);

        // actually executes the queries (i.e. the INSERT query)
        $entityManager->flush();

        return new Response('Saved new product with id '.$newUser->getId());
        */
        return $this->redirectToRoute('dashboard');
    }
}
