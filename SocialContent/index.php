<?php
require_once 'ContentDAO.php';
require_once 'Post.php';
$contentDAO = new ContentDAO();
$posts = $contentDAO->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Social Content Exercise</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

<main class="container">
    <div class="row">
        <div class="col-12">
            <h1>Social content exercise</h1>
            <p>Replace the below content with the data from the supplied DB.</p>
        </div>
        <div class="col-12">

            <?php
            foreach ($posts as $post) {
            echo ('<div class="card mb-4">'
                .'<div class="card-body">'
                .'<h5 class="card-title">'
                . $post->getName()
                .'<small class="small mr-2 float-right text-muted">'
                . $post->getCreated()
                .'</small>'
                .'</h5>'
                .'<p class="card-text">'
                . $post->getPost()
                .'</p>'
                .'<div class="btn-group" role="group">'
                .'<button type="button" class="btn btn-info">-</button>'
                .'<span class="disabled btn btn-outline-info">'
                . $post->getUpvotes()
                .'</span>'
                .'<button type="button" class="btn btn-info">+</button>'
                .'</div>'
                .'</div>'
            .'</div>');
        }?>

        </div>
    </div>
</main>

</body>
</html>