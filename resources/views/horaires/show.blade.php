@extends('vendor.template')
 
@section('content')
    <div class="container">
        <div class="row col-md-offset-3 col-md-6">
            <h1>Fiche du film</h1>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Nom du film</h3>
                </div>
                <div class="panel-body">
                    {{ $films->titre }}
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Horaires</h3>
                </div>
                <div class="panel-body">
                    
                
                    @foreach($days as $day)
                        @if($day->films->count() > 0)
                            <strong>{{ $day->name }} :</strong><br> 
                            <ul>
                            @foreach($day->films as $film)
                                <li>{{ $film->pivot->start_time }} à {{ $film->pivot->end_time }}</li>
                            @endforeach
                            </ul>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection