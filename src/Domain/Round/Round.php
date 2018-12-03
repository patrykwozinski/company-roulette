<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 14:42
 */
declare(strict_types=1);

namespace CompanyRoulette\Domain\Round;


use CompanyRoulette\Domain\Round\Event\RoundStartedEvent;
use CompanyRoulette\Domain\Round\Exception\CannotStartRoundException;
use CompanyRoulette\Domain\Shared\EventSourcedAggregate;

final class Round extends EventSourcedAggregate
{
    private const MINIMAL_PARTICIPANTS = 4;

    private $participants;

    /** @var \DateTimeInterface | null */
    private $startedAt;

    public function __construct(array $participants)
    {
        $this->participants = $participants;
    }

    public function start(): void
    {
        if (self::MINIMAL_PARTICIPANTS > \count($this->participants))
        {
            throw CannotStartRoundException::forMissingParticipants($this);
        }

        $this->startedAt = new \DateTimeImmutable('now');

        $this->eventDispatcher()->dispatch(new RoundStartedEvent);
    }

    public function startedAt(): ?\DateTimeInterface
    {
        return $this->startedAt;
    }

    public function minimalParticipants(): int
    {
        return self::MINIMAL_PARTICIPANTS;
    }
}
