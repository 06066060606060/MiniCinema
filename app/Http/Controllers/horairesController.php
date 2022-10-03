<?php

namespace App\Http\Controllers;

use App\Models\Films;
use Illuminate\Http\Request;


use App\Http\Requests\FilmsUpdateRequest;
use App\Models\days;

class horairesController extends Controller
{
    public function index()
  {
    $films = Films::all();
    
 
    return view('horaires.index', compact('films'));    
  }
 
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id_film)
  {

    // $films = Films::with('days')->find($id_film);
  
    // $days = $this->getDaysWithfilms($id_film);
    // return view('horaires.show', [
    // 'films' => $films,
    // 'days' => $days,
    // ]);

    $days = $this->getDaysWithfilms($id_film);
    $films = $this->getfilmById($id_film);
 
    return view('horaires.show', compact('days', 'films'));

  }
 
  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $days = $this->getDaysWithfilms($id);
    $films = $this->getfilmById($id);
    $index = 1;
 
    return view('horaires.edit', compact('days','films', 'index'));    
  }
 
  /**
   * Update the specified resource in storage.
   *
   * @param  FilmsUpdateRequest $restaurantUpdateRequest
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {
    // Mise à jour du nom
    $films = Films::find($id);
    $films->titre = $request->titre;
    $films->save();
 
    // Balayage et mise à jour des plages
    $starts = $request->all()['start'];
    $ends = $request->all()['end'];    
    $films->days()->detach();
    foreach ($starts as $key => $array){
      foreach ($array as $k => $value) {
        $films->days()->attach([$key => ['start_time' => $value, 'end_time' => $ends[$key][$k]]]);
      }
    }
 
    return response()->json();    
  }
 
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $films = $this->getFilmsById($id);
    // Détachement des plages horaires
    $films->days()->detach();
    // Suppression du restaurant
    $films->delete();   
 
    return back(); 
  }
 
  protected function getDaysWithfilms($id) 
  {
    return days::with(['films' => function ($query) use($id) {
                $query->where('film_id', $id);
            }])->get();
  }
 
  protected function getfilmById($id_film)
  {
    return Films::find($id_film);
  }
   


  public function rules()
  {
      $rules = [
          'name' => 'required|max:255',
          'start.*' => 'date',
          'end.*' => 'date'
      ];

      return $rules;
  }


}
