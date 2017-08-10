<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class NewsletterTable extends Table
{
  public function initialize(array $config)
  {
      $this->setEntityClass('App\Model\Entity\Newletter');
  }

  public function validationDefault(Validator $validator) {
    $validator
      ->requirePresence("mail")
      ->email("mail");

    debug($validator);
    return $validator;
  }
}
