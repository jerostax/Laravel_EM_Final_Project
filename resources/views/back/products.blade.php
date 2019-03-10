@extends('layouts.master')
@section('dashboard-nav')
<div class="row" id='dashboard'>
  @include('back.menu')
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        @include('back.partials.flash')
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <p><a href="{{route('product.create')}}"><button type="button" class="btn btn-primary btn-lg">Ajouter un Produit</button></a></p>
                {{$products->links()}}
                <table class="table table-striped dash-list">
                        <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prix</th>
                                    <th>Status</th>
                                    <th>Voir</th>
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
                                            @endif
                                    </td>
                                    <td>
                                            <a href=""><i class="fas fa-eye"></i></a>
                                    </td>
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