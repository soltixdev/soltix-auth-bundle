<?php
/**
 * SoltixAuthExtension.
 *
 * @author  SOLTIX <lukasz.m@soltix.pl>
 * @license <https://opensource.org/licenses/MIT> MIT
 */
declare(strict_types=1);


namespace Soltix\Bundle\AuthBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;

class SoltixAuthExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        dd(1);
        // TODO: Implement load() method.
    }
}
