@extends('layouts.master')

@section('content')

        <h1>Update Movie</h1>
        @if(session('Succeed'))
<div class="alert alert-success" role="alert">
  {{session('Succeed')}}
</div>
@endif
    <div class="row">
        <div class="col lg 12">
    
        <form action="/movies/{{$movies->id}}/update" method="POST">
            {{csrf_field()}}
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Movie Title</label>
          <input name="Title" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder= "Movie Title" value="{{$movies->Title}}">
        </div>
      
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Release Year</label>
          <input name="Release_Year" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder= "Release Year" value="{{$movies->Release_Year}}">
        </div>
      
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Director</label>
          <input name="Director"type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder= "Director" value="{{$movies->Director}}">
        </div>
      
        <div>
                  <label for="exampleFormControlSelect1">Genre</label>
                  <select name="Genre" class="form-control" id="exampleFormControlSelect1">
                    <option value="Action" @if($movies->Genre == 'Action') selected @endif>Action</option>
                    <option value="Horror" @if($movies->Genre == 'Horror') selected @endif>Horror</option>
                    <option Value="Thriller" @if($movies->Genre == 'Thriller') selected @endif>Thriller</option>
                    <option value="Drama" @if($movies->Genre == 'Drama') selected @endif>Drama</option>
                    <option value="Comedy" @if($movies->Genre == 'Comedy') selected @endif>Comedy</option>
                    <option value="Sci-Fi" @if($movies->Genre == 'Sci-Fi') selected @endif>Sci-Fi</option>
                    <option value="Western" @if($movies->Genre == 'Western') selected @endif>Western</option>
                    <option value="Adventure" @if($movies->Genre == 'Adventure') selected @endif>Adventure</option>
                    <option value="Narrative" @if($movies->Genre == 'Narrative') selected @endif>Narrative</option>
                    <option value="Mystery" @if($movies->Genre == 'Mystery') selected @endif>Mystery</option>
                    <option value="Fantasy" @if($movies->Genre == 'Fantasy') selected @endif>Fantasy</option>
                    <option value="Romance Novel @if($movies->Genre == 'Romance Novel') selected @endif">Romance Novel</option>
                    <option value="Historical Fiction" @if($movies->Genre == 'Historical Fiction') selected @endif>Historical Fiction</option>
                    <option value="Humor" @if($movies->Genre == 'Humor') selected @endif>Humor</option>
                    <option value="History" @if($movies->Genre == 'History') selected @endif>History</option>
                    <option value="Romance" @if($movies->Genre == 'Romance') selected @endif>Romance</option>
                    <option value="Dark Comedy" @if($movies->Genre == 'Dark Comedy') selected @endif>Dark Comedy</option>
                    <option value="Crime Fiction" @if($movies->Genre == 'Crime Fiction') selected @endif>Crime Fiction</option>
                    <option value="Speculative Fiction" @if($movies->Genre == 'Speculative Fiction') selected @endif>Speculative Fiction</option>
                    <option value="Historical Drama" @if($movies->Genre == 'Historical Drama') selected @endif>Historical Drama</option>
                    <option value="Romanctic Comedy" @if($movies->Genre == 'Romantic Comedy') selected @endif>Romantic Comedy</option>
                    <option value="Fiction" @if($movies->Genre == 'Fiction') selected @endif>Fiction</option>
                    <option value="Biography" @if($movies->Genre == 'Biography') selected @endif>Biography</option>
                    <option value="Sci-Fi Western" @if($movies->Genre == 'Sci-Fi Western') selected @endif>Sci-Fi Western</option>
                    <option value="Satire" @if($movies->Genre == 'Satire') selected @endif>Satire</option>
                    <option value="Screenplay" @if($movies->Genre == 'Screenplay') selected @endif>Screenplay</option>
                    <option value="Hybrid Genres" @if($movies->Genre == 'Hybrid Genre') selected @endif>Hybrid Genre</option>
                    <option value="Coming of Age Story" @if($movies->Genre == 'Coming of Age Story') selected @endif>Coming of Age Story</option>
                    <option value="Farce" @if($movies->Genre == 'Farce') selected @endif>Farce</option>
                    <option value="Slapstick" @if($movies->Genre == 'Slapstick') selected @endif>Slapstick</option>
                    <option value="Historical Romance" @if($movies->Genre == 'Historical Romance') selected @endif>Historical Romance</option>
                    <option value="Apocalypse Fiction" @if($movies->Genre == 'Apocalypse Fiction') selected @endif>Apocalypse Fiction</option>
                    <option value="Post Apocalypse Fiction" @if($movies->Genre == 'Post Apocalypse Fiction') selected @endif>Post Apocalypse Fiction</option>
                    <option value="MeloDrama" @if($movies->Genre == 'MeloDrama') selected @endif>MeloDrama</option>
                    <option value="Suspense" @if($movies->Genre == 'Suspense') selected @endif>Suspense</option>
                    <option value="Adventure Fiction" @if($movies->Genre == 'Adventure Fiction') selected @endif>Adventure Fiction</option>
                    <option value="Psychological Thriller" @if($movies->Genre == 'Psychological Thriller') selected @endif>Psychological Thriller</option>
                    <option value="Play" @if($movies->Genre == 'Play') selected @endif>Play</option>
                    <option value="Body Horro" @if($movies->Genre == 'Body Horror') selected @endif>Body Horror</option>
                    <option value="Magical Realism" @if($movies->Genre == 'Magical Realism') selected @endif>Magical Realism</option>
                    <option value="Parody" @if($movies->Genre == 'Parody') selected @endif>Parody</option>
                    <option value="Religious" @if($movies->Genre == 'Religious') selected @endif>Religious</option>
                    <option value="Action Fiction" @if($movies->Genre == 'Action Fiction') selected @endif>Action Fiction</option>
                    <option value="Legal Drama" @if($movies->Genre == 'Legal Drama') selected @endif>Legal Drama</option>
                  </select>
                </div>

                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
    @endsection