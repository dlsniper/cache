<?php

namespace Psr\Cache;

use Psr\Cache\DriverInterface;
use Psr\Cache\BatchDriverInterface;

/**
 * Basic CacheProxy to reduce the code bolierplate
 */
abstract class AbstractCacheProxy implements CacheProxyInterface {

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
     * {@inheritdoc}
     */
    public function setCacheDriver(DriverInterface $cacheDriver)
    {
        $this->cacheDriver = $cacheDriver;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultTtl()
    {
        return $this->ttl;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultTtl($defaultTtl) {
        $this->ttl = $defaultTtl;

        return $this;
    }

}
