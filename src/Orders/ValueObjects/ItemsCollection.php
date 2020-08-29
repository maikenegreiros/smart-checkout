<?php
namespace SmartCheckout\Orders\ValueObjects;

use Exception;

class ItemsCollection {
  private array $items;

  public function __construct(array $items) {
    $this->items = $items;
    $this->validadeItemsType();
  }

  public function getItems(): array
  {
    return $this->items;
  }

  private function validadeItemsType()
  {
    foreach ($this->items as $key => $item) {
      if (!($item instanceof Item)) {
        throw new Exception("TypeError: items devem ser do tipo " . Item::class, 1);
      }
    }
  }
}
