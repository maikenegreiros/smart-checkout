<?php
use PHPUnit\Framework\TestCase;
use SmartCheckout\Orders\ValueObjects\Item;
use SmartCheckout\Orders\ValueObjects\ItemsCollection;

class ItemsCollectionTest extends TestCase
{
  public function testInsertInvalidItem()
  {
    $item = new Item(25.90, 2, 'Mouse Logitech');
    $this->expectException(\Exception::class);
    new ItemsCollection([$item, 'invalid param']);
  }
}
