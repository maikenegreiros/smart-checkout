## Usage

```php
$items = new ItemsCollection();
$sale = new Sale($items);

$config = [
  'token' => env('token')
];
$payment = new Payment('mercadopago', $config);
$payment
  ->setNotificationUrl('https://meusite.com.br')
  ->setCallbackUrl('https://meusite.com.br')
  ->checkout();
```
