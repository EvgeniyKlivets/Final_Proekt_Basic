<?php
/*Создаётся функиция, которая удет принимать массив пустой, если функцюбудет пустая тогда будет..*/
function buy(array $productData = [])
{
    /* if(empty($productData)){
    redirect_home();
    }*/
    /*$product = db_select(from:'products', conditions:"id='{$productData['product_id']}'");*/
    $db = DB::connect();/*открывается*/
    try {
    $db->beginTransaction(); // открываем блок в который собираются все sql скрипты
    $product = db_find(from:'products', $productData ['product_id']);/*получаем главный продукт*/
    /*$prodQnty = (int)$product['quantity'];*/
   
    /*if ($prodQnty<$productData['quantity']){
        //error
    };*/
    $quantity = calculateQuantity($product, $productData['quantity']);/*считаем количество продукта*/
    $isAdditions = !empty($productData['additions']) && !empty($productData['additions_qnty']);
/*есть ли доп*/
    if (updateProductQuantity($productData['product_id'], $quantity) && $isAdditions) /*минусует*/
    /*$additions = array_combine($productData['additions'], $productData['additions_qnty']);
    
    foreach ($additions as $id => $qnty){
        $product = db_find (from:'product', $id);
        updateProductQuantity($db, $id, $quantity);
    } перенесли вниз*/
    {
        updateAdditions($productData);
    }
    $db->commit(); // сохраняем результаты работы скриптов
    redirect_home();
    
    alert(
        'success',
        'Bon appetit'
    );
} catch (PDOException $exception){
    $db->rollBack(); // откатываем до первоначального состояния
    alert(
        'danger',
        'Oops, smth went wrong!'
    );
    
} catch (Exception $exception) {
    $db->rollBack(); // откатываем до первоначального состояния
    alert(
        'danger',
        $exception->getMessage()
    );
}
finally {
    redirect_home();
}      
}

function calculateQuantity(array $product, int $requestQnty):int
{
    $prodQnty = (int)$product['quantity'];

    if ($prodQnty<$requestQnty){
        //error
    };
    return (int)$product['quantity'] - $requestQnty;
}

function updateProductQuantity(int $id, int $quantity):bool
{
    $db = DB::connect();
    $query = "UPDATE products SET quantity = :quantity WHERE id = :id";
    $query = $db->prepare($query);

    $query->bindParam('quantity', $quantity, PDO::PARAM_INT);
    $query->bindParam('id', $id, PDO::PARAM_INT);

    return $query->execute();
}

function updateAdditions(array $productData)
{
    $additions = array_combine($productData['additions'], $productData['additions_qnty']);
    foreach ($additions as $id => $qnty) {
        $product = db_find('products', $id);
        $quantity = calculateQuantity($product, $qnty);
        updateProductQuantity($id, $quantity);
    }
}