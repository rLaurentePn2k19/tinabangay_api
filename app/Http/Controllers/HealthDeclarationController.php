<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HealthDeclaration;
class HealthDeclarationController extends APIController
{
  function __construct(){
    $this->model = new HealthDeclaration();
  }
}
