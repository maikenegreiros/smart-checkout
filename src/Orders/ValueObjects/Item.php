<?php
namespace SmartCheckout\Orders\ValueObjects;

class Item {
  public float $price;
  public int $quantity;
  public string $name;

  public function __construct(float $price, int $quantity, string $name)
  {
    $this->price = $price;
    $this->quantity = $quantity;
    $this->name = $name;
  }
}
