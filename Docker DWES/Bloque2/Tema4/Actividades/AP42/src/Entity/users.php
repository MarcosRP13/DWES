<?php

namespace AP42\Entity;

use AP42\repository\usersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[column (name: 'estado', type: 'boolean')]
    private bool $estado;
    #[OneToMany (mappedBy: "users", targetEntity: operations::class, cascade: ["persist", "remove"])]
    private Collection $operations;

    /**
     * @param Collection|null $operations
     */
    public function __construct()
    {
        $this->operations = new ArrayCollection();
    }

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

    public function isEstado(): bool
    {
        return $this->estado;
    }

    public function setEstado(bool $estado): void
    {
        $this->estado = $estado;
    }



}