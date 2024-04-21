<?php
nameSpace App\Traits; 
trait TestTrait{

    public function getAllData($model)
    {
        return $model::all();
    }
}