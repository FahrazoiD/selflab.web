<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller {

  public function postSendEmail(Request $request) {

    $name = test_input($request['name'], 1);
    $email = test_input($request['email'], 1);
    $text = test_input($request['message'], 0);
    $captcha = $_POST['g-recaptcha-response'];

    $secretKey = env('RE_SECRET');
    $ip = $_SERVER['REMOTE_ADDR'];
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
    $responseKeys = json_decode($response,true);
    
    if ((intval($responseKeys["success"]) == 1) && !empty($text) && !empty($name) && !empty($email)) {

      \Mail::send('emails.feedbackmail', array(
        'name' => $name,
        'email' => $email,
        'text' => $text
      ), function($message) {
        $message->to('anton.fakhr@gmail.com', 'Vladislava Stalnova')->subject('Selflab request');
      });

    } else {
      return redirect()->route('home')->with('message', 'Ошибка отправки сообщения! Проверьте правильность заполнения формы.');
    }

    return redirect()->route('home');
  }

}

function test_input($data, $type) {
  if($type) { $data = trim($data); $data = stripslashes($data); }
  $data = htmlspecialchars($data);
  return $data;
}