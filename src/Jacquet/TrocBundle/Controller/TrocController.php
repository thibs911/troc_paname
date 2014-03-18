<?php
/**
 * Created by JetBrains PhpStorm.
 * User: etudiant
 * Date: 16/03/2014
 * Time: 21:46
 * To change this template use File | Settings | File Templates.
 */

namespace Jacquet\TrocBundle\Controller;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Jacquet\UtilisateurBundle\Entity\Utilisateur;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Jacquet\TrocBundle\Entity\ObjetTroc;
use Jacquet\TrocBundle\Entity\Troc;
use Jacquet\TrocBundle\Entity\Statut;

class TrocController extends Controller {

    public function  voirAction($id)
    {

    $em = $this->getDoctrine()->getRepository('JacquetTrocBundle:Troc');
    $monTroc = $em->find($id);

        return $this->render('JacquetTrocBundle:Troc:viewById.html.twig', array("monTroc" => $monTroc));


    }

    public function ajouterAction()
    {

    }

    public function indexAction()
    {
        $em = $this->getDoctrine()->getRepository('JacquetTrocBundle:Troc');
        $query = $em->createQueryBuilder('t')

            ->select('t')
            ->where('t.statut != :statut')
            ->orderBy('t.date', 'DESC')
            ->setMaxResults(10);
        $query->setParameter('statut', 1);

        $trocs = new Paginator($query, $fetchJoinCollection = true);

        $query = "SELECT t, count(t.id) as counter FROM JacquetTrocBundle:ObjetTroc t,
        JacquetTrocBundle:Objet o, JacquetTrocBundle:Troc tr WHERE t.objet = o.id and tr.statut = 1
        GROUP BY t.objet";

        $tops = $this->getDoctrine()->getManager()->createQuery($query)->setMaxResults(3)->getResult();



        return $this->render('JacquetTrocBundle:Troc:index.html.twig', array('trocs'=>$trocs,
        'tops'=>$tops));


    }

    public function viewAllAction($page)
    {
        $em = $this->getDoctrine()->getRepository('JacquetTrocBundle:Troc');
        $query = $em->createQueryBuilder('t')
            ->select('t')
            ->where("t.statut != :statut")
            ->orderBy('t.date', 'DESC')
            ->setFirstResult($page*10)
            ->setMaxResults(10)
            ->setParameter("statut",1);


        $trocs = new Paginator($query, $fetchJoinCollection = true);


        return $this->render('JacquetTrocBundle:Troc:viewAll.html.twig', array('trocs'=>$trocs));



    }

    public function addTrocAction()
    {
        /*$em= $this->getDoctrine()->getRepository("JacquetTrocBundle:Objet");
        $objets = $em->findAll();*/




       $addTroc = new ObjetTroc;
       $user = $this->container->get("security.context")->getToken()->getUser();

        $formBuilder = $this->createFormBuilder($addTroc)
            ->add('description', 'textarea')
            ->add('titre', 'text')
            ->add('objet', 'entity', array(
                'class' => 'JacquetTrocBundle:Objet',
                'property' => 'reference',
                'query_builder'=> function(EntityRepository $em){
                    return $em->createQueryBuilder("o");
                }
            ))
            ->getForm();

        $request = $this->get('request');

        if($request->getMethod() == 'POST')
        {
            $formBuilder->bind($request);

            if ($formBuilder->isValid())
            {

                $addTroc->setVendeur($user);
                $em = $this->getDoctrine()->getManager();
                $em->persist($addTroc);

                $troc = new Troc;
                $troc->setObjetTroc($addTroc);
                $statut = $em->getRepository('Jacquet\TrocBundle\Entity\Statut')->find(2);
                $troc->setStatut($statut);

                $em->persist($troc);

                $em->flush();

                return $this->redirect($this->generateUrl('jacquet_troc_voir',
                array('id' => $troc->getId())));

            }
        }
/*
                ->add('objet', 'entity', array(
                'class' => 'JacquetTrocBundle:Objet',
                'property'=>'reference',
                'query_builder'=>function(EntityRepository $em){
                    return $em->findAll();
                }
            ))
                ->add('', 'textarea')
                ->getForm();

        if($formBuider->isValid())
        {

        }
        */







        return $this->render('JacquetTrocBundle:Troc:form.html.twig',
        array('form' => $formBuilder->createView(),));
    }






}