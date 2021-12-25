<?php

declare(strict_types=1);

namespace RMQ\Messages;

use DateTimeInterface;

class InterviewDateMessage
{
    private string $login;
    private DateTimeInterface $interviewDate;

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getInterviewDate(): DateTimeInterface
    {
        return $this->interviewDate;
    }

    public function setInterviewDate(DateTimeInterface $interviewDate): void
    {
        $this->interviewDate = $interviewDate;
    }
}