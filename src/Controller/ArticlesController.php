<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Network\Exception\NotFoundException;

class ArticlesController extends AppController {

  function post($post_id) {

    try {
        $article = $this->Articles->get($post_id);
    }
    catch (\Exception $e) {
      throw new NotFoundException(__('Article not found'));
    }
    die();
  }
}

?>
