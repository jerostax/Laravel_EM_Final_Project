@extends('layouts.master')
@section('dashboard-nav')
<div class="row" id='dashboard'>
    @include('back.menu')
    
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        @include('back.partials.flash')
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p><a href="{{route('event.create')}}"><button type="button" class="btn btn-primary btn-lg">Ajouter un Évènement</button></a></p>
                {{$events->links()}}
                <table class="table table-striped dash-list">
                        <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Catégorie</th>
                                    <th>Prix</th>
                                    <th>Promo</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Voir</th>
                                    <th>Mettre à jour</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                    <td><a href="{{route('event.show', $event->id)}}">{{$event->titre}}</a></td>
                                    <td>{{$event->category->titre}}</td>
                                    <td>{{$event->prix}} €</td>
                                    <td>{{$event->promo}} €</td>
                                    <td>{{$event->date->format('d-m-Y')}}</td>
                                  
                                    
                                    
                                    <td > @if($event->status == 'Publié')
                                            <span style='color:green'>Publié</span>
                                            @else 
                                            <span style='color:red'>Brouillon</span>
                                            @endif</td>
                                            <td>
                                                <a href="{{route('event.show', $event->id)}}"><i class="fas fa-eye"></i></a>
                                            </td>
                                            <td><a class="btn btn-primary" href="{{route('event.edit', $event->id)}}">Mettre à jour</a></td>
                                            <td>
                                                    <form class="delete" method="POST" action="{{route('event.destroy', $event->id)}}">
                                                            {{ method_field('DELETE') }}
                                                            {{ csrf_field() }}
                                                        
                                                        <input class="btn btn-danger" type="submit" value="Supprimer" >
                                                    </form>
                                                    </td>
                                    </tr>
                                    @endforeach                                   
                                </tbody>
                        </table>
        </div>

      </div>
    </div>
  </div>
 
@endsection
@section('scripts')
    @parent
    <script src="{{asset('js/confirm.js')}}"></script>
@endsection