<?php

namespace App\Entity;

class Person
{
    private string $fullName;
    private string $job;

    public function __construct(string $fullName, string $job)
    {
        $this->fullName = $fullName;
        $this->job = $job;
    }

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function getJob(): string
    {
        return $this->job;
    }
}
