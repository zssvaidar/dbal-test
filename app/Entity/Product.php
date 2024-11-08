<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\OneToMany;

#[Entity]
#[Table('product')]
class Product
{
    #[Id]
    #[Column]
    private string $id;

    #[Column(name: 'name')]
    private string $name;

    public function getId(): int
    {
        return $this->id;
    }

    #[OneToMany(targetEntity: ProductAttribute::class, mappedBy: 'product')]
    private Collection $attributes;

    public function getAttributes(): Collection
    {
        return $this->attributes;
    }

    public function __construct() {
        $this->attributes = new ArrayCollection();
    }
}