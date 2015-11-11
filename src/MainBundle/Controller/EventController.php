<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class EventController extends Controller
{
    /**
     * @Route("/esemenyek", name="events")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
