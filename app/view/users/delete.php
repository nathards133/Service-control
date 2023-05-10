<?php
require_once 'app/model/User.php';
use App\Model\User;

$userModel = new User();
$userModel->delete($_GET['id']);
header('Location: user_list.php');
