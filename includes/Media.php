<?php

class Media{
protected $id;
protected $title;
protected $productionCompany;
protected $yearReleased;

public function setId($id){
$this->id=$id;
}

public function setTitle($title){
$this->title=$title;

}

public function setDirector($director){
    $this->director =$director;
    
    }
    public function setProductionCompany($productionCompany){
        $this->productionCompany=$productionCompany;
        }

        
public function setYearReleased($yearReleased){
$this->yearReleased=$yearReleased;
}



public function getId()
{
return $this->id;
}

public function getTitle(){
return $this->title;
}

public function getDirector(){
    return $this->director;
    }


public function getProductionCompany()
{
return $this->productionCompany;
}

public function getYearReleased(){
return $this->yearReleased;
}

}
?>