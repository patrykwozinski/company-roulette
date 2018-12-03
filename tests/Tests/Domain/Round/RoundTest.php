<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 14:26
 */
declare(strict_types=1);

namespace Tests\Domain\Round;


use CompanyRoulette\Domain\Round\Exception\CannotStartRoundException;
use CompanyRoulette\Domain\Round\Round;
use Tests\TestCase;

final class RoundTest extends TestCase
{
    /**
     * @test
     */
    public function it_do_not_starts_when_missing_participants(): void
    {
        $this->expectException(CannotStartRoundException::class);

        $round = new Round([]);
        $round->start();
    }
}
