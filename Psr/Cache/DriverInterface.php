<?php

namespace Psr\Cache;

/**
 * Interface for cache drivers
 */
interface DriverInterface
{
    /**
     * Set data into cache.
     *
     * @param string $key      Entry id
     * @param mixed  $value    Cache entry
     * @param int    $lifeTime Life time of the cache entry
     *
     * @return boolean
     */
    public function set($key, $value, $lifeTime = 0);

    /**
     * Check if an entry exists in cache
     *
     * @param string $key Entry id
     *
     * @return boolean
     */
    public function exists($key);

    /**
     * Get an entry from the cache
     *
     * @param string $key Entry id
     * @param boolean|null $exists If the operation was succesfull or not
     *
     * @return mixed The cached data or FALSE
     */
    public function get($key, &$exists = null);

    /**
     * Removes a cache entry
     *
     * @param string $key Entry id
     *
     * @return boolean
     */
    public function remove($key);

    /**
     * If this driver has support for serialization or not
     *
     * @return boolean
     */
    public function hasSerializationSupport();

}
