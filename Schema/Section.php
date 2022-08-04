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

namespace PhpMob\Settings\Schema;

/**
 * @author Ishmael Doss <nukboon@gmail.com>
 */
class Section implements \JsonSerializable
{
    /**
     * @var array
     */
    private $data = [];

    /**
     * @var SettingSchema[]
     */
    private $settings = [];

    public function __construct($name, array $data)
    {
        $this->data['name'] = $name;

        foreach ($data as $key => $value) {
            if ('settings' === $key) {
                $this->initSettings($value);
            } else {
                $this->data[$key] = $value;
            }
        }
    }

    /**
     * @param array $settings
     */
    private function initSettings(array $settings): void
    {
        foreach ($settings as $schemaKey => $schemaData) {
            $this->settings[$schemaKey] = new SettingSchema($this, $schemaKey, $schemaData);
        }
    }

    /**
     * @return bool
     */
    public function isOwnerAware(): bool
    {
        return $this->data['owner_aware'];
    }

    /**
     * @return bool
     */
    public function isEnabled(): bool
    {
        return $this->data['enabled'];
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->data['label'];
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->data['description'];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->data['name'];
    }

    /**
     * @param string $key
     *
     * @return SettingSchema
     *
     * @throws \InvalidArgumentException
     */
    public function getSetting($key): SettingSchema
    {
        if (!$this->hasSetting($key)) {
            throw new \InvalidArgumentException("No setting key `$key` in this section.`");
        }

        return $this->settings[$key];
    }

    /**
     * @param string $key
     *
     * @return bool
     */
    public function hasSetting(string $key): bool
    {
        return array_key_exists($key, $this->settings);
    }

    /**
     * @return SettingSchema[]
     */
    public function getSettings(): array
    {
        return array_values($this->settings);
    }

    /**
     * {@inheritdoc}
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        return array_merge($this->data, [
            'settings' => $this->settings,
        ]);
    }
}
