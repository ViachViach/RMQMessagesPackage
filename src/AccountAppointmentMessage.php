<?php

declare(strict_types=1);

namespace RMQ\Messages;

class AccountAppointmentMessage
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

    public function setLogin(string $login): AccountAppointmentMessage
    {
        $this->login = $login;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): AccountAppointmentMessage
    {
        $this->password = $password;
        return $this;
    }

    public function getDelay(): int
    {
        return $this->delay;
    }

    public function setDelay(int $delay): AccountAppointmentMessage
    {
        $this->delay = $delay;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): AccountAppointmentMessage
    {
        $this->city = $city;
        return $this;
    }

    public function getVisaType(): string
    {
        return $this->visaType;
    }

    public function setVisaType(string $visaType): AccountAppointmentMessage
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
