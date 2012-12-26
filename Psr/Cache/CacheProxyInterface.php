<?php

namespace Psr\Cache;

use Psr\Cache\ItemInterface;
use Psr\Cache\DriverInterface;

/**
 * This is our cache proxy
 */
interface CacheProxyInterface
{

    /**
     * Set the cache driver
     *
     * @param DriverInterface $cacheDriver
     *
     * @return CacheProxyInterface
     */
    public function setCacheDriver(DriverInterface $cacheDriver);

    /**
     * Set the custom serializer function which will be used when the
     * cache driver does not support serialization
     *
     * @param callable $serializer
     *
     * @return CacheProxyInterface
     */
    public function setSerializer($serializer);

    /**
     * Get the default TTL of the instance in seconds
     *
     * @return int
     */
    public function getDefaultTtl();

    /**
     * Set the default TTL of the instance
     *
     * @param $defaultTtl
     *
     * @return CacheProxyInterface
     */
    public function setDefaultTtl($defaultTtl);

    /**
     * Get cache entry
     *
     * @param string|ItemInterface $key
     * @param boolean|null $exists
     *
     * @return ItemInterface
     */
    public function get($key, &$exists = null);

    /**
     * Check if a cache entry exists
     *
     * @param string|ItemInterface $key
     *
     * @return boolean
     */
    public function exists($key);

    /**
     * Set a single cache entry
     *
     * @param ItemInterface $cacheItem
     *
     * @return boolean Result of the operation
     */
    public function set(ItemInterface $cacheItem);

    /**
     * Remove a single cache entry
     *
     * @param string|ItemInterface $key
     *
     * @return boolean Result of the operation
     */
    public function remove($key);

    /**
     * Set multiple keys in the cache
     * If $ttl is not passed then the default TTL for this driver will be used
     *
     * @param string[]|ItemInterface[]|mixed[] $items
     * @param null|int $ttl
     */
    public function setMultiple(array $items, $ttl = null);

    /**
     * Get multiple keys the cache
     *
     * @param string[]|ItemInterface[]|mixed[] $keys
     *
     * @return ItemInterface[]
     */
    public function getMultiple($keys);

    /**
     * Remove multiple keys from the cache
     *
     * @param string[]|ItemInterface[]|mixed[] $keys
     */
    public function removeMultiple($keys);

    /**
     * Check if multiple keys exists in the cache
     *
     * @param string[]|ItemInterface[]|mixed[] $keys
     *
     * @return boolean[]
     */
    public function existsMultiple($keys);

}
