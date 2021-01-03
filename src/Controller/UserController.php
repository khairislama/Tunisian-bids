<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Product;
use App\Entity\Wishlist;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class UserController extends AbstractController
{

    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function showAllUsers(): Response
    {
        $em = $this->getDoctrine()->getRepository(User::class);
        $users = $em->findAll();
        return $this->render('user/all.html.twig', [
            'controller_name' => 'UserController',
            'users' => $users
        ]);
    }

    /**
     * @Route("/admin/products", name="admin_products")
     */
    public function showAllProducts(): Response
    {
        $em = $this->getDoctrine()->getRepository(Product::class);
        $products = $em->findAll();
        return $this->render('user/allproducts.html.twig', [
            'controller_name' => 'ProductsController',
            'products' => $products
        ]);
    }

    /**
     * @Route("/user/{id}", name="show_user")
     */
    public function show($id): Response
    {
        $em = $this->getDoctrine()->getRepository(User::class);
        $user = $em->find($id);
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
            'user' => $user
        ]);
    }

    /**
     * @Route("/user/modify", name="modify_user")
     */
    public function modifyUser(UserInterface $user): Response
    {
        $em = $this->getDoctrine()->getRepository(User::class);
        return $this->render('user/modif.html.twig', [
            'controller_name' => 'UserController',
            'user' => $user
        ]);
    }

    /**
     * @Route("/my/products", name="show_my_products")
     */
    public function showMyProducts(UserInterface $user): Response
    {
        $userID = $user->getId();
        $em = $this->getDoctrine()->getRepository(Product::class);
        $products = $em->getProductByUserId($userID);
        
        return $this->render('product/myproduct.html.twig', [
            'controller_name' => 'UserController',
            'products' => $products
        ]);
    }

    /**
     * @Route("/my/wishlist", name="show_user_wishlist")
     */
    public function showUserWishlist(UserInterface $user): Response
    {
        $userID = $user->getId();
        $em = $this->getDoctrine()->getRepository(Wishlist::class);
        $products = $em->getProductWishedByUserId($userID);
        
        return $this->render('product/index.html.twig', [
            'controller_name' => 'UserController',
            'products' => $products
        ]);
    }

    /**
     * @Route("/user/{id}/products", name="show_user_wishlist")
     */
    public function showUserProducts($id): Response
    {
        $em = $this->getDoctrine();
        $products = $em->getRepository(Product::class)->getProductByUserId($id);
        $user = $em->getRepository(User::class)->find($id);
        return $this->render('product/userProducts.html.twig', [
            'controller_name' => 'UserController',
            'products' => $products,
            'user' => $user
        ]);
    }

    /**
     * @Route("/admin/user/{id}/ban", name="admin_users_ban")
     */
    public function banUsers($id): Response
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);
        if (!$user){
            return $this->render('home/index.html.twig', [
                'controller_name' => 'Acceuil'
            ]);
        }
        $em->remove($user);
        $em->flush();        
        $em = $this->getDoctrine()->getRepository(User::class);
        $users = $em->findAll();
        return $this->render('user/all.html.twig', [
            'controller_name' => 'UserController',
            'users' => $users
        ]);
    }

}
