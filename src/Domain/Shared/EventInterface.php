<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 15:54
 */
declare(strict_types=1);

namespace CompanyRoulette\Domain\Shared;


interface EventInterface
{
    public function name(): string;
}
