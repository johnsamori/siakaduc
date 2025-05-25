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
 * Entity class for "matakuliah" table
 */

#[Entity]
#[Table("matakuliah", options: ["dbId" => "DB"])]
class Matakuliah extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "kode_mk", type: "string", unique: true, nullable: true)]
    private ?string $KodeMk;

    #[Column(name: "nama_mk", type: "string", nullable: true)]
    private ?string $NamaMk;

    #[Column(name: "sks", type: "integer", nullable: true)]
    private ?int $Sks;

    #[Column(name: "prodi_id", type: "integer", nullable: true)]
    private ?int $ProdiId;

    #[Column(name: "dosen_id", type: "integer", nullable: true)]
    private ?int $DosenId;

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getKodeMk(): ?string
    {
        return HtmlDecode($this->KodeMk);
    }

    public function setKodeMk(?string $value): static
    {
        $this->KodeMk = RemoveXss($value);
        return $this;
    }

    public function getNamaMk(): ?string
    {
        return HtmlDecode($this->NamaMk);
    }

    public function setNamaMk(?string $value): static
    {
        $this->NamaMk = RemoveXss($value);
        return $this;
    }

    public function getSks(): ?int
    {
        return $this->Sks;
    }

    public function setSks(?int $value): static
    {
        $this->Sks = $value;
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

    public function getDosenId(): ?int
    {
        return $this->DosenId;
    }

    public function setDosenId(?int $value): static
    {
        $this->DosenId = $value;
        return $this;
    }
}
