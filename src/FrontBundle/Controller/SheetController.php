<?php

namespace FrontBundle\Controller;

use Doctrine\ORM\EntityNotFoundException;
use FrontBundle\Entity\Sheet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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


    public function createAction() {
        $form = $this->createFormBuilder();
        $form->add("Name");
        $form->add("Type");
        $form->add("Duration");
        $form->add("Released", "date");
        $form->add("Submit", "submit");
        $renderForm = $form->getForm();

        $params = array("renderForm" => $renderForm->createView());

        return $this->render('FrontBundle:Sheet:create.html.twig', $params);
    }

}