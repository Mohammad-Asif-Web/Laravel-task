<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        // $tasks = Task::all();
        $users = User::latest()->get();
        
        return view('user-list', compact('users'));
    }
}
