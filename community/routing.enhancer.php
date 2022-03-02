<?php
namespace \Comm\Routing;

use Symfony\Cmf\Component\Routing\Enhancer\RouteEnhancerInterface;
use Symfony\Component\HttpFoundation\Request;

class Enhancer implements RouteEnhancerInterface
{
    public function enhance(array $defaults, Request $request)
    {
        // ... customize the $defaults array

        echo "something";
        exit;

        return $defaults;
    }
}