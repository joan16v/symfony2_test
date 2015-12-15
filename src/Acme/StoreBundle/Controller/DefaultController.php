<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\StoreBundle\Entity\Product;
use Acme\StoreBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction()
    {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        $user = new User();
        $user->setName('Joan');
        $user->setLogin('joan');
        $user->setEmail('joan@joan.com');

        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();

        return new Response('Created product id ' . $product->getId() . 'Created user id ' . $user->getId());
    }

    public function showAction($id)
    {
        $product = $this->getDoctrine()
            ->getRepository('AcmeStoreBundle:Product')
            ->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        // ... (pasar el objeto $product a una plantilla)
        return $this->render('AcmeStoreBundle:Default:show.html.twig', array('product' => $product));
    }

    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('AcmeStoreBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $product->setName('New product name!');
        $em->flush();

        //return $this->redirect($this->generateUrl('homepage'));
        return new Response('Updated product id ' . $product->getId());
    }

    public function productosAction()
    {
        $articulos = array(
            array('id' => 1, 'title' => 'Articulo numero 1', 'created' => '2011-01-01'),
            array('id' => 2, 'title' => 'Articulo numero 2', 'created' => '2011-01-01'),
            array('id' => 3, 'title' => 'Articulo numero 3', 'created' => '2011-01-01'),
        );
        return $this->render('AcmeStoreBundle:Default:productos.html.twig', array('articulos' => $articulos));
    }
}
