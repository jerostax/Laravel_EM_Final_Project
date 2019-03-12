@extends('layouts.master')

@section('content')   
        <div class="row" id='create-event'>
            <div class="col-md-6">
                <h1>Créer un Produit :  </h1>
                <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form">
                            
                        <div class="form-group">
                            <label for="titre">Titre :</label>
                            <input type="text" name="titre" value="{{old('titre')}}" class="form-control" id="titre"
                                   placeholder="Nom du produit">
                            @if($errors->has('titre')) <span class="error bg-warning">{{$errors->first('titre')}}</span>@endif
                        </div>

                        <div class="form-group">
                            <label for="description">Déscription :</label>
                            <textarea type="text" name="description"class="form-control" placeholder="Déscription du produit">{{old('description')}}</textarea>
                            @if($errors->has('description')) <span class="error bg-warning">{{$errors->first('description')}}</span> @endif
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlInput1">Prix</label>
                                <input name="prix" value="{{old('prix')}}"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix">
                                @if($errors->has('prix')) <span class="error bg-warning ">{{$errors->first('prix')}}</span>@endif
                            </div>
                    </div>
                   
                    
            </div><!-- #end col md 6 -->

            <div class="col-md-6 create-right">
                    <div class="form-group">
                            <label for="form">Formulaire de paiement :</label>
                            <textarea type="text" name="form"class="form-control" placeholder="Lien du formulaire de paiement">{{old('form')}}</textarea>
                            @if($errors->has('form')) <span class="error bg-warning">{{$errors->first('form')}}</span> @endif
                        </div>
                        <div class="input-radio">
                                <p>Status :</p>
                                <input type="radio" @if(old('status')=='Publié') checked @endif name="status" value="Publié" checked> Publier<br>
                                <input type="radio" @if(old('status')=='Brouillon') checked @endif name="status" value="Brouillon" > Brouillon<br>
                                </div>
            <div class="input-file">
                <p>Image :</p>
                <input class="file" type="file" name="picture" >
                @if($errors->has('picture')) <span class="error bg-warning">{{$errors->first('picture')}}</span> @endif
            </div>

                    <button type="submit" class="btn btn-primary">Ajouter un Produit</button>
            
            </div>
            <!-- #end col md 6 -->
            
            </form>
        </div>
@endsection