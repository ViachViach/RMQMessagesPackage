<?php

declare(strict_types=1);

namespace RMQ\Messages;

class SuccessAppointmentMessage
{
    private string $login;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): SuccessAppointmentMessage
    {
        $this->login = $login;
        return $this;
    }
}