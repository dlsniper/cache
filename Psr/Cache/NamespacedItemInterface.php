<?php

namespace Psr\Cache;

/**
 * CacheItem with namespace support
 */
interface NamespacedItemInterface extends ItemInterface
{
    /**
     * Get the namespace of the cache item
     *
     * @return string
     */
    public function getNamespace();

    /**
     * Set the namespace of the cache item
     *
     * @param string $namespace
     *
     * @return ItemInterface
     */
    public function setNamespace($namespace);

}
