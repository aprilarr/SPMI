<?php
/**
	Name : Route Configuration
	Description :
	storing routing definition	
*/

namespace System;

// we are using aura.router
use \Aura\Router\RouterFactory;

class RouteConfig
{
	public $router_map;

	public function RouterStart() {
		// get the incoming request URI path, remove the base url		
		$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		// get the route based on the path and server					
		return $this->RouterCollection()->match($path, $_SERVER);		
	}

	private function RouterCollection() {		
		if (!isset($this->router_map)) {			
			$router_factory = new RouterFactory(BASE_URL);
			$router = $router_factory->newInstance();

			// Route Configuration
			$routeconfig = json_decode(ROUTE_CONFIG);			

			foreach ((array)$routeconfig as $key => $routevalue) {    				
				$arg = null;
				$arg["controller"] = $routevalue->controller;
		    	if (isset($routevalue->action))  {
		    		$arg["action"] = $routevalue->action; 
		    	} else {
		    		$routevalue->path .= "/{action}";
		    	}
		    	if (isset($routevalue->parameter)){
		    		$arg["parameter"] = $routevalue->parameter;	
		    	} 
		    	if (isset($routevalue->wildcard)) {
		    		$router->add($key, $routevalue->path)			    	
						->addValues($arg)
						->setWildcard('parameter');	
		    	} else {
			    	$router->add($key, $routevalue->path)			    	
						->addValues($arg); 
				}
			}

			// default routing			
			$router->add('default', '{/controller,action}')
				->setValues(['controller' => 'home','action' => 'index'])
		    	->setWildcard('parameter');
		    /*
			$router->add(null, '/');
			$router->add(null, '/{controller}');
			$router->add(null, '/{controller}/');
			$router->add(null, '/{controller}/{action}/')				
				->setWildcard('parameter'); // with parameter*/

/*
* more example of routing
* http://auraphp.com/packages/2.x/Router.html#2-10
*/
			$this->router_map = $router;
		}

		return $this->router_map;
	}
/*
	private function ReadRouteConfig()
	{
		// Instantiate new Database object		
		$routeConfigModel = new \System\BaseModel("routeconfig");		
		$routeConfigData = $routeConfigModel->getall();
		if (isset($routeConfigData)) {			
			return $routeConfigData;
		} else {
			return null;
		}
	}
*/
}
?>