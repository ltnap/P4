<?php

namespace ML\BookingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MLBookingBundle:Default:index.html.twig');
    }
}
