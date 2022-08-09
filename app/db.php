<?php
/*
@param string $from
@param string $colomns
@param string|null $conditions
@param string|null $order
@return array|false
 */

function db_select(string $from, string $columns = '*', string $conditions = null, string $order = null)
{
    $db = DB::connect();

    $query = "SELECT {$columns} FROM {$from}";
    $query .= $conditions ? "WHERE {$conditions}" : "";
    $query .= $order ? "ORDER BY {$order}" : "";

    $query = $db->prepare($query);
    $query->execute();

    return $query->fetchALL(); /*возвращает массивом*/
}

function db_find(string $from, string | int $id)
{
/*$result = db_select($from, columns:"id='{$id}'");*/
/*return  isset($result[0])?$result[0]:null;*/
/*return  $result[0]??null; - тоже самое,что и верхнее, только в сокращённой форме*/
/*$db = DB:: connect();
$query="SELECT * FROM {$from} WHERE id = :id";
$query = $db->prepare($query);

$query->bindParas(param:'id', &var: $id, type: POD::PARAM_INT);*/
    $db = DB::connect();
    $query = $db->prepare("SELECT * FROM {$from} WHERE id = :id");

    $query->bindParam('id', $id, PDO::PARAM_INT);
    $query->execute(); /* play script*/

    return $query->fetch(); /* возвращает одну запись*/
}
