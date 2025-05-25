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
 * Entity class for "krs" table
 */

#[Entity]
#[Table("krs", options: ["dbId" => "DB"])]
class Kr extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "mahasiswa_id", type: "integer", nullable: true)]
    private ?int $MahasiswaId;

    #[Column(name: "tahun_akademik_id", type: "integer", nullable: true)]
    private ?int $TahunAkademikId;

    #[Column(name: "tanggal_pengisian", type: "date", nullable: true)]
    private ?DateTime $TanggalPengisian;

    public function getId(): int
    {
        return $this->Id;
    }

    public function setId(int $value): static
    {
        $this->Id = $value;
        return $this;
    }

    public function getMahasiswaId(): ?int
    {
        return $this->MahasiswaId;
    }

    public function setMahasiswaId(?int $value): static
    {
        $this->MahasiswaId = $value;
        return $this;
    }

    public function getTahunAkademikId(): ?int
    {
        return $this->TahunAkademikId;
    }

    public function setTahunAkademikId(?int $value): static
    {
        $this->TahunAkademikId = $value;
        return $this;
    }

    public function getTanggalPengisian(): ?DateTime
    {
        return $this->TanggalPengisian;
    }

    public function setTanggalPengisian(?DateTime $value): static
    {
        $this->TanggalPengisian = $value;
        return $this;
    }
}
