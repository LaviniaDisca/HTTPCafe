<?php

class Api extends Controller
{
    public function json()
    {
        $model=$this->loadModel('TableModel');
        $tableCount=$model->getCount();
        $json=array();
        $temp=array();
        for($i=1;$i<=$tableCount;$i++)
        {
            $temp["table"]=$i;
            $temp["users"]=array();
            foreach ($model->getDistribution($i) as $table)
            {
                array_push($temp["users"],$table->user);
            }
            array_push($json,$temp);
        }
        echo json_encode($json);
        header("Content-Type: application/json; charset=UTF-8");
    }
}