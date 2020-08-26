<?php
namespace SmartCheckout\Payments\Gateway;

use SmartCheckout\Payments\Payment;

class PagSeguroPayment implements Payment
{
  public function __construct(Sale $sale)
  {}

  public function checkout(): string
  {}

  public function requestPayment()
  {}

  public function status()
  {}

  public function setNotificationUrl(string $url)
  {}

  public function setCallbackUrl(string $url)
  {}
}
