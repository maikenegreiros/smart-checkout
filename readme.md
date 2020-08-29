## Usage

```php
$items = new ItemsCollection();
$order = new Order($items);

$config = [
  'token' => env('token')
];
$payment = new Payment('mercadopago', $config);
$payment
  ->setNotificationUrl('https://meusite.com.br')
  ->setCallbackUrl('https://meusite.com.br')
  ->checkout($order);
```

## Contribuiting

### Running tests

```bash
docker-compose up tests
```
