@extends('layouts.master')

@section('content')   
        <div class="row">
            <div class="col-md-6">
                <h1>Éditer un Produit :  </h1>
                <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    {{method_field('PUT')}}
                    <div class="form">
                            
                        <div class="form-group">
                            <label for="titre">Titre :</label>
                            <input type="text" name="titre" value="{{$product->titre}}" class="form-control" id="titre"
                                   placeholder="Titre de l'évènement">
                            @if($errors->has('titre')) <span class="error bg-warning">{{$errors->first('titre')}}</span>@endif
                        </div>

                        <div class="form-group">
                            <label for="description">Déscription :</label>
                            <textarea type="text" name="description"class="form-control" placeholder="Déscription de l'Évènement">{{$product->description}}</textarea>
                            @if($errors->has('description')) <span class="error bg-warning">{{$errors->first('description')}}</span> @endif
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlInput1">Prix</label>
                                <input name="prix" value="{{$product->prix}}"type="text" class="form-control" id="exampleFormControlInput1" placeholder="Prix">
                                @if($errors->has('prix')) <span class="error bg-warning ">{{$errors->first('prix')}}</span>@endif
                            </div>
                           
                          
                              
                                <button type="submit" class="btn btn-primary">Modifier un Évènement</button>
                    </div>
                   
                    
            </div><!-- #end col md 6 -->

            <div class="col-md-6 create-right">
                    <div class="form-group">
                            <label for="form">Formulaire de paiement :</label>
                            <textarea type="text" name="form"class="form-control" placeholder="Lien du formulaire de l'évènement">{{$product->form}}</textarea>
                            @if($errors->has('form')) <span class="error bg-warning ">{{$errors->first('form')}}</span> @endif
                        </div>
                        <div class="input-radio">
                                <p>Status :</p>
                                <input type="radio" @if($product->status=='Publié') checked @endif name="status" value="Publié" checked> Publier<br>
                                <input type="radio" @if($product->status=='Brouillon') checked @endif name="status" value="Brouillon" > Brouillon<br>
                                </div>
            <div class="input-file">
                <p>Image :</p>
                <input class="file" type="file" name="picture" >
                @if($errors->has('picture')) <span class="error bg-warning ">{{$errors->first('picture')}}</span> @endif
            </div>
            @if($product->pictureProduct->url_img_products)
            <div class="form-group">
                      <h3>Image associée :<h3>
                      <img width="200" src="{{url('images', $product->pictureProduct->url_img_products)}}" alt="">
            </div>
              @endif
            

                   
                    
            
            </div>
            <!-- #end col md 6 -->
            
            </form>
        </div>
@endsection