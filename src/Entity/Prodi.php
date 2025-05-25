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
 * Entity class for "prodi" table
 */

#[Entity]
#[Table("prodi", options: ["dbId" => "DB"])]
class Prodi extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "nama_prodi", type: "string", nullable: true)]
    private ?string $NamaProdi;

    #[Column(name: "fakultas_id", type: "integer", nullable: true)]
    private ?int $FakultasId;

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getNamaProdi(): ?string
    {
        return HtmlDecode($this->NamaProdi);
    }

    public function setNamaProdi(?string $value): static
    {
        $this->NamaProdi = RemoveXss($value);
        return $this;
    }

    public function getFakultasId(): ?int
    {
        return $this->FakultasId;
    }

    public function setFakultasId(?int $value): static
    {
        $this->FakultasId = $value;
        return $this;
    }
}
