<?php

namespace XL2TP\Interfaces;

use InvalidArgumentException;

/**
 * Interface SectionInterface
 *
 * @package XL2TP\Interfaces
 * @since   1.0.0
 */
interface SectionInterface
{
    /**
     * Check if section has provided parameter
     *
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Set parameter of section
     *
     * @param string $key
     * @param string $value
     *
     * @return SectionInterface
     */
    public function set(string $key, string $value): SectionInterface;

    /**
     * Get value of section
     *
     * @param string $key
     *
     * @return string
     * @throws InvalidArgumentException
     */
    public function get(string $key): string;

    /**
     * Remove provided parameter
     *
     * @param string $key
     *
     * @return void
     */
    public function unset(string $key): void;
}
