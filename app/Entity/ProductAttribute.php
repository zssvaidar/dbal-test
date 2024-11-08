<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;

#[Entity]
#[Table('product_attribute_value')]
class ProductAttribute
{

    #[Id]
    #[Column]
    private string $id;
    #[Column(name: 'product_id')]
    private string $productId;

    #[Column(name: 'attribute_id')]
    private string $attributeId;

    #[ManyToOne(inversedBy: 'attributes')]
    private Product $product;

    public function getProductId() : string {
        return $this->productId;
    }

    public function getAttributeId() : string {
        return $this->attributeId;
    }
}