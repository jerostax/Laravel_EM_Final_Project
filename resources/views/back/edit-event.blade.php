@extends('layouts.master')

@section('content')   
        <div class="row" id='create-event'>
            <div class="col-md-6">
                <h1>Éditer un Évènement :  </h1>
                <form action="{{route('event.update', $event->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form">
                            
                        <div class="form-group">
                            <label for="titre">Titre :</label>
                            <input type="text" name="titre" value="{{$event->titre}}" class="form-control" id="titre"
                                   placeholder="Titre de l'évènement">
                            @if($errors->has('titre')) <span class="error bg-warning">{{$errors->first('titre')}}</span>@endif
                        </div>

                        <div class="form-group">
                            <label for="description">Déscription :</label>
                            <textarea type="text" name="description"class="form-control" placeholder="Déscription de l'Évènement">{{$event->description}}</textarea>
                            @if($errors->has('description')) <span class="error bg-warning">{{$errors->first('description')}}</span> @endif
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlInput1">Prix</label>
                                <input name="prix" value="{{$event->prix}}"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix">
                                @if($errors->has('prix')) <span class="error bg-warning ">{{$errors->first('prix')}}</span>@endif
                            </div>
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Prix Adhérent</label>
                                    <input name="promo" value="{{$event->promo}}"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix">
                                    @if($errors->has('promo')) <span class="error bg-warning ">{{$errors->first('promo')}}</span>@endif
                                </div>
                            <div class="form-group">
                                    <label for="exampleFormControlInput1">Date</label>
                                    
                                    <input name="date" value="{{$event->date}}"type="date" class="form-control" id="exampleFormControlInput1" placeholder="Date">
                                    @if($errors->has('date')) <span class="error bg-warning ">{{$errors->first('date')}}</span>@endif
                                </div>
                                <div class="form-select">
                                    <label for="category">Catégorie :</label>
                                    <select id="category" name="category_id">
                                        <option value="0" {{ is_null($event->category)? 'selected' : '' }} >Pas de categories</option>
                                        @foreach($categories as $id => $titre)
                                            <option {{ (!is_null($event->category) and $event->category->id == $id)? 'selected' : '' }}  value="{{$id}}">{{$titre}}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                <button type="submit" class="btn btn-primary">Modifier un Évènement</button>
                    </div>
                   
                    
            </div><!-- #end col md 6 -->

            <div class="col-md-6 create-right">
                    <div class="form-group">
                            <label for="form">Billeterie :</label>
                            <textarea type="text" name="form"class="form-control" placeholder="Lien du formulaire de l'évènement">{{$event->form}}</textarea>
                            @if($errors->has('form')) <span class="error bg-warning ">{{$errors->first('form')}}</span> @endif
                        </div>
                <div class="input-radio">
            <p>Status :</p>
            <input type="radio" @if($event->status=='Publié') checked @endif name="status" value="Publié" checked> Publier<br>
            <input type="radio" @if($event->status=='Brouillon') checked @endif name="status" value="Brouillon" > Brouillon<br>
            </div>
            <div class="input-file">
                <p>Image :</p>
                <input class="file" type="file" name="picture" >
                @if($errors->has('picture')) <span class="error bg-warning ">{{$errors->first('picture')}}</span> @endif
            </div>
            @if($event->pictureEvent->url_img_event)
            <div class="form-group">
                      <h3>Image associée :<h3>
                      <img width="200" src="{{url('images', $event->pictureEvent->url_img_event)}}" alt="">
            </div>
              @endif
            

                   
                    
            
            </div>
            <!-- #end col md 6 -->
            
            </form>
        </div>
@endsection