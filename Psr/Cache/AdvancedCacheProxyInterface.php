<?php

namespace Psr\Cache;

/**
 * This proxy implements several method not found in CacheProxyInterface
 */
interface AdvancedCacheProxyInterface extends CacheProxyInterface
{
    /**
     * Lock a certain entry for the specified amount of time in microseconds
     *
     * @param ItemInterface $item
     * @param int           $lifeTime
     *
     * @return Boolean
     */
    public function lock(ItemInterface $item, $lifeTime);

    /**
     * Unlock the specified entry
     *
     * @param ItemInterface $item
     *
     * @return Boolean
     */
    public function unlock(ItemInterface $item);

    /**
     * Set the namespace separator used by the cache driver
     *
     * @param $separator
     *
     * @return AdvancedCacheProxyInterface
     */
    public function setNamespaceSeparator($separator);

    /**
     * Get the namespace separator used by the cache driver
     *
     * @return $string
     */
    public function getNamespaceSeparator();

    /**
     * Get items that match the specified namespace
     * If $includingChildren is set to true then the all the children from
     * the subnamespaces will be retrieved as well
     *
     * @param string  $namespace
     * @param Boolean $includingChildren
     *
     * @return ItemInterface[]
     */
    public function getByNamespace($namespace, $includingChildren = false);

    /**
     * Remove items that match the specified namespace
     * If $includingChildren is set to true then the all the children from
     * the subnamespaces will be removed as well
     *
     * @param string  $namespace
     * @param Boolean $includingChildren
     */
    public function removeByNamespace($namespace, $includingChildren = false);

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