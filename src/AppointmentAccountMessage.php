<?php

declare(strict_types=1);

namespace RMQ\Messages;

class AppointmentAccountMessage extends AccountMessage
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
    public function setDateInterval(array $dateInterval): AppointmentAccountMessage
    {
        $this->dateInterval = $dateInterval;
        return $this;
    }

    public function getWaitDate(): int
    {
        return $this->waitDate;
    }

    public function setWaitDate(int $waitDate): AppointmentAccountMessage
    {
        $this->waitDate = $waitDate;
        return $this;
    }
}
