<?php

declare(strict_types=1);

namespace RMQ\Messages;

use DateTimeImmutable;

class AccountDateIntervalMessage
{
    private DateTimeImmutable $dateForm;
    private DateTimeImmutable $dateTo;

    public function getDateForm(): DateTimeImmutable
    {
        return $this->dateForm;
    }

    public function setDateForm(DateTimeImmutable $dateForm): AccountDateIntervalMessage
    {
        $this->dateForm = $dateForm;
        return $this;
    }

    public function getDateTo(): DateTimeImmutable
    {
        return $this->dateTo;
    }

    public function setDateTo(DateTimeImmutable $dateTo): AccountDateIntervalMessage
    {
        $this->dateTo = $dateTo;
        return $this;
    }
}
