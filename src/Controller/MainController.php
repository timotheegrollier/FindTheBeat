<?php

namespace App\Controller;

use App\Entity\Beat;
use App\Form\CurrentBeatType;
use App\Form\PitchType;
use App\Repository\BeatRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    
    #[Route("/",name:"app_home")]
    public function list(BeatRepository $beatRepository): Response
    {
        $beats = $beatRepository->findAll();



        return $this->render('main/list.html.twig',compact('beats'));


    }




    #[Route('/create', name: 'app_create')]
    public function index(Request $request, EntityManagerInterface $em,BeatRepository $beatRepository): Response
    {

        $beat = new Beat();

        $form = $this->createForm(CurrentBeatType::class,$beat);



        $form->handleRequest($request);



        if($form->isSubmitted() && $form->isValid()){
        $alreadyIn = $beatRepository->findOneBy(['currentBeat'=>$form->get('currentBeat')->getData()]);

        if($alreadyIn){
            return $this->redirectToRoute('app_edit',['beat'=>$alreadyIn->getId()]);
        }

           $beat->setId($form->get('currentBeat')->getData());

            $em->persist($beat);
            $em->flush();

            return $this->redirect('/' . $beat->getId() . '/edit',302);


        }


        return $this->render('main/index.html.twig',['form'=>$form->createView()]);
    }






    #[Route("/{beat}/edit",name:"app_edit")]
    public function edit(Beat $beat,EntityManagerInterface $entityManagerInterface, Request $request): Response
    {

        
        $currentBeat = $beat->getCurrentBeat();
        $beat->setCurrentBeat($currentBeat);
        $form = $this->createForm(PitchType::class,$beat,['attr'=>['autocomplete'=>'off']]);
        $form->get('currentBeat')->setData($currentBeat);


        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()){

            
            $beat->setCurrentBeat($currentBeat);
            
            $beat->setM1($form->getData()->getP1());
            $beat->setM2($form->getData()->getP2());
            $beat->setM3($form->getData()->getP3());
            $beat->setM4($form->getData()->getP4());
            $beat->setM5($form->getData()->getP5());
            $beat->setM6($form->getData()->getP6());
            $beat->setM7($form->getData()->getP7());
            $beat->setM8($form->getData()->getP8());
            $beat->setM9($form->getData()->getP9());
            $beat->setM10($form->getData()->getP10());
            $beat->setM11($form->getData()->getP11());
            $beat->setM12($form->getData()->getP12());
            $beat->setM13($form->getData()->getP13());
            $beat->setM14($form->getData()->getP14());
            $beat->setM15($form->getData()->getP15());
            $beat->setM16($form->getData()->getP16());
            $beat->setM17($form->getData()->getP17());
            $beat->setM18($form->getData()->getP18());
            $beat->setM19($form->getData()->getP19());
            $beat->setM20($form->getData()->getP20());

            $entityManagerInterface->flush();


            return $this->redirectToRoute('app_home',['beat'=>$beat]);
        }
        
        
        
        
        
        return $this->render('main/edit.html.twig',['beat'=>$beat,'form'=>$form->createView(),"current"=>$currentBeat]);
        
        
    }


    #[Route("/{beat}/show",name:"app_show")]
    public function show(Beat $beat): Response
    {
        
        return $this->render('main/show.html.twig', ['beat'=>$beat]);
    }
}
