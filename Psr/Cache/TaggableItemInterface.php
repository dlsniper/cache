<?php

namespace Psr\Cache;

/**
 * CacheItem with tag support
 */
interface TaggableItemInterface extends ItemInterface
{
    /**
     * Get the tags of an item
     *
     * @return string[]
     */
    public function getTags();

    /**
     * Set the tags of an item
     *
     * @param array $tags
     *
     * @return ItemInterface
     */
    public function setTags(array $tags);

}
