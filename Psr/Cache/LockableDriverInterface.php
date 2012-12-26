<?php

namespace Psr\Cache;

/**
 * Lock support for cache driver
 */
interface LockableDriverInterface extends DriverInterface
{
    const READ_ONLY_LOCK = 1;
    const READ_WRITE_LOCK = 2;

    /**
     * Lock a certain entry for the specified amount of time in microseconds
     *
     * @param string $item
     * @param int    $lifeTime
     * @param int    $lockType
     *
     * @return Boolean
     */
    public function lock($item, $lifeTime, $lockType = LockableDriverInterface::READ_ONLY_LOCK);

    /**
     * Unlock the specified entry
     *
     * @param string $item
     *
     * @return Boolean
     */
    public function unlock($item);

}
