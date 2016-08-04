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
		$mensajesRepository = $this->getDoctrine()->getRepository('AppBundle:Mensajes');

		/*
		$agenda = $this->getDoctrine()->getEntityManager()
			->createQuery('SELECT mensajes
			FROM AppBundle:Mensajes mensajes
			WHERE mensajes.receptor = :receptor AND mensajes.timensaje = 2'
		)
		->setParameter('receptor', $user->getId())
		->getResult();
		*/
		$agenda = $this->getDoctrine()->getEntityManager()
			->createQuery('
				SELECT mensajes.emisor,mensajes.receptor,mensajes.fecha,mensajes.mensaje,mensajes.ifvisto,mensajes.cmensaje, profesores.nom1profe, profesores.ape1profe
				FROM AppBundle:Mensajes mensajes
				INNER JOIN AppBundle:Profes profesores
				WHERE mensajes.timensaje= 2 AND mensajes.receptor = :receptor AND profesores.cprofe IN (SELECT usuarios.profalum FROM AppBundle:Usuarios usuarios WHERE usuarios.alias = mensajes.emisor)'
			)
		->setParameter('receptor', $user->getId())
		->getResult();
		/*
		$agenda = $mensajesRepository->findBy(
			array(
				'receptor' => $user->getId(),
				'timensaje' => 2
			),
			array('fecha' => 'DESC')
		);
		*/

		$context = array(
				'agenda' => $agenda
			);

		return $this->render("agenda/index.html.twig", $context); 
	}


}


 ?>
