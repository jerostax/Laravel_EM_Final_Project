@extends('layouts.master')

@section('content')   
        <div class="row" id='create-event'>
            <div class="col-md-6">
                <h1>Créer un Produit :  </h1>
                <form action="{{route('partner.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form">
                            
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" name="nom" value="{{old('nom')}}" class="form-control" id="nom"
                                   placeholder="Nom du partenaire">
                            @if($errors->has('nom')) <span class="error bg-warning">{{$errors->first('nom')}}</span>@endif
                        </div>

                        <div class="form-group">
                            <label for="description">Déscription :</label>
                            <textarea type="text" name="description"class="form-control" placeholder="Déscription du partenaire">{{old('description')}}</textarea>
                            @if($errors->has('description')) <span class="error bg-warning">{{$errors->first('description')}}</span> @endif
                        </div>

                   
                    
            </div><!-- #end col md 6 -->

            <div class="col-md-6 create-right">

            <div class="input-file">
                <p>Image :</p>
                <input class="file" type="file" name="picture" >
                @if($errors->has('picture')) <span class="error bg-warning">{{$errors->first('picture')}}</span> @endif
            </div>

                    <button type="submit" class="btn btn-primary">Ajouter un Partenaire</button>
            
            </div>
            <!-- #end col md 6 -->
            
            </form>
        </div>
@endsection