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
     * @Route("/one", name="onecolumn")
     * @Template()
     */
    public function onecolumnAction()
    {
        return array();
    }

    /**
     * @Route("/two1", name="twocolumn1")
     * @Template()
     */
    public function twocolumn1Action()
    {
        return array();
    }

    /**
     * @Route("/two2", name="twocolumn2")
     * @Template()
     */
    public function twocolumn2Action()
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
