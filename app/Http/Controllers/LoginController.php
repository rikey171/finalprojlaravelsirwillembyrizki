<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class LoginController extends Controller
{
   
    protected $redirectTo = '/movies';


    public function showLoginForm()
    {
        $data_movies = Movies::all();
        return view('auth.login');
    
    }

    protected function authenticated(Request $request, $user)
{
    return redirect('/movies');
}
    

}
