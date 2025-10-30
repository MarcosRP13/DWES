<?php

namespace AP42\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\Table;

#[Entity (repositoryClass: usersRepository::class)]
#[table (name: 'usuarios')]
class users
{
    #[Id]
    #[GeneratedValue]
    #[column (name: 'id', type: 'integer')]
    private int $id;

    #[column (name: 'nombre', type: 'string', length: "30")]
    private string $nombre;

    #[OneToMany (mappedBy: "usuarios", targetEntity: operations::class, cascade: ["persist", "remove"])]
    private Collection $operations;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getOperations(): Collection
    {
        return $this->operations;
    }

    public function setOperations(Collection $operations): void
    {
        $this->operations = $operations;
    }



}