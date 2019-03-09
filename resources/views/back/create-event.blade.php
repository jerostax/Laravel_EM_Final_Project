@extends('layouts.master')

@section('content')   
        <div class="row" id='create-event'>
            <div class="col-md-6">
                <h1>Créer un Évènement :  </h1>
                <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form">
                            
                        <div class="form-group">
                            <label for="titre">Titre :</label>
                            <input type="text" name="titre" value="{{old('titre')}}" class="form-control" id="titre"
                                   placeholder="Titre de l'Évènement">
                            @if($errors->has('titre')) <span class="error bg-warning">{{$errors->first('titre')}}</span>@endif
                        </div>

                        <div class="form-group">
                            <label for="description">Déscription :</label>
                            <textarea type="text" name="description"class="form-control" placeholder="Déscription de l'Évènement">{{old('description')}}</textarea>
                            @if($errors->has('description')) <span class="error bg-warning">{{$errors->first('description')}}</span> @endif
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlInput1">Prix</label>
                                <input name="prix" value="{{old('prix')}}"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix">
                                @if($errors->has('prix')) <span class="error bg-warning ">{{$errors->first('prix')}}</span>@endif
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Prix Adhérent</label>
                                    <input name="promo" value="{{old('promo')}}"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix">
                                    @if($errors->has('promo')) <span class="error bg-warning ">{{$errors->first('promo')}}</span>@endif
                                </div>
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Date</label>
                                    
                                    <input name="date" value="{{old('date')}}"type="date" class="form-control" id="exampleFormControlInput1" placeholder="Date">
                                    @if($errors->has('date')) <span class="error bg-warning ">{{$errors->first('date')}}</span>@endif
                                </div>
                    </div>
                   
                    
            </div><!-- #end col md 6 -->

            <div class="col-md-6 create-right">
                    <div class="form-group">
                            <label for="form">Billeterie :</label>
                            <textarea type="text" name="form"class="form-control" placeholder="Lien du formulaire de la billeterie">{{old('form')}}</textarea>
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
            <div class="form-select">
                    <label for="category">Catégorie :</label>
                    <select id="category" name="category_id">
                        <option value="0" {{ is_null(old('category_id'))? 'selected' : '' }} >Pas de categories</option>
                        @foreach($categories as $id => $titre)
                            <option {{ old('category_id')==$id? 'selected' : '' }} value="{{$id}}">{{$titre}}</option>
                        @endforeach
                    </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter un Évènement</button>
            
            </div>
            <!-- #end col md 6 -->
            
            </form>
        </div>
@endsection