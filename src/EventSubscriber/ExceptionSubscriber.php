<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionSubscriber implements EventSubscriberInterface
{
    public function onKernelException(ExceptionEvent $event): void
    {
        $exeception = $event->getThrowable();
        if($exeception instanceof HttpException){
            $data = [
                "statut" => $exeception->getStatusCode(),
                "message" => $exeception->getMessage()
            ];

            $event->setResponse(new JsonResponse($data));
        }else{
            $data = [
                "status" => 500,
                "message" => $exeception->getMessage()
            ];
            $event->setResponse(new JsonResponse($data));
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }
}
