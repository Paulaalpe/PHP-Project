<?php

namespace App\Entity;

use App\Repository\SolicitudRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SolicitudRepository::class)]
class Solicitud
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'date')]
    private $fecha;

    #[ORM\Column(type: 'boolean')]
    private $coche;

    #[ORM\Column(type: 'boolean')]
    private $moto;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'solicitudes')]
    #[ORM\JoinColumn(nullable: false)]
    private $Usuario;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getCoche(): ?bool
    {
        return $this->coche;
    }

    public function setCoche(bool $coche): self
    {
        $this->coche = $coche;

        return $this;
    }

    public function getMoto(): ?bool
    {
        return $this->moto;
    }

    public function setMoto(bool $moto): self
    {
        $this->moto = $moto;

        return $this;
    }

    public function getUsuario(): ?User
    {
        return $this->Usuario;
    }

    public function setUsuario(?User $Usuario): self
    {
        $this->Usuario = $Usuario;

        return $this;
    }
}
