<?php

namespace AppBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
class ParcelOrderController extends FOSRestController
{
    public function postParcelorderAction(Request $request) 
    {		
	 var_dump($request->request->all()); 
         $this->container->get('parcelorder_emailsender.handler')->sendEmail($request->request->all() );        
    }
}
