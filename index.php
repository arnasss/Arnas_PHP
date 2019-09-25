<?php
$drinks = [
    [
        'name' => 'Vilkmergės Alus',
        'price_stock' => 3.65,
        'discount' => 0,
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=aad54d86-3834-4f34-9a23-35e3224c7a6f',
        'in_stock' => rand(0, 1),
    ],
    [
        'name' => 'Stumbro degtinė',
        'price_stock' => 11.79,
        'discount' => 5,
        'img' => 'https://www.vynoguru.lt/media/catalog/product/cache/2/image/800x600/9df78eab33525d08d6e5fb8d27136e95/l/i/lithuanian_vodka_originali_1_l.jpg',
        'in_stock' => rand(0, 1),
    ],
    [
        'name' => 'Kalnapilio Alus',
        'price_stock' => 2.49,
        'discount' => 20,
        'img' => 'https://www.vynoguru.lt/media/catalog/product/cache/2/image/800x600/9df78eab33525d08d6e5fb8d27136e95/k/a/kalifornikacija_b.jpg',
        'in_stock' => rand(0, 1),
    ],
    [
        'name' => 'Utenos Alus',
        'price_stock' => 1.88,
        'discount' => 10,
        'img' => 'https://www.barbora.lt/api/Images/GetInventoryImage?id=1959516d-9b51-4d34-8ff8-d5cf959c82a7',
        'in_stock' => rand(0, 1),
    ],
];

foreach ($drinks as $drink_id => $drink) {
    $drinks[$drink_id]['price_retail'] = $drink['price_stock'] - ($drink['price_stock'] / 100 * $drink['discount']);
    $drinks[$drink_id]['price_display'] = number_format($drinks[$drink_id]['price_retail'], 2);
};
?>
<html>
    <head>
        <style>
            .container {
                width: 200px;
                position: relative;
                border: 1px solid black;
                float: left;
                margin-left: 5px;
            }
            img {
                width: 200px;
                height: 200px;
            }
            .price {
                position: absolute;
                top: 0;
                right: 0;
                background-color: red;
                height: 25px;
                padding-top: 5px;
            }

            .drink_name {
                text-align: center;
            }
            .price_original {
                position: absolute;
                top: 0;
                left: 0;
                background-color: lightgrey;
            }
            .green {
                color: green;
                text-align: center;

            }
            .red {
                color: red;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <h1>Drink Catalogue</h1>
        <?php foreach ($drinks as $drink): ?>
            <div class="container">
                <img src="<?php print $drink['img']; ?>">
                <div class="drink_name"><?php print $drink['name']; ?></div>
                <div class="price"><?php print $drink['price_display']; ?> eur</div>
                <?php
                if ($drink['in_stock'] == true) {
                    $text = 'Yra sandėlyja';
                    $css_class = 'green';
                } else {
                    $text = 'Nėra sandėlyja';
                    $css_class = 'red';
                }
                ?>
                <div class="<?php print $css_class ?>"><?php print $text; ?></div>
                <?php if ($drink['discount'] != 0): ?>
                    <div class="price_original"><?php print $drink['price_stock']; ?> eur</div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </body>
</html>