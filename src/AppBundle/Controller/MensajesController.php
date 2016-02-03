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

		/*$mensajes = $mensajesRepository->findBy(
			array('receptor' => $user->getId()),
			array('fecha' => 'DESC')
			);
		*/

		$em = $this->getDoctrine()->getManager();
		// Configuracion de la entidad a adoptar la consulta
		$rsm = new ResultSetMapping();

		$rsm->addEntityResult('AppBundle:Mensajes', 'u');
		$rsm->addFieldResult('u', 'emisor', 'emisor');
		$rsm->addFieldResult('u', 'receptor', 'receptor');
		$rsm->addFieldResult('u', 'receptor', 'receptor');
		$rsm->addFieldResult('u', 'fecha', 'fecha');

		$query = $em->createNativeQuery('SELECT usuarios.alias AS emisor, mensajes.receptor, mensajes.mensaje, mensajes.fecha 
			FROM mensajes, usuarios WHERE mensajes.receptor =? AND mensajes.emisor = usuarios.id',
			$rsm);

		// set parametros al query
		$query->setParameter(1, $user->getId());

		$mensajes = $query->getResult();

		var_dump($mensajes);
		exit();

		$context = array(
				'mensajes' => $mensajes
			);

		return $this->render("mensajes/index.html.twig", $context); 
	}


}


 ?>