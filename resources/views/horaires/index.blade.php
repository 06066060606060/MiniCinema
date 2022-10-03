@extends('vendor.template')
 
@section('content')
    <div class="container">
        <div class="row col-md-offset-3 col-md-6">
            <h1>Restaurants</h1>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Liste des restaurants</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($films as $film)
                            <tr>
                                <td>{{ $film['id_film'] }}</td>
                                <td class="text-primary"><strong>{{ $film->titre }}</strong></td>
                                
                                <td><a href="{{route('horaires.show',$film['id_film'])}}"> voir</a></td>
                                <td><a href="{{route('horaires.edit',$film['id_film'])}}"> modifier</a></td>
                               <td> @include('includes.delete')
                                 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          
        </div>
    </div>
@endsection