<?php
namespace SmartCheckout\Sales\ValueObjects;

class ItemsCollection {
  private array $items;

  public function __construct(array $items) {
    $this->validadeItemsType($items);
    $this->items = $items;
  }

  private function validadeItemsType()
  {
    throw new Exception("TypeError: items devem ser do tipo Item", 1);
  }
}
