<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 15:52
 */
declare(strict_types=1);

namespace CompanyRoulette\Domain\Shared;


abstract class EventSourcedAggregate
{
    /** @var EventDispatcherInterface */
    private $eventDispatcher;

    public function registerEventDispatcher(EventDispatcherInterface $eventDispatcher): void
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    public function eventDispatcher(): EventDispatcherInterface
    {
        return $this->eventDispatcher;
    }
}
