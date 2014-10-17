<?php

namespace Bo\AjaxBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/ajax")
 */

class DefaultController extends Controller
{
     /**
     * @Route("/index", name="ajax.index")
     * @Template()
      * 
     */
    public function indexAction()
    {
        return array();
    }
    
    /**
     * @Route("/delete_produits", name="ajax.delete_produits")
     * @Template()
      * 
     */
    public function delete_produitsAction()
    {
        $id = $this->getRequest()->get('id');
        $this->get('session')->remove('produits/'.$id);
        
        return new Response();
    }
    
    
    /**
     * @Route("/ini", name="ajax.ini")
     * @Template()
      * 
     */
    public function iniAction()
    {
        $this->get('session')->set('produits', array(
        'a' => array('nom' => 'Dell', 'prix' => 500),
        'b' => array('nom' => 'Mac', 'prix' => 1290),
        'c' => array('nom' => 'Samsung', 'prix' => 990),
    ));
        
        
        
        return $this->redirect($this->generateUrl('ajax.index'));
    }
    
}
