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

namespace PhpMob\Settings\Type;

use Symfony\Component\Yaml\Yaml;

/**
 * @author Ishmael Doss <nukboon@gmail.com>
 */
class YamlType implements TypeInterface
{
    /**
     * {@inheritdoc}
     *
     * value: |
            user_registration:
                subject: "User Registration"
                template: "@PhpMobCms/tpls/email/registration.html.twig"
            verification_token:
                subject: "User Verification"
                template: "@PhpMobCms/tpls/email/verification.html.twig"
     */
    public static function getName()
    {
        return 'yaml';
    }

    /**
     * @param mixed $value
     *
     * @return array
     */
    public function getter($value)
    {
        return Yaml::parse($value);
    }

    /**
     * @param mixed $value
     *
     * @return string
     */
    public function setter($value)
    {
        return Yaml::dump($value);
    }
}
