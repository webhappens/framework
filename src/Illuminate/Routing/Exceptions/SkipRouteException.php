<?php

namespace Illuminate\Routing\Exceptions;

use Exception;

class SkipRouteException extends Exception
{
    /**
     * Create a new exception for missing route parameters.
     *
     * @param  \Illuminate\Routing\Route  $route
     * @return static
     */
    public static function for($route)
    {
        return new static("Route processing skipped [Route: {$route->getName()}] [URI: {$route->uri()}].");
    }
}
