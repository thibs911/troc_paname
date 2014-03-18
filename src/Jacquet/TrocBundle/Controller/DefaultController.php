<?php

namespace Jacquet\TrocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JacquetTrocBundle:Default:index.html.twig', array('name' => $name));
    }
}
