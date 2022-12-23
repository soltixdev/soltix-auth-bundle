<?php
/**
 * SoltixAuthBundle.
 *
 * @author  SOLTIX <lukasz.m@soltix.pl>
 * @license <https://opensource.org/licenses/MIT> MIT
 */
declare(strict_types=1);


namespace Solixdev\SoltixAuthBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SoltixAuthBundle extends Bundle
{
    /**
     * @return string
     */
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
