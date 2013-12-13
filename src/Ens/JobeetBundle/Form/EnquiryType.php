<?php
// src/Ens/JobeetBundle/Form/EnquiryType.php

namespace Ens\JobeetBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

class EnquiryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $optionss)
    {
        $builder->add('name');
        $builder->add('email', 'email');
        $builder->add('subject');
        $builder->add('body', 'textarea');
    }

    public function getName()
    {
        return 'contact';
    }
}