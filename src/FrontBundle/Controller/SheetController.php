<?php

namespace FrontBundle\Controller;

use Doctrine\ORM\EntityNotFoundException;
use FrontBundle\Entity\Sheet;
use FrontBundle\Form\Type\SheetType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FrontBundle\Form\Handler\SheetHandler;


class SheetController extends Controller {
    
    public function listAction(Request $request) {

        // Utilisation des sessions
        $session = $this->get("session");
        $session->set("machin", "plop");

        // Utilisation des flashbag's
        $session->getFlashBag()->add('machin', 'Profile updated');


        // Insert Sheet in Database
        $em = $this->getDoctrine()->getManager();

        $repository = $em->getRepository("FrontBundle:Sheet");
        $sheets = $repository->getByType("Type 1");

        return $this->render('FrontBundle:Sheet:list.html.twig', array("sheets" => $sheets));
    }

    public function showAction(Request $request) {
        $id = $request->get("id");

        $repository = $this->getDoctrine()->getManager()->getRepository("FrontBundle:Sheet");
        $sheet = $repository->find($id);

        if(!$sheet) {
            throw new EntityNotFoundExceptionon("Sheet not found");
        }
        return $this->render('FrontBundle:Sheet:show.html.twig', array("id" => $id, "sheet" => $sheet));
    }


    public function createAction(Request $request) {

        $sheetForm = $this->createForm(new SheetType(), new Sheet());
        $sheetFormHandler = new SheetHandler($sheetForm, $request);

        if ($sheetFormHandler->process()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($sheetFormHandler->getForm()->getData());
            $em->flush();
        }

        return $this->render('FrontBundle:Sheet:create.html.twig', array(
                "renderForm" => $sheetForm->createView()
            )
        );
    }

}