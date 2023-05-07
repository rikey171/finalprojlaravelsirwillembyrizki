@extends('layouts.master')

@section('content')

    <div class="row">
    <div class="col-12">
    <h1>Movies Data</h1>
    <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
Add Movie Data
</button>
</div>

<table class="table table-dark table-borderless" >
    <tr>
        <th>Title</th>
        <th>Release Year</th>
        <th>Director</th>
        <th>Genre</th>
        <th>Action</th>
    </tr>
    @foreach($data_movies as $Movies)
    <tr>
        <td>{{$Movies->Title}}</td>
        <td>{{$Movies->Release_Year}}</td>
        <td>{{$Movies->Director}}</td>
        <td>{{$Movies->Genre}}</td>
        <td>
          <a href="/movies/{{$Movies->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
        <a href="/movies/{{$Movies->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are u Sure ABout That? :v')">Delete</a>
        </td>
    </tr>
    @endforeach    
</table>
@if(session('Succeed'))
<div class="alert alert-success" role="alert">
  {{session('Succeed')}}
</div>
    </div>
    </div>
@endif
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Movie title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/movies/create" method="POST">
      {{csrf_field()}}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Movie Title</label>
    <input name="Title" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder= "Movie Title">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Release Year</label>
    <input name="Release_Year" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder= "Release Year">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Director</label>
    <input name="Director"type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder= "Director">
  </div>

  <div>
            <label for="exampleFormControlSelect1">Genre</label>
            <select name="Genre" class="form-control" id="exampleFormControlSelect1">
              <option value="Action">Action</option>
              <option value="Horror">Horror</option>
              <option Value="Thriller">Thriller</option>
              <option value="Drama">Drama</option>
              <option value="Comedy">Comedy</option>
              <option value="Sci-Fi">Sci-Fi</option>
              <option value="Western">Western</option>
              <option value="Adventure">Adventure</option>
              <option value="Narrative">Narrative</option>
              <option value="Mystery">Mystery</option>
              <option value="Fantasy">Fantasy</option>
              <option value="Romance Novel">Romance Novel</option>
              <option value="Historical Fiction">Historical Fiction</option>
              <option value="Humor">Humor</option>
              <option value="History">History</option>
              <option value="Romance">Romance</option>
              <option value="Dark Comedy">Dark Comedy</option>
              <option value="Crime Fiction">Crime Fiction</option>
              <option value="Speculative Fiction">Speculative Fiction</option>
              <option value="Historical Drama">Historical Drama</option>
              <option value="Romanctic Comedy">Romantic Comedy</option>
              <option value="Fiction">Fiction</option>
              <option value="Biography">Biography</option>
              <option value="Sci-Fi Western">Sci-Fi Western</option>
              <option value="Satire">Satire</option>
              <option value="Screenplay">Screenplay</option>
              <option value="Hybrid Genres">Hybrid Genre</option>
              <option value="Coming of Age Story">Coming of Age Story</option>
              <option value="Farce">Farce</option>
              <option value="Slapstick">Slapstick</option>
              <option value="Historical Romance">Historical Romance</option>
              <option value="Apocalypse Fiction">Apocalypse Fiction</option>
              <option value="Post Apocalypse Fiction">Post Apocalypse Fiction</option>
              <option value="MeloDrama">MeloDrama</option>
              <option value="Suspense">Suspense</option>
              <option value="Adventure Fiction">Adventure Fiction</option>
              <option value="Psychological Thriller">Psychological Thriller</option>
              <option value="Play">Play</option>
              <option value="Body Horro">Body Horror</option>
              <option value="Magical Realism">Magical Realism</option>
              <option value="Parody">Parody</option>
              <option value="Religious">Religious</option>
              <option value="Action Fiction">Action Fiction</option>
              <option value="Legal Drama">Legal Drama</option>
            </select>
          </div>

          <button type="button" class="btn btn-primary">Save changes</button>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
     </form>
      </div>
    </div>
  </div>
</div>
    
@endsection