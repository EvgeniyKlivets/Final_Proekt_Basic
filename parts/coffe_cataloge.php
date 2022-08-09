<?php
$products = db_select(
    from:'products',
    columns:"id,title,price,quantity,description",
    conditions:"is_option is FALSE and quantity > 0",
    order:"price" //от меньшего к большему
);
$products = array_chunk($products, length:3);

/*$products = separateProductsOnRows(db_select(
from:'products',
columns:"id,title,price,quantity,description",
conditions:"is_option is 0 and quantity>0",
order:"price" //от меньшего к большему
));*/
/*$products = separateProductsOnRows($products);
/*dd($products);-not play*/
/*echo $products;*/
?>
<section id="coffe" class="section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="menu-content pb-5 col-lg-10">
                <div class="title text-center">
                <h1 class="mb-10">
                     <?=$content['products']['title'] ? $content['products']['title'] : ''?>
                     </h1>
                    <p class="nadpis">
                        <?=$content['products']['description'] ?? ''?>
                    </p>
                </div>
           </div>
       </div>
    </div>
    <?php foreach ($products as $row): ?>
    <div class="row">
        <?php foreach ($row as $item): ?>
        <div class="col-lg-4">
            <div class="coffe-item"
                data-qnty="<?$item['id']?>"
                data-qnty="<?$item['quantity']?>"
                data-name="<?=$item['title']?>"
                data-price="<?=$item['price']?>"
                data-bs-toggle="modal"
                data-bs-target="#buy"
                >

                <div class="title justify-content-between d-flex">
                    <h4><?=$item['title']?></h4>
                    <p class="price float-rigth"><?=$item['price']?></p>
                </div>
                <div class="title justify-content-between d-flex">
                  <p><strong><?=$item['description']?></strong> </p>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
        <?php endforeach;?>
</section>
