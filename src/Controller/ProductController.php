<?php

namespace App\Controller;
use App\Entity\Product;
use App\Form\ProductType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ProductController extends AbstractController
{


    /**
     * @Route("/product/add", name="add_product")
     */
    public function add(Request $request): Response
    {
        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $product->setUser($this->getUser());
            $product->setStatus('demande');
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('get_products');
        }

        return $this->render('product/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/products", name="get_products")
     */
    public function findall(): Response
    {
        $em = $this->getDoctrine()->getRepository(Product::class);
        $products = $em->findAll();

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products
        ]);
    }

    /**
     * @Route("/products/{category}", name="get_category_products")
     */
    public function findByCategoty($category): Response
    {
        $em = $this->getDoctrine()->getRepository(Product::class);
        $products = $em->getProductByCategory($category);

        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
            'products' => $products
        ]);
    }

    /**
     * @Route("/product/{id}", name="get_single_product")
     */
    public function show($id): Response
    {
        $em = $this->getDoctrine()->getRepository(Product::class);
        $product = $em->find($id);

        return $this->render('product/single.html.twig', [
            'controller_name' => 'ProductController',
            'product' => $product
        ]);
    }

    /**
     * @Route("/product/{id}/modify", name="modify_product")
     */
    public function modify($id, Request $request, UserInterface $user): Response
    {
        
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository(Product::class)->find($id);
        if (!$product) {
            return $this->redirectToRoute('home');
        }
        
        if ( $product->getUser() != $user ){
            return $this->redirectToRoute('home');
        }
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('get_products');
        }

        return $this->render('product/modif.html.twig', [
            'controller_name' => 'ProductController',
            'form' => $form->createView(),
            'product' => $product
        ]);
    }

}
