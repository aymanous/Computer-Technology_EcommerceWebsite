<?php

namespace Acme\StoreBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class dataFilterController extends Controller
{
	 /**
	 * 
	 *
	 * @Route("/acme/products")
	 */

	public function getAllProducts()
	{

	   $dm = $this->get('doctrine.odm.mongodb.document_manager');
	   $qb = $dm->createQueryBuilder('AcmeStoreBundle:Product');
	   $query = $qb->getQuery();
	   $products = $query->execute();
	   $Response= new Response(json_encode(iterator_to_array($products, false), true));
	   $Response->headers->set('Access-Control-Allow-Origin', '*');
	   return $Response;
	}
	
	/**
	 * 
	 *
	 * @Route("/acme/products/id/{productId}")
	 */


 	public function getAllProductsById($productId)
 	{
		$dm = $this->get('doctrine.odm.mongodb.document_manager');
		$qb = $dm->createQueryBuilder('AcmeStoreBundle:Product')->field('id')->equals($productId);
		$query = $qb->getQuery();
		$products = $query->execute();
		
		$Response= new Response(json_encode(iterator_to_array($products, false), true));
	    $Response->headers->set('Access-Control-Allow-Origin', '*');
	   return $Response;
	}

	 /**
	 * 
	 *
	 * @Route("/acme/categories")
	 */

	public function getCatergories()
	{
	   $dm = $this->get('doctrine.odm.mongodb.document_manager');
	   $qb = $dm->createQueryBuilder('AcmeStoreBundle:Product')->distinct('category');
	   $query = $qb->getQuery();
	   $products = $query->execute();
	   $Response= new Response(json_encode(iterator_to_array($products, false), true));
	   $Response->headers->set('Access-Control-Allow-Origin', '*');
	   return $Response;
	}
	
	/**
	 * 
	 *
	 * @Route("/acme/categories/{category}")
	 */


 	public function getAllProductsByCategory($category)
 	{
		$dm = $this->get('doctrine.odm.mongodb.document_manager');
		$qb = $dm->createQueryBuilder('AcmeStoreBundle:Product')->field('category')->equals($category);
		$query = $qb->getQuery();
		$products = $query->execute();

		$Response= new Response(json_encode(iterator_to_array($products, false), true));
	    $Response->headers->set('Access-Control-Allow-Origin', '*');
	   return $Response;
	}

	/**
	 * 
	 *
	 * @Route("/acme/products/name/{productName}")
	 */


 	public function getAllProductsByName($productName)
 	{
		$dm = $this->get('doctrine.odm.mongodb.document_manager');
		$qb = $dm->createQueryBuilder('AcmeStoreBundle:Product');
		$qb->field('name')->equals(new \MongoRegex('/.*'.$productName.'.*/i'));
		$query = $qb->getQuery();
		$products = $query->execute();
		
		$Response= new Response(json_encode(iterator_to_array($products, false), true));
	    $Response->headers->set('Access-Control-Allow-Origin', '*');
	   return $Response;
	}
}