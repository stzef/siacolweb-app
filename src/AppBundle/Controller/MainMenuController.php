<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;

class MainMenuController extends Controller {

	//Security("has_role('ROLE_ADMIN')")
	// return view main_menu.index
		/**
		 * @Route("/menu", name="menu")
		 * @Security("has_role('A')")
		 */
	public function indexAction(Request $request)
	{

		$user = $this->get('security.context')->getToken()->getUser();

		$mensajesRepository = $this->getDoctrine()
								->getRepository('AppBundle:Mensajes');

		$queryMensajes = $mensajesRepository->createQueryBuilder('mensajes')
								->select('COUNT(mensajes)')
								->where('mensajes.receptor = :receptor AND mensajes.timensaje = 1')
								->setParameter('receptor',$user->getId());

		$queryAgenda = $mensajesRepository->createQueryBuilder('mensajes')
								->select('COUNT(mensajes)')
								->where('mensajes.receptor = :receptor AND mensajes.timensaje = 2')
								->setParameter('receptor',$user->getId());

		$mensajes = $queryMensajes->getQuery()->getSingleScalarResult();
		$mensajesAgenda = $queryAgenda->getQuery()->getSingleScalarResult();

		$foreingUser = $this->getForeignUser($user);

		$context = array(
				'usuario' => $user,
				'foreingUser' => $foreingUser,
				'numero_mensajes' => $mensajes,
				'numero_mensajes_genda' => $mensajesAgenda
			);

		return $this->render("main_menu/index.html.twig", $context);
	}

	public function getForeignUser($user)
	{
		$foreingUser = null;
		$rol = $user->getRoles()[0];
		switch ($rol) {
			case 'A':
				$rp = $this->getDoctrine()->getRepository('AppBundle:Alumnos');
				$alumno = $rp->findOneBy(array('calum' => $user->getProfalum()));
				$foreingUser = $alumno;
				break;
			default:
				break;
		}

		return $foreingUser;
	}

}
