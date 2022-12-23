<?php
/**
 * SoltixAuthEventListener.
 *
 * @author  SOLTIX <lukasz.m@soltix.pl>
 * @license <https://opensource.org/licenses/MIT> MIT
 */
declare(strict_types=1);


namespace Soltix\Bundle\AuthBundle\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class SoltixAuthSubscriber implements EventSubscriberInterface
{

    public function onKernelRequest(RequestEvent $event)
    {


    }//end onKernelRequest()

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => [
                [
                    'onKernelRequest',
                    15,
                ],
            ],
        ];
    }
}
