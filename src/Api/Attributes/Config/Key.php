<?php

declare(strict_types=1);

namespace Efortmeyer\Polar\Api\Attributes\Config;

use Stringable;

/**
 * Use to register attribute configurations.
 */
abstract class Key implements Stringable
{
    protected static string $key;

    /**
     * Returns the string representation of this key.
     *
     * @api
     */
    abstract public function getKey(): string;
}
