@extends('layouts.master')
@section('dashboard-nav')
<div class="row" id='dashboard'>
    <div id='dash-nav'class="col-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <h2 id='dash-title'>Dashboard</h2>
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Évènements</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Produits</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Partenaires</a>
      </div>
    </div>
    
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
                                    <th>Mettre à jour</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                    <td><a href="">{{$event->titre}}</a></td>
                                    <td>{{$event->category->titre}}</td>
                                    <td>{{$event->prix}} €</td>
                                    <td>{{$event->promo}} €</td>
                                    <td>{{$event->date}}</td>
                                  
                                    
                                    
                                    <td > @if($event->status == 'Publié')
                                            <span style='color:green'>Publié</span>
                                            @else 
                                            <span style='color:red'>Brouillon</span>
                                            @endif</td>
                                  
                                            <td><a class="btn btn-primary" href="">Mettre à jour</a></td>
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
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <p><a href=""><button type="button" class="btn btn-primary btn-lg">Ajouter un Produit</button></a></p>
                {{$products->links()}}
                <table class="table table-striped dash-list">
                        <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>Status</th>
                                    <th>Mettre à jour</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                    <td><a href="">{{$product->titre}}</a></td>
                                    <td>{{$product->prix}} €</td>
                                    <td > @if($product->status == 'Publié')
                                            <span style='color:green'>Publié</span>
                                            @else 
                                            <span style='color:red'>Brouillon</span>
                                            @endif</td>
                                            <td><a class="btn btn-primary" href="">Mettre à jour</a></td>
                                            <td>
                                                    <form class="delete" method="POST" action="">
                                                        
                                                        <input class="btn btn-danger" type="submit" value="Supprimer" >
                                                    </form>
                                                    </td>
                                    </tr> 
                                    @endforeach                                  
                                </tbody>
                        </table>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <p><a href=""><button type="button" class="btn btn-primary btn-lg">Ajouter un Partenaire</button></a></p>
                {{$partners->links()}}
                <table class="table table-striped dash-list">
                        <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Mettre à jour</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($partners as $partner)
                                    <tr>
                                    <td><a href="">{{$partner->nom}}</a></td>
                                            <td><a class="btn btn-primary" href="">Mettre à jour</a></td>
                                            <td>
                                                    <form class="delete" method="POST" action="">
                                                        
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