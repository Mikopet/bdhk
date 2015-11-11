<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AboutController extends Controller
{
    /**
     * @Route("/rolunk/{aid}", name="about", defaults={"aid" = "tortenet"})
     * @Template()
     */
    public function indexAction($aid)
    {
        if ( $this->get('templating')->exists('MainBundle:About:_'.$aid.'.html.twig') ) {
            return $this->render('MainBundle:About:_'.$aid.'.html.twig');
        }
        return array();
    }

    /**
     * @Route("/tagok", name="about_members")
     * @Template()
     */
    public function membersAction()
    {
        return array();
    }

    /**
     * @Route("/asztaltarsasagok", name="about_tables")
     * @Template()
     */
    public function tablesAction()
    {
        return array();
    }

    /**
     * @Route("/notak", name="about_songs")
     * @Template()
     */
    public function songsAction()
    {
        return array();
    }
}
