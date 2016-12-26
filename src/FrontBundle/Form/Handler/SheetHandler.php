<?php

namespace FrontBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class SheetHandler
{
    protected $form;
    protected $request;

    /**
     * SheetHandler constructor.
     * @param Form $form
     * @param Request $request
     */
    public function __construct(Form $form, Request $request) {
        $this->form = $form;
        $this->request = $request;
    }

    /**
     * @return Form
     */
    public function getForm(){
        return $this->form;
    }

    /***
     * @return bool
     */
    public function process() {
        $this->form->handleRequest($this->request);

        if($this->request->isMethod("post") && $this->form->isValid()) {
            return true;
        }

        return false;
    }

    /**
     *
     */
    public function onSuccess(){

    }

}