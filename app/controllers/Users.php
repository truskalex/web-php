<?php


class Users extends Controller
{
  public function login(){
    $this->view('users/login');
  }

  public function register(){
      if ($_SERVER['REQUEST_METHOD'] == 'POST'){
          echo 'data is sent';
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $data = array(
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'pass' => trim($_POST['pass']),
            'pass2' => trim($_POST['pass2']),
            'name_err' => '',
              'email_err' => '',
              'pass_err' => '',
              'pass2_err' => '',
          );

          if (empty($data['name'])) {
              $data['name_err'] = 'Please enter the name';
          }
              if (empty($data['email'])) {
                  $data['email_err'] = 'Please enter the email';
              }
              if (empty($data['pass'])) {
                  $data['pass_err'] = 'Please enter the password';
              } elseif (strlen($data['pass']) < 6){
                  $data['pass_err'] = 'Password must be atleast 6 characters!';
              }
              if (empty($data['pass2'])){
              $data['pass2_err'] = 'Please enter the confirmation password!';
          }
              elseif ($data['pass'] != $data['pass2']){
                  $data['pass2_err'] = 'Passwords do not match!';
              }
          $this->view('users/register', $data);
      } else{
          echo 'yeetr';
          $this->view('users/register');
      }
  }
}