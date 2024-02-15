<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    
    public function index()
    {
        return Users::all();
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(Users $users)
    {
        
    }

    public function update(Request $request, Users $users)
    {
        
    }

    
    public function destroy(Users $users)
    {
        
    }
}
