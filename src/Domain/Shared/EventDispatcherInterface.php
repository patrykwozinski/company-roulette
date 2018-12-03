<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 15:53
 */
declare(strict_types=1);

namespace CompanyRoulette\Domain\Shared;


interface EventDispatcherInterface
{
    public function dispatch(EventInterface $event): void;
}
