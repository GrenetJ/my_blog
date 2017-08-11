<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AdminController extends AppController {

  public function beforeRender(Event $event)
  {
      parent::beforeRender($event);

      $this->viewBuilder()->layout('adminLayout');
  }

  function home() {
  }
}

?>
