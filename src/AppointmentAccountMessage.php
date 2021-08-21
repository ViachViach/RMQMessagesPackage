<?php

declare(strict_types=1);

namespace RMQ\Messages;

use DateTimeImmutable;

class AppointmentAccountMessage
{
    private string $login;
    private string $password;

    /**
     * @var DateTimeImmutable[]
    */
    private array $dateInterval;
    private int $waitDate;
}
