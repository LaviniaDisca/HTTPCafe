<?php

class Pretzels extends Controller
{
    public function index($name = '')
    {
        $this->view('Pretzels/index');
        /*$songs_model = $this->loadModel('SongsModel');
        $songs = $songs_model->getAllSongs();

        // load another model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $stats_model = $this->loadModel('StatsModel');
        $amount_of_songs = $stats_model->getAmountOfSongs();

        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/songs/index.php';
        require 'application/views/_templates/footer.php';*/
    }
}