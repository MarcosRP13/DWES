<?php

namespace AP41\Entity;

use AP41\repository\TaskRepository;
use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity (repositoryClass: TaskRepository::class)]
#[table (name: 'tareas')]
class task
{
    #[Id]
    #[GeneratedValue]
    #[column (name: 'id', type: 'integer')]
    private int $id;

    #[column (name: 'titulo', type: 'string', length: '255')]
    private string $titulo;

    #[column (name: 'descripcion', type: 'string', length: '255')]
    private string $descripcion;

    #[column (name: 'fecha_creacion', type: 'date')]
    private DateTime $fechaCreacion;

    #[column (name: 'fecha_vencimiento', type: 'date')]
    private DateTime $fechaVencimiento;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getDescripcion(): string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->descripcion = $descripcion;
    }

    public function getFechaCreacion(): DateTime
    {
        return $this->fechaCreacion;
    }

    public function setFechaCreacion(DateTime $fechaCreacion): void
    {
        $this->fechaCreacion = $fechaCreacion;
    }

    public function getFechaVencimiento(): DateTime
    {
        return $this->fechaVencimiento;
    }

    public function setFechaVencimiento(DateTime $fechaVencimiento): void
    {
        $this->fechaVencimiento = $fechaVencimiento;
    }
}
