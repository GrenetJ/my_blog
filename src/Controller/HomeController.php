<?php
  namespace App\Controller;

  use Cake\Controller\Controller;
  use Cake\Event\Event;

  class HomeController extends AppController
  {
      public function beforeRender(Event $event)
      {
          parent::beforeRender($event);

          $this->viewBuilder()->layout('HomeLayout');
      }

      public function index()
      {
          $this->loadModel('Articles');

          $query = $this->Articles->find("all", array("limit" => "5"));
          $articles = $query->all();
          if (!$articles->isEmpty()) {
              $this->set("articles", $articles);
          } else {
              echo "vide !";
          }
      }
  }
