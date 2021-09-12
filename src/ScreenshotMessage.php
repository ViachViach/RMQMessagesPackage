<?php

declare(strict_types=1);

namespace RMQ\Messages;

use DateTimeInterface;

final class ScreenshotMessage
{
    private string $path;
    private string $login;
    private string $city;
    private string $visaType;
    private string $screenshotType;
    private DateTimeInterface $createAt;

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $path): ScreenshotMessage
    {
        $this->path = $path;
        return $this;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): ScreenshotMessage
    {
        $this->login = $login;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): ScreenshotMessage
    {
        $this->city = $city;
        return $this;
    }

    public function getVisaType(): string
    {
        return $this->visaType;
    }

    public function setVisaType(string $visaType): ScreenshotMessage
    {
        $this->visaType = $visaType;
        return $this;
    }

    public function getScreenshotType(): string
    {
        return $this->screenshotType;
    }

    public function setScreenshotType(string $screenshotType): ScreenshotMessage
    {
        $this->screenshotType = $screenshotType;
        return $this;
    }

    public function getCreateAt(): DateTimeInterface
    {
        return $this->createAt;
    }

    public function setCreateAt(DateTimeInterface $createAt): ScreenshotMessage
    {
        $this->createAt = $createAt;
        return $this;
    }
}
