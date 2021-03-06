<?php

namespace App\Domain\User\Repository;

use App\Domain\User\ValueObject\Email;
use Ramsey\Uuid\UuidInterface;

interface CheckUserByEmailInterface
{
    public function existsEmail(Email $email): ?UuidInterface;
}
