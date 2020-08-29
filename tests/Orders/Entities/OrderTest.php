<?php
use PHPUnit\Framework\TestCase;
use SmartCheckout\Orders\ValueObjects\Item;
use SmartCheckout\Orders\ValueObjects\ItemsCollection;
use SmartCheckout\Orders\Entities\Order;

class OrderTest extends TestCase
{
  public function testCalculateTotalPrice()
  {
    $itemPrice = 25.90;
    $quantity = 2;
    $item = new Item($itemPrice, $quantity, 'Mouse Logitech');
    $items = new ItemsCollection([$item]);

    $order = new Order($items);
    $total = $itemPrice * $quantity;
    $this->assertEquals($total, $order->getTotalPrice());
  }
}
