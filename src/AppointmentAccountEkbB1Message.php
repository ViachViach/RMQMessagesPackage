<?php

declare(strict_types=1);

namespace RMQ\Messages;

class AppointmentAccountEkbB1Message
{
    private string $login;
    private string $password;
    private int $delay;
    private string $city;
    private string $visaType;
    /**
     * @var AccountDateIntervalMessage[]
     */
    private array $dateInterval;
    private int $waitDate;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): AppointmentAccountEkbB1Message
    {
        $this->login = $login;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): AppointmentAccountEkbB1Message
    {
        $this->password = $password;
        return $this;
    }

    public function getDelay(): int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): AppointmentAccountEkbB1Message
    {
        $this->delay = $delay;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): AppointmentAccountEkbB1Message
    {
        $this->city = $city;
        return $this;
    }

    public function getVisaType(): string
    {
        return $this->visaType;
    }

    public function setVisaType(string $visaType): AppointmentAccountEkbB1Message
    {
        $this->visaType = $visaType;
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
    public function setDateInterval(array $dateInterval): AppointmentAccountEkbB1Message
    {
        $this->dateInterval = $dateInterval;
        return $this;
    }

    public function getWaitDate(): int
    {
        return $this->waitDate;
    }

    public function setWaitDate(int $waitDate): AppointmentAccountEkbB1Message
    {
        $this->waitDate = $waitDate;
        return $this;
    }
}
