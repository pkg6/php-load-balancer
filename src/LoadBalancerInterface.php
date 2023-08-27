<?php

namespace pkg6\LoadBalancer;

/**
 * Interface LoadBalancerInterface.
 */
interface LoadBalancerInterface
{
    /**
     * @return mixed
     */
    public function next();
}
