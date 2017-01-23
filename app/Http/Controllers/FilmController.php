<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;





class FilmController extends Controller
{

	// The function is used to display all fields from the film table and returns them within the view.

    public function index()

    {

      $films = Film::all();

    return view('films.index')->with('films', $films);

    }

public function create()

{

return view('films.create');


}

public function store(Request $request)

// The function is used to enter new details of a film and add them to database which returns the success message.

{

  

  $film = new Film;
  $film->filmtitle = $request->filmtitle;
  $film->filmdescription = $request->filmdescription;
  $film->filmdirector = $request->filmdirector;
  $film->filmrating = $request->filmrating;
  $film->save();


   return redirect()->action('FilmController@index');

}


public function show($id)

// used to show the filmID and returns it within the view.

{

  $film = Film::find($id);

  return view('films.show')->with('film', $film);
}



public function destroy($id)

{

  Film::destroy($id);

  return redirect()->route('film.index');
  }

  


}






