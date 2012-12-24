<?php

namespace Psr\Cache;

/**
 * Interface for caching object
 */
interface ItemInterface
{
    /**
     * Set the value of the key to store our value under
     *
     * @param string $cacheKey
     *
     * @return ItemInterface
     */
    public function setKey($cacheKey);

    /**
     * Get the key of the object
     *
     * @return string
     */
    public function getKey();

    /**
     * Set the value to be stored in the cache
     *
     * @param mixed $cacheValue
     *
     * @return ItemInterface
     */
    public function setValue($cacheValue);

    /**
     * Get the value of the object
     *
     * @return mixed
     */
    public function getValue();

    /**
     * Set the TTL value
     *
     * @param int $ttl
     *
     * @return ItemInterface
     */
    public function setTtl($ttl);

    /**
     * Get the TTL of the object
     *
     * @return int
     */
    public function getTtl();

    /**
     * Get the remaining time in seconds until the item will expire
     * The implementation should save the expiry time in the item metadata on
     * save event and then retrieve it from the object metadata and substract
     * it from the current time
     *
     * *Note* certain delays can occur as the save event won't be able to
     * provide actual save time of when the user called the save method and
     * the real save time when the driver will save the item
     *
     * @return int
     */
    public function getRemainingTtl();

    /**
     * Set a metadata value
     *
     * @param string $key
     * @param mixed $value
     *
     * @return ItemInterface
     */
    public function setMetadata($key, $value);

    /**
     * Do we have any metadata with the object
     *
     * @param string|null $key
     *
     * @return boolean
     */
    public function hasMetadata($key = null);

    /**
     * Get parameter/key from the metadata
     *
     * @param string|null $key
     *
     * @return mixed
     */
    public function getMetadata($key = null);

}
