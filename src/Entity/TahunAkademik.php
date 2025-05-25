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
 * Entity class for "tahun_akademik" table
 */

#[Entity]
#[Table("tahun_akademik", options: ["dbId" => "DB"])]
class TahunAkademik extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "tahun", type: "string", nullable: true)]
    private ?string $Tahun;

    #[Column(name: "semester", type: "string", nullable: true)]
    private ?string $Semester;

    #[Column(name: "status", type: "string", nullable: true)]
    private ?string $Status;

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getTahun(): ?string
    {
        return HtmlDecode($this->Tahun);
    }

    public function setTahun(?string $value): static
    {
        $this->Tahun = RemoveXss($value);
        return $this;
    }

    public function getSemester(): ?string
    {
        return $this->Semester;
    }

    public function setSemester(?string $value): static
    {
        if (!in_array($value, ["Ganjil", "Genap"])) {
            throw new \InvalidArgumentException("Invalid 'semester' value");
        }
        $this->Semester = $value;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(?string $value): static
    {
        if (!in_array($value, ["Aktif", "Nonaktif"])) {
            throw new \InvalidArgumentException("Invalid 'status' value");
        }
        $this->Status = $value;
        return $this;
    }
}
