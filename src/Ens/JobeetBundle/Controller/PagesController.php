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
            $form->bind($request);
        if ($form->isValid()) {
        $arrContact = $request->request->get('contact');
        $message = \Swift_Message::newInstance()
            ->setSubject('Contact enquiry from symblog')
            ->setFrom($this->container->getParameter('jobeet.emails.contact_email'))
            ->setTo($arrContact['email'])
            ->setBody($this->renderView('EnsJobeetBundle:Pages:contactEmail.txt.twig', array('enquiry' => $enquiry)));

        $this->get('mailer')->send($message);
        $this->get('session')->getFlashBag()->set('Jobeet-notice', 'Your contact enquiry was successfully sent. Thank you!');
        // Redirect - This is important to prevent users re-posting
        // the form if they refresh the page
        return $this->redirect($this->generateUrl('ens_jobeet_contact'));
        }
      }
        return $this->render('EnsJobeetBundle:Pages:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
