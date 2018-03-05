<?php

namespace Reliv\SwaggerExpressive;

use Reliv\SwaggerExpressive\Api\BuildSwaggerConfig;
use Reliv\SwaggerExpressive\Api\BuildSwaggerConfigCompositeFactory;
use Reliv\SwaggerExpressive\Api\IsAllowedSwagger;
use Reliv\SwaggerExpressive\Api\IsAllowedSwaggerAnyFactory;
use Reliv\SwaggerExpressive\Api\IsSwaggerRoute;
use Reliv\SwaggerExpressive\Api\IsSwaggerRouteCompositeFactory;
use Reliv\SwaggerExpressive\Api\IsSwaggerRouteSwaggerKey;
use Reliv\SwaggerExpressive\Api\IsSwaggerRouteSwaggerKeyFactory;
use Reliv\SwaggerExpressive\Middleware\HttpApiIsAllowedSwagger;
use Reliv\SwaggerExpressive\Middleware\HttpApiIsAllowedSwaggerFactory;
use Reliv\SwaggerExpressive\Middleware\HttpApiSwagger;
use Reliv\SwaggerExpressive\Middleware\HttpApiSwaggerFactory;

/**
 * @author James Jervis - https://github.com/jerv13
 */
class ModuleConfigZFServiceManager
{
    /**
     * @return array
     */
    public function __invoke()
    {
        return [
            'dependencies' => [
                'factories' => [
                    BuildSwaggerConfig::class => BuildSwaggerConfigCompositeFactory::class,
                    IsAllowedSwagger::class => IsAllowedSwaggerAnyFactory::class,
                    IsSwaggerRoute::class => IsSwaggerRouteCompositeFactory::class,
                    IsSwaggerRouteSwaggerKey::class => IsSwaggerRouteSwaggerKeyFactory::class,
                    HttpApiIsAllowedSwagger::class => HttpApiIsAllowedSwaggerFactory::class,
                    HttpApiSwagger::class => HttpApiSwaggerFactory::class
                ],
            ],
        ];
    }
}
