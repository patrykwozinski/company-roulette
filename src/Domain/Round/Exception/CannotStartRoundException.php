<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 14:39
 */
declare(strict_types=1);

namespace CompanyRoulette\Domain\Round\Exception;


use CompanyRoulette\Domain\Round\Round;

final class CannotStartRoundException extends \LogicException
{
    public static function forMissingParticipants(Round $round): self
    {
        $message = \sprintf('Can not start round - missing participants. Minimal: %d', $round->minimalParticipants());

        return new self($message);
    }
}
