<?php

declare(strict_types=1);

namespace RMQ\Messages;

use DateTimeImmutable;

class AccountDateIntervalMessage
{
    private DateTimeImmutable $dateForm;
    private DateTimeImmutable $dateTo;
}
