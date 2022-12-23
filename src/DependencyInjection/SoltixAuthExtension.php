<?php
/**
 * SoltixAuthExtension.
 *
 * @author  SOLTIX <lukasz.m@soltix.pl>
 * @license <https://opensource.org/licenses/MIT> MIT
 */
declare(strict_types=1);


namespace Soltix\Bundle\AuthBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class SoltixAuthExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration =  new Configuration();

        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../../config')
        );
        $loader->load('services.yaml');
    }
}
