<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController extends AbstractController
{
    #[Route('/', name: 'app_home_page')]
    public function index(EntityManagerInterface $em, UserPasswordHasherInterface $passwordHasher): Response
    {

//        $user = new User();
//        $plaintextPassword = 'admin';
//
//        // hash the password (based on the security.yaml config for the $user class)
//        $hashedPassword = $passwordHasher->hashPassword(
//            $user,
//            $plaintextPassword
//        );
//
//        $user
//            ->setPassword($hashedPassword)
//            ->setEmail('zied.kharraz@gmail.com')
//            ->setRoles(['ROLE_SUPER_ADMIN']);
//
//        $em->persist($user);
//        $em->flush();

        return $this->render('home_page/index.html.twig', [
            'controller_name' => 'HomePageController',
        ]);
    }
}
