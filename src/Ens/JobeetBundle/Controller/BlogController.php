<?php
namespace Ens\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController  extends Controller
{
  /**
   * Show a blog entry
   */
  public function showAction($id){

    //if you just want to fetch data from database , this line is not need
    // you can use $this->getDoctrine()->getRepository , because getRepository() returning Doctrine\ORM\EntityRepository it contains
    // a entitymanager object $em .
    $em = $this->getDoctrine()->getEntityManager();

    $blog = $em->getRepository('EnsJobeetBundle:Blog')->find($id);

    if (!$blog) {
        throw $this->createNotFoundException('Unable to find Blog post.');
    }

    return $this->render('EnsJobeetBundle:Blog:show.html.twig', array(
        'blog' => $blog,
    ));
  }

}
