<?php
/**
 * Configuration.
 *
 * @author  SOLTIX <lukasz.m@soltix.pl>
 * @license <https://opensource.org/licenses/MIT> MIT
 */
declare(strict_types=1);


namespace Soltix\Bundle\AuthBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('soltix_auth');

        $treeBuilder->getRootNode()
            ->children()
                ->arrayNode('basic_auth')
                    ->children()
                        ->scalarNode('realm')->end()
                        ->scalarNode('users')->end()
                    ->end()
                ->end() // basic_auth
            ->end()
        ;

        return $treeBuilder;
    }
}
