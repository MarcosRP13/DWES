<?php

namespace AP42\Entity;

use AP42\repository\operationsRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity (repositoryClass: operationsRepository::class)]
#[table (name: 'operaciones')]
class operations
{
    #[Id]
    #[GeneratedValue]
    #[column (name: 'id', type: 'integer')]
    private int $id;

    #[column (name: 'resultado', type: 'decimal')]
    private string $resultado;

    #[ManyToOne (targetEntity: users::class, inversedBy: 'operations')]
    #[JoinColumn(name: "usuario", referencedColumnName: "id", nullable: false, onDelete: "CASCADE")]
    private ?Users $users = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getResultado(): string
    {
        return $this->resultado;
    }

    public function setResultado(string $resultado): void
    {
        $this->resultado = $resultado;
    }

    public function getUsuarios(): ?Users
    {
        return $this->users;
    }

    public function setUsuarios(?Users $users): void
    {
        $this->users = $users;
    }


}
