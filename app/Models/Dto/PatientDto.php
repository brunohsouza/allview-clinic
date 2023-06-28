<?php
declare(strict_types=1);

namespace App\Models\Dto;

class PatientDto
{
    /**
     * @var string The primary key for the model.
     */
    private string $id;

    /**
     * @var string The patient's name.
     */
    private string $name;

    /**
     * @var string The patient's phone number.
     */
    private string $phone;

    /**
     * @var string The patient's email address.
     */
    private string $email;

    /**
     * @var \DateTimeImmutable The date and time the patient was created.
     */
    private \DateTimeImmutable $createdAt;

    /**
     * @var \DateTimeImmutable|null The date and time the patient was last updated.
     */
    private ?\DateTimeImmutable $updatedAt;

    /**
     * @var \DateTimeImmutable|null The date and time the patient was deleted.
     */
    private ?\DateTimeImmutable $deletedAt;

    /**
     * @throws \Exception
     */
    public static function populate(array $data): PatientDto
    {
        $patient = new PatientDto();
        $patient->setId((string) $data['id'] ?? '');
        $patient->setName($data['name']);
        $patient->setPhone($data['phone']);
        $patient->setEmail($data['email']);
        $patient->setCreatedAt($data['created_at']);
        $patient->setUpdatedAt($data['updated_at'] ?? null);
        $patient->setDeletedAt($data['deleted_at'] ?? null);

        return $patient;
    }

    private function setId(string $id): PatientDto
    {
        $this->id = $id;

        return $this;
    }

    public function setName(string $name): PatientDto
    {
        $this->name = $name;

        return $this;
    }

    private function setPhone(string $phone): PatientDto
    {
        $this->phone = $phone;

        return $this;
    }

    private function setEmail(mixed $email): PatientDto
    {
        $this->email = $email;

        return $this;
    }

    private function setCreatedAt(string $created_at): PatientDto
    {
        $this->createdAt = new \DateTimeImmutable($created_at);

        return $this;
    }

    private function setUpdatedAt(?string $updated_at = null): PatientDto
    {
        if ($updated_at) {
            $this->updatedAt = new \DateTimeImmutable($updated_at);
        }

        return $this;
    }

    /**
     * @throws \Exception
     */
    private function setDeletedAt(?string $deletedAt = null): PatientDto
    {
        if ($deletedAt) {
            $this->deletedAt = new \DateTimeImmutable($deletedAt);
        }

        return $this;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    /**
     * @return \DateTimeImmutable|null
     */
    public function getDeletedAt(): ?\DateTimeImmutable
    {
        return $this->deletedAt;
    }
}
