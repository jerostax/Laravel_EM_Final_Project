@extends('layouts.master')
@section('dashboard-nav')
<div class="row" id='dashboard'>
 @include('back.menu')
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        @include('back.partials.flash')
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p><a href="{{route('partner.create')}}"><button type="button" class="btn btn-primary btn-lg">Ajouter un Partenaire</button></a></p>
                {{$partners->links()}}
                <table class="table table-striped dash-list">
                        <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Voir</th>
                                    <th>Mettre à jour</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($partners as $partner)
                                    <tr>
                                    <td><a href="{{route('partner.show', $partner->id)}}">{{$partner->nom}}</a></td>
                                  
                                            <td>
                                                <a href="{{route('partner.show', $partner->id)}}"><i class="fas fa-eye"></i></a>
                                            </td>
                                            <td><a class="btn btn-primary" href="{{route('partner.edit', $partner->id)}}">Mettre à jour</a></td>
                                            <td>
                                                    <form class="delete" method="POST" action="{{route('partner.destroy', $partner->id)}}">
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