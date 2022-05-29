<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Films;
use App\Models\films_categories;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FilmsController extends Controller
{

    public function index()
    {

        $films = Films::where('affiche', '=', 0)->limit(8)->get();
        $filma = Films::where('affiche', '=', 1)->offset(0)->limit(4)->get();

        return view('welcome', [
            //'films' c'est la variable utilisé dans le view et $films c'est la variable de la fonction 
            'films' => $films,
            'filma' => $filma,

        ]);
    }

    public function crud()
    {
        $films = Films::All();
        $categories = films_categories::All();
        return view('backend', [

            'films' => $films,
            'categories' => $categories,

        ]);
    }


    public function create(Request $request)
    {

        $name = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $film = Films::create([
            'titre' => $request->titre,
            'resume' => $request->resume,
            'date' => NOW(),
            'realisateur' => $request->realisateur,
            'duree' => $request->duree,
            'image' => $name,
        ]);

        $newfilm = new Films();
        $newfilm->image = $name;
        $film->save();


        return redirect()->route('backend')->with('success', 'Film ajouté');
    }



    public function update(Request $request, $id_film)
    {

        $name = Storage::disk('public')->put('img', $request->file('images'));    //chemin + nom image
        $film = Films::where('id_film', '=', $id_film);
        $film->update([
            'titre' => $request->titre,
            'resume' => $request->resume,
            'date' => NOW(),
            'realisateur' => $request->realisateur,
            'duree' => $request->duree,
            'image' => $name,
        ]);

        return redirect()->route('backend')->with('modifié', 'Film modifié');
    }


    public function delete($id_film)
    {
        $film = Films::where('id_film', '=', $id_film);
        $film->delete();
        return redirect()->route('backend')->with('deleted', 'Film supprimé');
    }

    public function show($id_film)
    {

        $filma = Films::find($id_film);

        return view('film', [
            'filma' => $filma,


        ]);
    }

    public function shows($id_film)
    {

        $filma = Films::find($id_film);


        return view('synopsis', [
            'filma' => $filma,


        ]);
    }


    public function search()
    {

        $search_text = $_GET['query'];
        $films = Films::where('titre', '=', $search_text)->get();
        return view('search', [
            'films' => $films,
        ]);
    }
}
