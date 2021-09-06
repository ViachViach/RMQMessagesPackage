<?php

declare(strict_types=1);

namespace RMQ\Messages;

class AccountAppointmentMessage extends AccountMessage
{
    /**
     * @var AccountDateIntervalMessage[]
     */
    private array $dateInterval;
    private int $waitDate;

    /**
     * @return AccountDateIntervalMessage[]
     */
    public function getDateInterval(): array
    {
        return $this->dateInterval;
    }

    /**
     * @param AccountDateIntervalMessage[] $dateInterval
     */
    public function setDateInterval(array $dateInterval): AccountAppointmentMessage
    {
        $this->dateInterval = $dateInterval;
        return $this;
    }

    public function getWaitDate(): int
    {
        return $this->waitDate;
    }

    public function setWaitDate(int $waitDate): AccountAppointmentMessage
    {
        $this->waitDate = $waitDate;
        return $this;
    }
}
