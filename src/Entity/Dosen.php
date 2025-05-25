<?php

namespace PHPMaker2025\new2025\Entity;

use DateTime;
use DateTimeImmutable;
use DateInterval;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\SequenceGenerator;
use Doctrine\DBAL\Types\Types;
use PHPMaker2025\new2025\AdvancedUserInterface;
use PHPMaker2025\new2025\AbstractEntity;
use PHPMaker2025\new2025\AdvancedSecurity;
use PHPMaker2025\new2025\UserProfile;
use PHPMaker2025\new2025\UserRepository;
use function PHPMaker2025\new2025\Config;
use function PHPMaker2025\new2025\EntityManager;
use function PHPMaker2025\new2025\RemoveXss;
use function PHPMaker2025\new2025\HtmlDecode;
use function PHPMaker2025\new2025\HashPassword;
use function PHPMaker2025\new2025\Security;

/**
 * Entity class for "dosen" table
 */

#[Entity]
#[Table("dosen", options: ["dbId" => "DB"])]
class Dosen extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "nidn", type: "string", unique: true, nullable: true)]
    private ?string $Nidn;

    #[Column(name: "nama", type: "string", nullable: true)]
    private ?string $Nama;

    #[Column(name: "email", type: "string", nullable: true)]
    private ?string $Email;

    #[Column(name: "prodi_id", type: "integer", nullable: true)]
    private ?int $ProdiId;

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getNidn(): ?string
    {
        return HtmlDecode($this->Nidn);
    }

    public function setNidn(?string $value): static
    {
        $this->Nidn = RemoveXss($value);
        return $this;
    }

    public function getNama(): ?string
    {
        return HtmlDecode($this->Nama);
    }

    public function setNama(?string $value): static
    {
        $this->Nama = RemoveXss($value);
        return $this;
    }

    public function getEmail(): ?string
    {
        return HtmlDecode($this->Email);
    }

    public function setEmail(?string $value): static
    {
        $this->Email = RemoveXss($value);
        return $this;
    }

    public function getProdiId(): ?int
    {
        return $this->ProdiId;
    }

    public function setProdiId(?int $value): static
    {
        $this->ProdiId = $value;
        return $this;
    }
}
