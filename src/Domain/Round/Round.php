<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 14:42
 */
declare(strict_types=1);

namespace CompanyRoulette\Domain\Round;


use CompanyRoulette\Domain\Round\Exception\CannotStartRoundException;

final class Round
{
    private const MINIMAL_PARTICIPANTS = 4;

    private $participants;

    public function __construct(array $participants)
    {
        $this->participants = $participants;
    }

    public function start(): void
    {
        if (\count($this->participants) < self::MINIMAL_PARTICIPANTS)
        {
            throw CannotStartRoundException::forMissingParticipants($this);
        }
    }

    public function minimalParticipants(): int
    {
        return self::MINIMAL_PARTICIPANTS;
    }
}
