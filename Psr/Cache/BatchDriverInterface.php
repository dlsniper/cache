<?php

namespace Psr\Cache;

/**
 * Interface for cache drivers that can support multiple operations at once
 */
interface BatchDriverInterface extends DriverInterface
{

    /**
     * Stores multiple items in the cache at once.
     *
     * The items must be provided as an associative array.
     *
     * @param array $items
     * @param int   $ttl
     *
     * @return boolean[]
     */
    public function setMultiple(array $items, $ttl = 0);

    /**
     * Fetches multiple items from the cache.
     *
     * The returned structure must be an associative array. If items were
     * not found in the cache, they should not be included in the array.
     *
     * This means that if none of the items are found, this method must
     * return an empty array.
     *
     * @param array $keys
     *
     * @return array
     */
    public function getMultiple(array $keys);

    /**
     * Deletes multiple items from the cache at once.
     *
     * @param array $keys
     *
     * @return boolean[]
     */
    public function removeMultiple(array $keys);

    /**
     * Check for multiple items if they appear in the cache.
     *
     * All items must be returned as an array. And each must array value
     * must either be set to true, or false.
     *
     * @param array $keys
     *
     * @return array
     */
    public function existsMultiple(array $keys);

    /**
     * If this driver has support for serialization or not
     *
     * @return boolean
     */
    public function hasSerializationSupport();

}
