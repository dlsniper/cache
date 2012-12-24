<?php

namespace Psr\Cache;

use Psr\Cache\DriverInterface;
use Psr\Cache\BatchDriverInterface;

/**
 * Basic trait for
 */
trait CacheProxyTrait {

    /**
     * The cache driver
     *
     * @var DriverInterface|BatchDriverInterface
     */
    protected $cacheDriver;

    /**
     * Default TTL in seconds
     *
     * @var int
     */
    protected $ttl;

    /**
     * Set the cache driver
     *
     * @param DriverInterface $cacheDriver
     *
     * @return CacheProxyInterface
     */
    public function setCacheDriver(DriverInterface $cacheDriver)
    {
        $this->cacheDriver = $cacheDriver;

        return $this;
    }

    /**
     * Get the default TTL of the instance in seconds
     *
     * @return int
     */
    public function getDefaultTtl()
    {
        return $this->ttl;
    }

    /**
     * Set the default TTL of the instance
     *
     * @param $defaultTtl
     *
     * @return CacheProxyInterface
     */
    public function setDefaultTtl($defaultTtl) {
        $this->ttl = $defaultTtl;

        return $this;
    }

}
