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
        if ($event->getRequest()->headers->has('Authorization') === false) {
            return;
        }

        if ($event->getRequest()->headers->has('PHP_AUTH_USER') === false) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Text to send if user hits Cancel button';
            exit;
        } else {
            if (
                $event->getRequest()->headers->get('PHP_AUTH_USER') !== 'lma' &&
                $event->getRequest()->headers->get('PHP_AUTH_PW') !== 'lma'
            )
            {
                header('WWW-Authenticate: Basic realm="My Realm"');
                header('HTTP/1.0 401 Unauthorized');
                echo 'Text to send if user hits Cancel button';
                exit;
            }
        }
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
