<?php

namespace ProjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProjectController extends Controller
{
    /**
     * @Route("/one")
     */
    public function oneAction()
    {
        return $this->render('ProjectBundle:Project:one.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/two")
     */
    public function twoAction()
    {
        return $this->render('ProjectBundle:Project:two.html.twig', array(
            // ...
        ));
    }

}
