<?php 

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\Query\ResultSetMapping;

class AgendaController extends Controller{


	//return view agenda.index
	/**
	* @Route("/agenda", name="agenda")
	*/
	public function indexAction()
	{
		$user = $this->get('security.context')->getToken()->getUser();
		$mensajesRepository = $this->getDoctrine()
								->getRepository('AppBundle:Mensajes');

		$agenda = $mensajesRepository->findBy(
			array(
				'receptor' => $user->getId(),
				'timensaje' => 2
			),
			array('fecha' => 'DESC')
			);

		$context = array(
				'agenda' => $agenda
			);

		return $this->render("agenda/index.html.twig", $context); 
	}


}


 ?>
