<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Acme\StoreBundle\Document\Product;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{ 
    /**
     * @Route("/", name="homepage")
     */
   
  public function createAction()
    {   
        return $this->render('home.html.twig', array());
    }

    /**
     * @Route("/about", name="about")
     */
   
  public function aboutAction()
    {   
        return $this->render('about-us.html.twig', array());
    }
    
     /**
     * @Route("/contact", name="contact")
     */
   
  public function contactAction()
    {   
        return $this->render('contact-us.html.twig', array());
    }
   
    /**
     * @Route("/card", name="card")
     */
   
  public function cardAction()
    {   
        return $this->render('shopping-cart.html.twig', array());
    }


    /**
     * @Route("/addProducts")
     */
  public function addProductsAction()
    {
        ini_set('max_execution_time', 300);
        
        //get data from API and decode it from json to arrays.
        $content1     = file_get_contents("http://vps183328.ovh.net:3000/providers/1/products");
        $parsed_json1 = json_decode($content1);
        $content2     = file_get_contents("http://vps183328.ovh.net:3000/providers/2/products");
        $parsed_json2 = json_decode($content2);
        $content3     = file_get_contents("http://vps183328.ovh.net:3000/providers/3/products");
        $parsed_json3 = json_decode($content3);
        $content4     = file_get_contents("http://vps183328.ovh.net:3000/providers/4/products");
        $parsed_json4 = json_decode($content4);
        $size          = sizeof($parsed_json1);
         
        // set product data
        for ($i = 0; $i < $size; $i++){    
            $product = new Product();
            $product->setName($parsed_json1[$i]->{'productName'});
            $product->setCategory($parsed_json1[$i]->{'category'});
            $product->setBrand($parsed_json1[$i]->{'brand'});
            $product->setProductMaterial($parsed_json1[$i]->{'productMaterial'});
            $product->setImageUrl($parsed_json1[$i]->{'imageUrl'});
            $product->setDelivery($parsed_json1[$i]->{'delivery'});
            $product->setDetails($parsed_json1[$i]->{'details'});
            $product->setpriceFrns1($parsed_json1[$i]->{'price'});
            $product->setPriceNewFrns1($parsed_json1[$i]->{'price'});
            $product->setpriceFrns2($parsed_json2[$i]->{'price'});
            $product->setPriceNewFrns2($parsed_json2[$i]->{'price'});
            $product->setpriceFrns3($parsed_json3[$i]->{'price'});
            $product->setPriceNewFrns3($parsed_json3[$i]->{'price'});
            $product->setpriceFrns4($parsed_json4[$i]->{'price'});
            $product->setPriceNewFrns4($parsed_json4[$i]->{'price'});
            
            //Get the minimal price              
            $min = min(floatval($parsed_json1[$i]->{'price'}), floatval($parsed_json2[$i]->{'price'}),
                       floatval($parsed_json3[$i]->{'price'}), floatval($parsed_json4[$i]->{'price'}));

            $product->setMinPrice($min);
            $product->setMinNewPrice($min);
            $product->setPriceVariation(0);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();
            
        } 
         return new Response('Number of products = ' . $i);       
    }
   /**
     * @Route("/updateDB")
     */
    
    public function updateDBAction()
    {
        ini_set('max_execution_time', 300);
        
        $content1     = file_get_contents("http://vps183328.ovh.net:3000/providers/1/products");
        $parsed_json1 = json_decode($content1);
        $content2     = file_get_contents("http://vps183328.ovh.net:3000/providers/2/products");
        $parsed_json2 = json_decode($content2);
        $content3     = file_get_contents("http://vps183328.ovh.net:3000/providers/3/products");
        $parsed_json3 = json_decode($content3);
        $content4     = file_get_contents("http://vps183328.ovh.net:3000/providers/4/products");
        $parsed_json4 = json_decode($content4);
        $max          = sizeof($parsed_json1);
        $dm           = $this->get('doctrine.odm.mongodb.document_manager');
        $qb           = $dm->createQueryBuilder('AcmeStoreBundle:Product');
        $query        = $qb->getQuery();
        $products     = $query->execute();
        $i            = 0;
        $newMin = 0;
        $max          = sizeof($parsed_json1);

        foreach ($products as $product) {
          if( $i < $max){
            $product->setpriceFrns1($product->getPriceNewFrns1());
            $product->setPriceNewFrns1($parsed_json1[$i]->{'price'});
            $product->setpriceFrns2($product->getPriceNewFrns2());
            $product->setPriceNewFrns2($parsed_json2[$i]->{'price'});
            $product->setpriceFrns3($product->getPriceNewFrns3());
            $product->setPriceNewFrns3($parsed_json3[$i]->{'price'});
            $product->setpriceFrns4($product->getPriceNewFrns4());
            $product->setPriceNewFrns4($parsed_json4[$i]->{'price'});

            //Set minimal price and new minimal price
            $min = $product->getMinNewPrice();
            $product->setMinPrice($min);
            
            $newMin = min(floatval($parsed_json1[$i]->{'price'}), floatval($parsed_json2[$i]->{'price'}),
                       floatval($parsed_json3[$i]->{'price'}), floatval($parsed_json4[$i]->{'price'}));

            $product->setMinNewPrice($newMin);
            $product->setPriceVariation($newMin - $min);

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($product);
            $dm->flush();
            $i++;  
        }  
        }
      return new Response('Number of products = ' . $i); 
        
    }
    
}