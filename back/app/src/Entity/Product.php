<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
#[ApiResource]
class Product
{
#[ORM\Id]
#[ORM\GeneratedValue]
#[ORM\Column(type: 'integer')]
private ?int $id = null;

#[ORM\Column(type: 'string', length: 255)]
#[Assert\NotBlank]
private string $code;

#[ORM\Column(type: 'string', length: 255)]
private string $name;

#[ORM\Column(type: 'text', nullable: true)]
private ?string $description = null;

#[ORM\Column(type: 'string', length: 255, nullable: true)]
private ?string $image = null;

#[ORM\Column(type: 'string', length: 255)]
private string $category;

#[ORM\Column(type: 'float')]
private float $price;

#[ORM\Column(type: 'integer')]
private int $quantity;

#[ORM\Column(type: 'string', length: 255)]
private string $internalReference;

#[ORM\Column(type: 'integer')]
private int $shellId;

#[ORM\Column(type: 'string', length: 50)]
#[Assert\Choice(choices: ['INSTOCK', 'LOWSTOCK', 'OUTOFSTOCK'])]
private string $inventoryStatus;

#[ORM\Column(type: 'float')]
private float $rating;

#[ORM\Column(type: 'datetime')]
private \DateTime $createdAt;

#[ORM\Column(type: 'datetime', nullable: true)]
private ?\DateTime $updatedAt = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @param string|null $description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getInternalReference(): string
    {
        return $this->internalReference;
    }

    /**
     * @param string $internalReference
     */
    public function setInternalReference(string $internalReference): void
    {
        $this->internalReference = $internalReference;
    }

    /**
     * @return int
     */
    public function getShellId(): int
    {
        return $this->shellId;
    }

    /**
     * @param int $shellId
     */
    public function setShellId(int $shellId): void
    {
        $this->shellId = $shellId;
    }

    /**
     * @return string
     */
    public function getInventoryStatus(): string
    {
        return $this->inventoryStatus;
    }

    /**
     * @param string $inventoryStatus
     */
    public function setInventoryStatus(string $inventoryStatus): void
    {
        $this->inventoryStatus = $inventoryStatus;
    }

    /**
     * @return float
     */
    public function getRating(): float
    {
        return $this->rating;
    }

    /**
     * @param float $rating
     */
    public function setRating(float $rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime|null $updatedAt
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }



}
