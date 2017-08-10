<?php
  namespace App\Controller;

  use Cake\Controller\Controller;
  use Cake\Routing\Router;
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
              foreach ($articles as $key => $article) {
                $articles->toArray()[$key]->url = Router::Url(array(
                    "controller" => "articles",
                    "action" => "post",
                    "?" => array("id" => $articles->toArray()[$key]["id"])
                ));
              }
              $this->set("articles", $articles);
          } else {
              echo "vide !";
          }
      }
  }
