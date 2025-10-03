<?php
namespace App\Controllers;

use App\Utils\AbstractController;

class CommentController extends AbstractController
{
    public function addComment()
    {
        if(isset($_SESSION['user'])) {
            if(isset($_POST['addComment'])){
                $text = htmlspecialchars($_POST['comment']);
                $idCommit = htmlspecialchars($_GET['id']);

                $this->totalCheck('comment', $text);

                if(empty($this->arrayError)){
                    $today = date("Y-m-d");
                    $comment = new Comment(null, $text, $today, null , $idCommit, $_SESSION['user']['id_user']);
                    $comment->addComment();
                    $this->redirectToRoute('/', 200);
                }
            }
            require_once(__DIR__ . "/../Views/commit.view.php");
        }else{
            $this->redirectToRoute('/', 302);
        }
    }
}