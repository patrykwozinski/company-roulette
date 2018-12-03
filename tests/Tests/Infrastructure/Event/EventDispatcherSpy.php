<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 15:57
 */
declare(strict_types=1);

namespace Tests\Infrastructure\Event;


use CompanyRoulette\Domain\Shared\EventDispatcherInterface;
use CompanyRoulette\Domain\Shared\EventInterface;

final class EventDispatcherSpy implements EventDispatcherInterface
{
    /** @var array */
    private $dispatchedEvents;

    public function __construct()
    {
        $this->dispatchedEvents = [];
    }

    public function dispatch(EventInterface $event): void
    {
        $this->dispatchedEvents[$event->name()] = $event;
    }

    public function spyDispatched(string $eventName): bool
    {
        return isset($this->dispatchedEvents[$eventName]);
    }
}
