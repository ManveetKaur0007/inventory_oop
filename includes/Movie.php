<?php
class Movie extends Media 
{
public $id;
public $title;
public $productionCompany;
public $yearReleased;
public $director;



public function __construct($id,$title,$productionCompany,$yearReleased,$director){
$this->id=$id;
$this->title=$title;
$this->productionCompany=$productionCompany;
$this->yearReleased=$yearReleased;
$this->director=$director;
}

public function create($dbc){
$query="INSERT into `movies` values" .
"('0','$this->title','$this->productionCompany',".
"'$this->yearReleased','$this->director')";
$result=$dbc->sqlQuery($query);
return $result;
}

public static function all($dbc){
    $query="SELECT * from `movies`";
    $result=$dbc->fetchArray($query);
    return $result;
}
public static function delete($dbc, $title){
    $query = "DELETE FROM `movies` WHERE title = '$title'";
    $result = $dbc->sqlQuery($query);
    return $result;
}
public static function find($dbc, $title){
    $query = "SELECT *FROM `movies` WHERE title = '$title' LIMIT 1";
    $result = $dbc->fetchRecord($query);
    $newObj = new self($result['id'], $result['title'],
                      $result['productionCompany'],
                      $result['yearReleased'],
                      $result['director']);
    return $newObj;
}
public function update($dbc) {
    $query = "UPDATE `movies` SET title = '$this->title',".
             "production_company = '$this->productionCompany',".
             "year_released = '$this->yearReleased',".
             "direction = '$this->director' WHERE id = $this->id'";
    $result = $dbc->sqlQuery($query);
    return $result;
}

}
?>