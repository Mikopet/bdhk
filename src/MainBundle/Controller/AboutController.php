<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AboutController extends Controller
{
    /**
     * @param $aid string
     * @return array
     *
     * @Route("/rolunk/{aid}", name="about", defaults={"aid" = "tortenet"})
     * @Template()
     */
    public function indexAction($aid)
    {
        return array(
            "subsite" => $aid
        );
    }

    /**
     * @Route("/tagok", name="about_members")
     * @Template()
     */
    public function membersAction()
    {
        return array(
            "users" => $this->get('fos_user.user_manager')->findUsers()
        );
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

    /**
     * @Route("/korsok", name="about_jugs")
     * @Template()
     */
    public function jugsAction()
    {
        return array();
    }
}
