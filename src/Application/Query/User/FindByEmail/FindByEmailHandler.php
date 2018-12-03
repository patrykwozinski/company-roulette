<?php

declare(strict_types=1);

namespace App\Application\Query\User\FindByEmail;

use App\Application\Query\Item;
use App\Application\Query\QueryHandlerInterface;
use App\Domain\User\Query\Projections\UserViewInterface;
use App\Domain\User\Query\Repository\UserReadModelRepositoryInterface;

class FindByEmailHandler implements QueryHandlerInterface
{
    public function __invoke(FindByEmailQuery $query): Item
    {
        /** @var UserViewInterface $userView */
        $userView = $this->repository->oneByEmail($query->email);

        return new Item($userView);
    }

    public function __construct(UserReadModelRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @var UserReadModelRepositoryInterface
     */
    private $repository;
}
