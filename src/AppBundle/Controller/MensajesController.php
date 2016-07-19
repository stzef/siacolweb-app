<?php 

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query\ResultSetMapping;

class MensajesController extends Controller{


	//return view mensajes.index
	/**
	* @Route("/mensajes", name="mensajes")
	*/
	public function indexAction()
	{
		$user = $this->get('security.context')->getToken()->getUser();
		$mensajesRepository = $this->getDoctrine()
								->getRepository('AppBundle:Mensajes');

		$mensajes = $mensajesRepository->findBy(
			array(
				'receptor' => $user->getId(),
				'timensaje' => 1
			),
			array('fecha' => 'DESC')
			);

		$context = array(
				'mensajes' => $mensajes
			);

		return $this->render("mensajes/index.html.twig", $context); 
	}


}


 ?>
