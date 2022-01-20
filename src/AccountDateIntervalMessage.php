<?php

declare(strict_types=1);

namespace RMQ\Messages;

use DateTimeInterface;

final class AccountDateIntervalMessage
{
    private DateTimeInterface $dateForm;
    private DateTimeInterface $dateTo;

    public function getDateForm(): DateTimeInterface
    {
        return $this->dateForm;
    }

    public function setDateForm(DateTimeInterface $dateForm): AccountDateIntervalMessage
    {
        $this->dateForm = $dateForm;
        return $this;
    }

    public function getDateTo(): DateTimeInterface
    {
        return $this->dateTo;
    }

    public function setDateTo(DateTimeInterface $dateTo): AccountDateIntervalMessage
    {
        $this->dateTo = $dateTo;
        return $this;
    }
}
