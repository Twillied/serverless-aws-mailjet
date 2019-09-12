<?php
  require 'vendor/autoload.php';

  use \Mailjet\Resources;

  $pub_key = getenv('mailjet_key_public');
  $pri_key = getenv('mailjet_key_private');

  $mj = new \Mailjet\Client($pub_key,$pri_key,true,['version' => 'v3.1']);
  $body = [
    'Messages' => [
      [
        'From' => [
          'Email' => "tim@earfood.net",
          'Name' => "Tim"
        ],
        'To' => [
          [
            'Email' => "tim@earfood.net",
            'Name' => "Tim"
          ]
        ],
        'Subject' => "Greetings from Mailjet.",
        'TextPart' => "My first Mailjet email",
        'HTMLPart' => "<h3>Dear passenger 1, welcome to <a href='https://www.mailjet.com/'>Mailjet</a>!</h3><br />May the delivery force be with you!",
        'CustomID' => "FuturePhaseMessage"
      ]
    ]
  ];
  $response = $mj->post(Resources::$Email, ['body' => $body]);
  $response->success() && var_dump($response->getData());
?>