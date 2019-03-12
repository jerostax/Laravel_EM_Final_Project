@extends('layouts.master')

@section('content')   
        <div class="row">
            <div class="col-md-6">
                <h1>Éditer un Partenaire :  </h1>
                <form action="{{route('partner.update', $partner->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form">
                            
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" name="nom" value="{{$partner->nom}}" class="form-control" id="nom"
                                   placeholder="Titre de l'évènement">
                            @if($errors->has('nom')) <span class="error bg-warning">{{$errors->first('nom')}}</span>@endif
                        </div>

                        <div class="form-group">
                            <label for="description">Déscription :</label>
                            <textarea type="text" name="description"class="form-control" placeholder="Déscription de l'Évènement">{{$partner->description}}</textarea>
                            @if($errors->has('description')) <span class="error bg-warning">{{$errors->first('description')}}</span> @endif
                        </div>
                                                      
                                <button type="submit" class="btn btn-primary">Modifier un Partenaire</button>
                    </div>
                   
                    
            </div><!-- #end col md 6 -->

            <div class="col-md-6 create-right">
            <div class="input-file">
                <p>Image :</p>
                <input class="file" type="file" name="picture" >
                @if($errors->has('picture')) <span class="error bg-warning ">{{$errors->first('picture')}}</span> @endif
            </div>
            @if($partner->picturePartner->url_img_partners)
            <div class="form-group">
                      <h3>Image associée :<h3>
                      <img width="200" src="{{url('images', $partner->picturePartner->url_img_partners)}}" alt="">
            </div>
              @endif
            

                   
                    
            
            </div>
            <!-- #end col md 6 -->
            
            </form>
        </div>
@endsection