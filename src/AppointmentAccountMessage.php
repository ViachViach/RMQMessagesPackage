<?php

declare(strict_types=1);

namespace RMQ\Messages;

class AppointmentAccountMessage
{
    private string $login;
    private string $password;

    /**
     * @var AccountDateIntervalMessage[]
    */
    private array $dateInterval;
    private int $waitDate;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): AppointmentAccountMessage
    {
        $this->login = $login;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): AppointmentAccountMessage
    {
        $this->password = $password;
        return $this;
    }

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
