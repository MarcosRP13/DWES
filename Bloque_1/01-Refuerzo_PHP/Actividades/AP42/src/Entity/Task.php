<?php

namespace AP42\Entity;
use AP42\Repository\RepositoryTareas;
use DateTime;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity(repositoryclass:TareasRepository::class)]
#[Table(name: 'tareas')]

Class Task {
    #[Id]
    #[GeneratedValue]
    #[Column(name: 'id', type: 'integer')]
private int $id;
    #[Column(name: 'titulo', type: 'string', length: 255)]
private string $titulo;
    #[Column(name: 'descripcion', type: 'text')]
private string $descripcion;
    #[Column(name: 'fecha_creacion', type: 'date')]
private DateTime $fechaCreacion;
    #[Column(name: 'fecha_vencimiento', type: 'date')]
private DateTime $fechaVencimiento;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}