<?php

namespace Psr\Cache;

/**
 * Tag support for cache driver
 */
interface TaggableDriverInterface extends DriverInterface
{
    /**
     * Get items that match the specified tag
     *
     * @param string $tag Tag name
     *
     * @return ItemInterface[]
     */
    public function getByTag($tag);

    /**
     * Get items that match all the tags list.
     * If the $mustHaveAll is set to false then any item matching
     * any tag from the list will be returned
     *
     * @param string[] $tags
     * @param Boolean  $mustHaveAll
     *
     * @return ItemInterface[]
     */
    public function getByTags(array $tags, $mustHaveAll = true);

    /**
     * Remove all the items that match the specified tag
     *
     * @param string $tag
     *
     * @param Boolean
     */
    public function removeByTag($tag);

    /**
     * Remove items that match the specified tag
     *
     * @param string[] $tags
     * @param Boolean  $mustHaveAll
     *
     * @return Boolean[]
     */
    public function removeByTags(array $tags, $mustHaveAll = true);

}
