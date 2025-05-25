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
 * Entity class for "khs" table
 */

#[Entity]
#[Table("khs", options: ["dbId" => "DB"])]
class Kh extends AbstractEntity
{
    #[Id]
    #[Column(name: "id", type: "integer", unique: true)]
    #[GeneratedValue]
    private int $Id;

    #[Column(name: "mahasiswa_id", type: "integer", nullable: true)]
    private ?int $MahasiswaId;

    #[Column(name: "matakuliah_id", type: "integer", nullable: true)]
    private ?int $MatakuliahId;

    #[Column(name: "tahun_akademik_id", type: "integer", nullable: true)]
    private ?int $TahunAkademikId;

    #[Column(name: "nilai_huruf", type: "string", nullable: true)]
    private ?string $NilaiHuruf;

    #[Column(name: "nilai_angka", type: "decimal", nullable: true)]
    private ?string $NilaiAngka;

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

    public function getMatakuliahId(): ?int
    {
        return $this->MatakuliahId;
    }

    public function setMatakuliahId(?int $value): static
    {
        $this->MatakuliahId = $value;
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

    public function getNilaiHuruf(): ?string
    {
        return $this->NilaiHuruf;
    }

    public function setNilaiHuruf(?string $value): static
    {
        if (!in_array($value, ["A", "B", "C", "D", "E"])) {
            throw new \InvalidArgumentException("Invalid 'nilai_huruf' value");
        }
        $this->NilaiHuruf = $value;
        return $this;
    }

    public function getNilaiAngka(): ?string
    {
        return $this->NilaiAngka;
    }

    public function setNilaiAngka(?string $value): static
    {
        $this->NilaiAngka = $value;
        return $this;
    }
}
