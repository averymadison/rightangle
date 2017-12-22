<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
  $form = new Form([
    'email' => [
      'rules' => ['required', 'email'],
      'message' => 'Please enter a valid email address',
    ],
    'message' => [
      'rules' => ['required'],
      'message' => 'Please enter a message',
    ],
  ]);

  if (r::is('POST')) {
    $form->emailAction([
      'to' => $site->email(),
      'from' => $site->email(),
    ]);
  }

  return compact('form');
};
