<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $listUser = $this->user->all();
        return view('user.index', compact('listUser'));
    }

    public function create()
    {
        return view('user.add');
    }
    public function store()
    {

    }
}
