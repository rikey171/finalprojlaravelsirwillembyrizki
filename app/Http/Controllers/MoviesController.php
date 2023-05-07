<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;



/**
 * Summary of MoviesController
 */
class MoviesController extends Controller
{
    
    public function index(Request $request)
    {
        if($request->has('search'))
        {
            $data_movies = movies::where('Title' ,'LIKE','%'.$request->search.'%')->get();
        }
        else{
            $data_movies = Movies:: all();
        }
        
        
        
        return view('movies.index',['data_movies'=> $data_movies]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Movies::create($request->all());    
        return redirect('/movies')->with('Succeed', 'The Data Has Been Submitted');
    }       

    public function edit($id){
        $movies = Movies::find($id);
        return view('movies/edit', ['movies' => $movies]);
    }
    
    public function update(Request $request,$id)
    
    {
        $movies = movies::find($id);
        $movies ->update($request->all());
        return redirect('movies')->with('Succeed', 'Data Has Been Updated');
    }

    public function delete($id)
    {
        $movies = movies::find($id);
        $movies->delete($movies);
        return redirect('movies')->with('Succeed','The Data Has Been Deleted');
    }
}
