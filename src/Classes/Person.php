<?php

namespace App\Classes;

// Classes abstratas permitem que sejam reutilizados as propriedades e método

abstract class Person
{
    protected int $id;
    private string $name;
    private int $age;
    public string $address;
    private string $phone;

    // Todas as classes que herdarem a classe Person exigem a criação do método setId
    abstract public function setId(int $id): void;

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(string $age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
}