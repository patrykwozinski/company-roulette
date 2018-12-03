<?php

declare(strict_types=1);

namespace App\Infrastructure\User\Auth;

use App\Domain\User\Query\Repository\UserReadModelRepositoryInterface;
use App\Domain\User\ValueObject\Email;
use App\Infrastructure\User\Query\Projections\UserView;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class AuthProvider implements UserProviderInterface
{
    /**
     * @throws \Assert\AssertionFailedException
     */
    public function loadUserByUsername($email)
    {
        /** @var UserView $user */
        $user = $this->userReadModelRepository->oneByEmail(Email::fromString($email));

        return Auth::fromUser($user);
    }

    /**
     * @throws \Assert\AssertionFailedException
     */
    public function refreshUser(UserInterface $user): UserInterface
    {
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class): bool
    {
        return Auth::class === $class;
    }

    public function __construct(UserReadModelRepositoryInterface $userReadModelRepository)
    {
        $this->userReadModelRepository = $userReadModelRepository;
    }

    /**
     * @var UserReadModelRepositoryInterface
     */
    private $userReadModelRepository;
}
