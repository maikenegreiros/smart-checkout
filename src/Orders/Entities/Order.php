<?php
namespace SmartCheckout\Orders\Entities;

use SmartCheckout\Orders\ValueObjects\ItemsCollection;

class Order
{
  public ItemsCollection $items;

  public function __construct(ItemsCollection $items)
  {
    $this->items = $items;
  }

  public function getItems(): ItemsCollection
  {
    return $this->items;
  }

  public function getTotalPrice(): float
  {
    $total = 0;
    foreach ($this->items->getItems() as $key => $item) {
      $total += $item->price * $item->quantity;
    }
    return $total;
  }
}
