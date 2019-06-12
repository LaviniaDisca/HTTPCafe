<?php

class Api extends Controller
{
    public function json()
    {
        $model = $this->loadModel('TableModel');
        $tables = $model->getTables();
        $json = array();
        $temp = array();
        foreach ($tables as $item) {
            $temp["table"] = $item->id;
            $temp["users"] = array();
            foreach ($model->getDistribution($item->id) as $table) {
                array_push($temp["users"], $table->user);
            }
            array_push($json, $temp);
        }
        echo json_encode($json);
        header("Content-Type: application/json; charset=UTF-8");
    }

    public function atom()
    {
        $model = $this->loadModel('TableModel');
        $tables = $model->getTables();
        echo '<?xml version="1.0" encoding="utf-8"?>';
        echo '<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">';
        echo '<channel>';
        echo '<title>Report</title><link>'.URL.'</link><description>A report of the users seated.</description>';
        echo '<atom:link href="'.URL.'" rel="self" type="application/rss+xml" />';
        foreach ($tables as $item) {
            echo '<item>';
            echo '<title>Table ' . $item->id . '</title>';
            echo '<description>';
            foreach ($model->getDistribution($item->id) as $table) {
                echo $table->user . ';';
            }
            echo '</description>';
            echo '<guid isPermaLink="false">'.URL. $item->id . '</guid>';
            echo '</item>';
        }
        echo '</channel>';
        echo '</rss>';
        header('Content-Type: application/rss+xml; charset=utf-8');
    }

    public function html()
    {
        $model = $this->loadModel('TableModel');
        $tables = $model->getTables();
        echo '<!DOCTYPE html>';
        echo '<html lang="en">';
        echo '<head><meta charset="utf-8"><title>Report</title></head>';
        echo '<div class="tables">';
        foreach ($tables as $item) {
            echo '<div class="table">';
            echo '<h3>' . $item->id . '</h3>';
            echo '<div class="users">';
            foreach ($model->getDistribution($item->id) as $table) {
                echo '<h3>' . $table->user . '</h3>';
            }
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</html>';
    }
}