<?php

/*
 * This file is part of the PhpMob package.
 *
 * (c) Ishmael Doss <nukboon@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace PhpMob\Settings\Manager;

/**
 * @author Ishmael Doss <nukboon@gmail.com>
 */
interface SettingManagerInterface
{
    /**
     * @param string $section
     * @param string $key
     * @param $value
     * @param string|null $owner
     * @param bool $autoFlush
     */
    public function setSetting(string $section, string $key, $value, ?string $owner = null, $autoFlush = false): void;

    /**
     * @param string $section
     * @param string $key
     * @param string|null $owner
     *
     * @return mixed
     */
    public function getSetting(string $section, string $key, ?string $owner = null);

    /**
     * @param string $path
     * @param string|null $owner
     *
     * @return mixed
     */
    public function get(string $path, ?string $owner = null);

    /**
     * @param string $path
     * @param $value
     * @param string|null $owner
     */
    public function set(string $path, $value, ?string $owner = null): void;

    /**
     * Flush
     */
    public function flush(): void;
}
