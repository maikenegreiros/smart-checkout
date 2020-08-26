<?php
namespace SmartCheckout\Payments;

use SmartCheckou\Payments\Gateways\MercadoPagoPayment;
use SmartCheckou\Payments\Gateways\PagSeguroPayment;

class PaymentFactory
{
  public function getPayment(string $gateway): Payment
  {
    if ($gateway === 'mercadopago') {
      return $this->createMercadoPago();
    }
    if ($gateway === 'pagseguro') {
      return PagSeguroPayment();
    }
    throw new Exception("Gateway $gateway não reconhecido", 1);
  }

  private function createMercadoPago(): MercadoPagoPayment
  {
    $mercadoPago = new MercadoPagoPayment($token);
    // Configurações necessárias
    return $mercadoPago;
  }

  private function createPagSeguro(): PagSeguroPayment
  {
    $pagseguro = new PagSeguroPayment($token);
    // Configurações necessárias
    return $pagseguro;
  }
}
