<?php
  namespace App\Controller;

  use Cake\Controller\Controller;

  class NewsletterController extends AppController
  {
      public function add()
      {
          if ($this->request->is("Post")) {
              //debug($this->request->getData());
              $newletter = $this->Newsletter->newEntity($this->request->getData());
              if ($newletter->errors()) {
                  echo "Validation echec";
              } else {
                  echo "Validation Success";
              }
          }
      }
  }
