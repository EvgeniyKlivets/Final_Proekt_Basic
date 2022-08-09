<?php
function convertContentToASSOc(array $data = []): array
{
    $assoc = [];
    if (!empty($data)) {
        foreach ($data as $row) {
            $assoc[$row['name']] = json_decode($row['body'], associative:true);
        }
    }
    return $assoc;
}
function redirect($path = '/')
{
    $url = DOMAIN . $path;
    header(header:"Location:{$url}");
    exit;
}

function alert(string $class, string $text)
{
    unset($_SESSION['alert']);
    $_SESSION['alert'] = [
        'class' => $class,
        'text' => $text,
    ];
}

function formError($field = null)
{
    $message = "<span class='alert alert-danger'>%s</span>";
    if ($field) {
        echo sprintf($message, $field);
    }
}

function emptyFields(array $fields, $key): bool
{
    $result = false;
    $emptyFields = array_keys($fields, null);

    if (!empty($emptyFields)) {
        foreach ($emptyFields as $fieldName) {
            $_SESSION[$key]['errors'][$fieldName] = "The field '{$fieldName}' has wrong value!";
        }
        $result = true;
    }

    return $result;
}

/*function redirect_home()
{
header(header:'Location:http://localhost:/');
exit;
}*/

/*function separateProductsOnRows(array $products, int $productsPerRow=2):array /*error:[{
"resource": "/A:/OpenServer/domains/test/FINAL_MY (продолжение)/app/helper.php",
"owner": "_generated_diagnostic_collection_name_#1",
"code": "1006",
"severity": 8,
"message": "Expected type 'array'. Found 'void'.",
"source": "intelephense",
"startLineNumber": 13,
"startColumn": 69,
"endLineNumber": 13,
"endColumn": 74
}]*/
{
    /*$rows=[];*/
    /*   $qnty=(int)ceil (num:count($products)/$productsPerRow);
    return array_chunk($products,$qnty);*/

    /*return $rows;*/
    /*dd($qnty,$products);[{
    "resource": "/A:/OpenServer/domains/test/FINAL_MY (продолжение)/app/helper.php",
    "owner": "_generated_diagnostic_collection_name_#1",
    "code": "1010",
    "severity": 8,
    "message": "Undefined function 'dd'.",
    "source": "intelephense",
    "startLineNumber": 29,
    "startColumn": 5,
    "endLineNumber": 29,
    "endColumn": 7
    }]*/

    /*echo $qnty;*/
/*разделит массив на несколько и ковертировть будет на следующий*/
}

/*array_chunk - Разбивает массив на части
count-Подсчитывает количество элементов массива
cail- Округляет дробь в большую сторону*/
