<?php

namespace App\Subscriber;

use App\Exception\InertiaRequestException;
use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class InertiaExceptionSubscriber implements EventSubscriberInterface
{
    private InertiaInterface $inertia;

    public function __construct(InertiaInterface $inertia)
    {
        $this->inertia = $inertia;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $error = $event->getThrowable();
        if (!$error instanceof InertiaRequestException) {
            return;
        }

        $statusCode = $error->getStatusCode();
        $message = !empty($error->getMessage()) ? $error->getMessage() : Response::$statusTexts[$statusCode];

        $event->setResponse(
            $this->inertia->render('Error', [
                'statusCode' => $statusCode,
                'message' => $message,
            ]),
        );
    }
}
