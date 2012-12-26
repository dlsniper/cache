<?php

namespace Psr\Cache;

/**
 * Namespace support for cache driver
 */
interface NamespacedDriverInterface extends DriverInterface
{
    /**
     * Set the namespace separator used by the cache driver
     *
     * @param $separator
     *
     * @return NamespacedDriverInterface
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

}
