<?php

namespace App\Classes;

class Client extends Person
{
    
    public function setId(int $id): void
    {
        $this->id = $id + 1000;
    }

    public function __set(string $propertyName, $propertyValue): void
    {
        if($propertyName === "cpf") {
            $this->cpf = \str_replace(".", "", $propertyValue);
        }else {
            $this->$propertyName = $propertyValue;
        }
    }

    // Só é executado para propriedades não definidas
    public function __get(string $propertyName): string
    {
        return "The property does not exist";
    }

    // Só é executado se chamamos um métodos que não existe
    public function __call(string $methodName, array $argumentMethod): void
    {
        if($methodName === "change") {
            $this->name = $argumentMethod[0];
            $this->age = $argumentMethod[1];
        }
    }

    // Permite executar uma instância como se fosse uma função
    public function __invoke(bool $status): void
    {
        $this->status = $status;
    }

    // Forma de serializar um objeto
    public function __sleep(): array
    {
        return ["name", "age"];
    } 

    // FOrma de serializar um objeto
    public function __wakeup(): void
    {
        $this->type = "serialized";
    }

    public function __toString(): string
    {
        return $this->name . ", " . $this->age;
    }

    public function buy(): void
    {
        echo "The client {$this->name} buyed";
    }

    public function defineName(string $name): void
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        echo "The object was destructed";
    }
}