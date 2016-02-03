<?php 

namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Controller\InitController;
use AppBundle\Controller\SecurityController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
* 
*/
class EnvironmentListener extends ContainerAware
{
	/*
	* Filtro verificacion de environment en Session
	*/
	public function environmentSessionController (FilterControllerEvent $event)
	{

		$securityChecker = $this->container->get('security.authorization_checker');


		$controller = $event->getController();
		$session = new Session();
		$environment = $session->get('environment');

		$request = $event->getRequest();

		/*
		if ($request->get('_route') == '') {
			$redirectInit = '/init';
			$event->setController(function() use ($redirectInit) {
					return new RedirectResponse($redirectInit);
				});
		}*/

		if ( isset($environment))
		{
			if ( $controller[0] instanceof InitController)
			{
				if ( $securityChecker->isGranted('IS_AUTHENTICATED_FULLY'))
				{
					$redirectUrl = '/menu';
					$event->setController(function() use ($redirectUrl) {
						return new RedirectResponse($redirectUrl);
					});
				}
				else{
					if ($controller[0] instanceof SecurityController) {
						return;
					}
					else{
						$redirectUrl = '/login';
						$event->setController(function() use ($redirectUrl) {
							return new RedirectResponse($redirectUrl);
						});
					}
				}
			}
		}
		else{
			if(!($controller[0] instanceof InitController))
			{
				$redirectUrl = '/init';
				$event->setController(function() use ($redirectUrl) {
					return new RedirectResponse($redirectUrl);
				});
			}
			else{
				return;
			}
		}
	}
}

