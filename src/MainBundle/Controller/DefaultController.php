<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/rolunk", name="about")
     * @Template()
     */
    public function aboutAction()
    {
        return array();
    }

    /**
     * @Route("/esemenyek", name="events")
     * @Template()
     */
    public function eventsAction()
    {
        return array();
    }

    /**
     * @Route("/kapcsolat", name="contact")
     * @Template()
     */
    public function contactAction()
    {
        return array();
    }





    /**
     * @Route("/three", name="threecolumn")
     * @Template()
     */
    public function threecolumnAction()
    {
        return array();
    }
}
