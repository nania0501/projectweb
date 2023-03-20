<?php
namespace App\Http\Controllers;
use App\Http\Controllers\UserController;
use Illuminatte\Http\Request;

class ManagementUserController extends Controller
{
    public function index(){
        return "Halo ini adalah method index, dalam controller ManagementUser.";
    }
}