<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 16:03
 */
declare(strict_types=1);

namespace CompanyRoulette\Domain\Round\Event;


use CompanyRoulette\Domain\Shared\EventInterface;

final class RoundStartedEvent implements EventInterface
{
    private const NAME = 'domain.round.started';

    public function name(): string
    {
        return self::NAME;
    }
}
