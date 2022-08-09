<?php
$content = convertContentToAssoc(db_select(
    from:'content',
    conditions:"name IN ( 'baner','about', 'products')"
    /*conditions:"name = 'products' OR name ='about'"*/
));
/*
$sql = "SELECT * FROM content WHERE name IN ('baner', 'about', 'products')";
$sql = "SELECT*FROM content WHERE name = 'products' OR name ='about'";
 */

/*$header = convertToAssoc(db_select(
from:'content',
columns:'body',
conditions:"name IN ( 'navigation','baner')"
));*/


require_once PARTS_DIR . '/home.php';
require_once PARTS_DIR . '/about.php';
/*
$products = db_select(
    from:'products',
    columns:"id,title,price,quantity,description",
    conditions:"is_option is 0 and quantity>0",
    order:"price" //от меньшего к большему
);

dd($products);*/
require_once PARTS_DIR . '/coffe_cataloge.php';
require_once PARTS_DIR . '/gallery.php';
require_once PARTS_DIR . '/blog.php';
require_once PARTS_DIR . '/blog_2.php';
require_once PARTS_DIR . '/contacts.php';
//require_once PARTS_DIR . '/subscribe.php';
