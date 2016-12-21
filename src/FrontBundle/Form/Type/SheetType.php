<?php

namespace FrontBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SheetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add("Name")
            ->add("Type")
            ->add("Duration")
            ->add("Released", "date")
            ->add("Submit", "submit")
        ;
    }

    public function getName()
    {
        return "sheetForm";
    }


}


