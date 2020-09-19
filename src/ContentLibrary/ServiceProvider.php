<?php

namespace Concrete5\ContentLibrary;

use Concrete5\ContentLibrary\api\Content;
use Concrete\Core\Foundation\Service\Provider;
use Concrete\Core\Http\Middleware\FractalNegotiatorMiddleware;
use Concrete\Core\Routing\Router;

class ServiceProvider extends Provider
{
    public function register()
    {
        $this->registerAPI();
    }

    protected function registerApi() 
    {
        /**
         * @var $router Router
         */
        $router = $this->app->make('router');
        
        $router->buildGroup()
            ->setPrefix('api/v1')
            ->addMiddleware(FractalNegotiatorMiddleware::class)
            ->routes(function($groupRouter)
            {
                /**
                * @var $groupRouter Router
                */
                $groupRouter->get('/get/page/{path}', [Content::class, 'getContent']);
            });
    }
}