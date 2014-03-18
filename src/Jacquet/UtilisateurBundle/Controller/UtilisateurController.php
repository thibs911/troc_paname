<?php
/**
 * Created by JetBrains PhpStorm.
 * User: etudiant
 * Date: 16/03/2014
 * Time: 21:16
 * To change this template use File | Settings | File Templates.
 */

namespace Jacquet\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class UtilisateurController extends Controller{

    public function  indexAction()
    {
        return $this->render("JacquetUtilisateurBundle:Utilisateur:index.html.twig",
        array('utilisateur' => "Jean-Louis"));

    }

    public function byeAction()
    {
        return $this->render("JacquetUtilisateurBundle:Utilisateur:bye.html.twig",
        array('bye'=>"MotherFucker"));
    }

}