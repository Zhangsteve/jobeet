<?php

namespace Ens\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ens\JobeetBundle\Form\EnquiryType;
use Ens\JobeetBundle\Entity\Enquiry;
class PagesController  extends Controller
{
    public function indexAction()
    {
        return $this->render('EnsJobeetBundle:Pages:index.html.twig');
    }
    public function aboutAction()
    {
        return $this->render('EnsJobeetBundle:Pages:about.html.twig');
    }
    public function contactAction()
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(new EnquiryType(), $enquiry);
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bindRequest($request);
            if ($form->isValid()) {
                return $this->redirect($this->generateUrl('EnsJobeetBundle_contact'));
            }
        }
        return $this->render('EnsJobeetBundle:Pages:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
