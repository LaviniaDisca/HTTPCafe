<?php


class Review extends Controller
{
    public function index()
    {
        $this->showForbidden(static::class,$_SERVER['HTTP_REFERER']);
        $data['username'] = $this->getUsername();
        $review = $this->loadModel('ReviewModel');
        $reviews = $review->getReviews();
        $data['reviews'] = '';
        foreach ($reviews as $line) {
            $data['reviews'] = $data['reviews'] . '<div class="review">';
            $data['reviews'] = $data['reviews'] . ' User ' . $line->username . ' said :';
            $data['reviews'] = $data['reviews'] . '<div class="text">';
            $data['reviews'] = $data['reviews'] . $line->review;
            $data['reviews'] = $data['reviews'] . '</div>';
            $data['reviews'] = $data['reviews'] . '</div>';
        }
        $this->view('review/index', $data);
    }

    public function add()
    {
        session_start();
        if (!isset($_SESSION['userID']) || !isset($_POST['review']))
            header('Location: ' . URL . 'Login');
        $review = $this->loadModel('ReviewModel');
        $review->add($_SESSION['userID'],$_POST['review'],date('d/m/Y h:i:s',time()));
        header('Location: ' . URL . 'Review');
    }
}