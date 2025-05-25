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
 * Entity class for "krs_detail" table
 */

#[Entity]
#[Table("krs_detail", options: ["dbId" => "DB"])]
class KrsDetail extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "krs_id", type: "integer", nullable: true)]
    private ?int $KrsId;

    #[Column(name: "matakuliah_id", type: "integer", nullable: true)]
    private ?int $MatakuliahId;

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getKrsId(): ?int
    {
        return $this->KrsId;
    }

    public function setKrsId(?int $value): static
    {
        $this->KrsId = $value;
        return $this;
    }

    public function getMatakuliahId(): ?int
    {
        return $this->MatakuliahId;
    }

    public function setMatakuliahId(?int $value): static
    {
        $this->MatakuliahId = $value;
        return $this;
    }
}
