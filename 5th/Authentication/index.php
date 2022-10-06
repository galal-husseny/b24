<?php 
$products = [
    [
        'id' => 1,
        'name' => 'laptop',
        'price' => [
             20000
        ],
        'image' => '2.jpg'
    ],
    [
        'id' => 2,
        'name' => 'mobile',
        'price' => [
            12000, 10000
        ],
        'image' => '1.jpg'
    ],
    [
        'id' => 3,
        'name' => 'tv',
        'price' => [
            8000 , 12000 , 15000 
        ],
        'image' => '3.jpg'
    ]
];
$title = "home";
include "layouts/header.php";
include "layouts/navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center mt-5">
            <h1> All Products</h1>
        </div>
        <?php foreach($products AS $product){ ?>
            <div class="col-4">
                <div class="card" style=" border-color:darkblue;">
                <img class="card-img-top" src="asset/images/products/<?= $product['image'] ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title"><?= $product['name'] ?></h4>
                </div>
                <div class="card-footer">
                    <p class="text-muted ">
                        <?php foreach($product['price'] AS $price){
                            echo $price . ' EGP <br>';
                        } ?>
                    </p>
                </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<?php 
include "layouts/footer.php";
include "layouts/scripts.php";
?>