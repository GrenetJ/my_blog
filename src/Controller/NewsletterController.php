<?php
  namespace App\Controller;

  use Cake\Controller\Controller;
  use Cake\I18n\Time;

  class NewsletterController extends AppController
  {
      public function add()
      {
          if ($this->request->is("Post")) {
              $newletter = $this->Newsletter->newEntity($this->request->data());
              if ($newletter->errors()) {
                $this->Flash->error('Adresse Email invalide');
              }
              else {
                if (!$this->Newsletter->findByMail($newletter->mail)->isEmpty()) {
                  $this->Flash->error('Cette adresse Email est déjà enregistée');
                }
                else {
                  $newletter->date_inscription = Time::now();
                  $this->Newsletter->save($newletter);

                  $this->Flash->success("Adresse Email enregistrée. Merci !");
                }
              }
              return $this->redirect(array(
                "controller" => "Home",
                "action" => "index"
              ));
          }
      }
  }
