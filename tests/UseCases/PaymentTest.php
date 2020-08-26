<?php

class PaymentTest
{
  protected Payment $payment;
  protected ItemsCollection $items;
  protected Sale $sale;

  protected function setUp()
  {
    $this->items = new ItemsCollection();
    $this->sale = new Sale($items);

    $config = [
      'token' => env('token')
    ];
    $this->payment = new Payment('mercadopago', $config);
  }

  public function testCheckout()
  {
    $this->payment->checkout($this->sale);
  }

  public function testRequestPayment()
  {
    $this->payment->requestPayment($this->sale);
  }
}
