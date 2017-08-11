<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Network\Exception\NotFoundException;

class ArticlesController extends AppController {

  function post($post_id) {
    if (isset($post_id)) {
      $article = $this->Articles->get($post_id);
      $this->set("article", $article);
    }
    else {
      new NotFoundException();
    }
  }
}

?>
