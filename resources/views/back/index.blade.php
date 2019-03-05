@extends('layouts.master')
@section('dashboard-nav')
<div class="row">
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
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <table class="table table-striped dash-list">
                        <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Catégorie</th>
                                    <th>Prix</th>
                                    <th>Status</th>
                                    <th>Mettre à jour</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                    
                                    <tr>
                                            <td><a href=""></a></td>
                                            <td></td>
                                            <td></td>
                                            <td ></td>
                                            <td><a class="btn btn-primary" href="">Mettre à jour</a></td>
                                            <td>
                                                    <form class="delete" method="POST" action="">
                                                        
                                                        <input class="btn btn-danger" type="submit" value="Supprimer" >
                                                    </form>
                                                    </td>
                                    </tr>                                   
                                </tbody>
                        </table>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
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
                                    
                                    <tr>
                                            <td><a href=""></a></td>
                                            <td></td>
                                            <td ></td>
                                            <td><a class="btn btn-primary" href="">Mettre à jour</a></td>
                                            <td>
                                                    <form class="delete" method="POST" action="">
                                                        
                                                        <input class="btn btn-danger" type="submit" value="Supprimer" >
                                                    </form>
                                                    </td>
                                    </tr>                                   
                                </tbody>
                        </table>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                <table class="table table-striped dash-list">
                        <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Mettre à jour</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                    
                                    <tr>
                                            <td><a href=""></a></td>
                                            <td><a class="btn btn-primary" href="">Mettre à jour</a></td>
                                            <td>
                                                    <form class="delete" method="POST" action="">
                                                        
                                                        <input class="btn btn-danger" type="submit" value="Supprimer" >
                                                    </form>
                                                    </td>
                                    </tr>                                   
                                </tbody>
                        </table>
        </div>
      </div>
    </div>
  </div>
 
@endsection
