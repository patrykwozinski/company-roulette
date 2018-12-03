<?php
/**
 * Created by PhpStorm.
 * User: freeq
 * Date: 03/12/2018
 * Time: 14:19
 */
declare(strict_types=1);

namespace CompanyRoulette\Application\CommandHandler;


use CompanyRoulette\Application\Command\CommandInterface;

interface CommandHandlerInterface
{
    public function handle(CommandInterface $command): void;
}
