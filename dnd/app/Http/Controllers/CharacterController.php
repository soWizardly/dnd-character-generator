<?php

namespace App\Http\Controllers;

use App\CharacterModel;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {
        return CharacterModel::all();
    }
}
