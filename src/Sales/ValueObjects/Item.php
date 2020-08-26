<?php
namespace SmartCheckout\Sales\ValueObjects;

class Item {
  private float $price;
  private int $quantity;
  private string $name;

  public function __construct(float $price, int $quantity, string $name)
  {
    $this->price = $price;
    $this->quantity = $quantity;
    $this->name = $name;
  }
}
