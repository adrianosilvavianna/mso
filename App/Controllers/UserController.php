<?php
namespace App\Controllers;

use App\Models\Profile;
use App\Models\User;
use Cac\Controller\Action;
use Cac\Exception\ModelException;
use Cac\Support\Mail;
use Cac\Support\Validation;

class UserController extends Action
{
    private $name;
    private $email;
    private $category;
    private $message;

    public function sendEmail()
    {
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->category = $_POST['category'];
        $this->message = $_POST['message'];



        new Mail([$_REQUEST['email'] => 'Nome'], "Menssagem", 'Assunto', false);
    }
}