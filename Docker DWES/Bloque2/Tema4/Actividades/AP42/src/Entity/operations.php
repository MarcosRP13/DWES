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
    #[JoinColumn(name: "usurio", referencedColumnName: "id", nullable: false, onDelete: "CASCADE")]
    private ?Users $usuarios = null;

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

    public function getUsuarios(): Collection
    {
        return $this->usuarios;
    }

    public function setUsuarios(Collection $usuarios): void
    {
        $this->usuarios = $usuarios;
    }


}
