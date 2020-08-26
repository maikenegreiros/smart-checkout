<?php
namespace SmartCheckout\Sales\Entities;

class Sale
{
  public float $total;
  public ItemsCollection $items;

  public function __construct(float $total, ItemsCollection $items)
  {
    $this->total = $total;
    $this->items = $items;
  }
}
