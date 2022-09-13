<?php
require_once __DIR__ . '/classi/Card.php';
require_once __DIR__ . '/classi/Order.php';
require_once __DIR__ . '/classi/Product.php';
require_once __DIR__ . '/classi/Shop.php';
require_once __DIR__ . '/classi/User.php';
require_once __DIR__ . '/classi/UserPro.php';

$shop = new Shop(
    'Pet Shop',
    '314084329874372',
    [
        new Product('crocchette', 40, 'monge', 'crocchette di tonno e vedura. peso: 25 kg'),
        new Product('set palline', 5, 'animals', 'palline resistenti per giocare col tuo migliore amico'),
        new Product('cuccia XXL', 60, 'Armani', 'ampia cuccia confortevole, spaziosa e di design per il tuo amico a quattro zampe che dorme con stile.'),
        new Product('bastoncini di carne', 4, 'monge', '6 bastoncini di carne di agnello senza conservanti e coloranti')
    ],
    [
        new User(
            'Pedro',
            'Guzaman',
            'via parco 2',
            'pepito@guzaman.it',
            '3645363728',
            new Card('1234876598', '123', '12/29', 'mastercard', 5000)
        ),
        new UserPro(
            'Pepitu',
            'Sardu',
            'via parco 7',
            'pepitu@sardu.it',
            '3645363728',
            new Card('12348765876', '321', '11/29', 'visa', 50),
            'qwewreereftww3021',
            20
        ),
    ],
    []
);

$shop->setOrders($shop->getOrders()[] = new Order(
    $shop->getUsers()[0],
    $shop->getProducts()[0],
    '12/08/2022',
    'in arrivo'
));

echo '<pre>';
var_dump($shop);
echo '</pre>';
