<?php
//debug($article);
 ?>

 <h1><?= $article->title; ?></h1>
 <p>
   <?= $article->content; ?>
 </p>
<p>
  Date : <span><?= $article->date_creation->nice() ?></span>
  <br />
  By: <span><?= $article->id_createur; ?></span>
</p>
