   
<footer class='row'>
                <div class="col-lg-3 col-sm-10 col-md-9 footer" id='contact'>
                                <h1 class="mb-2 text-center">Contactez Nous</h1>
                                
                                @if(session('message'))
                                <div class='alert alert-success'>
                                        {{ session('message') }}
                                </div>
                                @endif
                                
                                
                                        <form class="form-horizontal" method="POST" action="/contact">
                                                {{ csrf_field() }} 
                                                <div class="form-group">
                                                <label for="Name">Nom: </label>
                                                <input type="text" class="form-control" id="name" placeholder="Votre nom" name="name" required>
                                        </div>
                        
                                        <div class="form-group">
                                                <label for="email">Email: </label>
                                                <input type="text" class="form-control" id="email" placeholder="votremail@exemple.com" name="email" required>
                                        </div>
                        
                                        <div class="form-group">
                                                <label for="message">Message: </label>
                                                <textarea type="text" class="form-control luna-message" id="message" placeholder="Écrivez votre message ici" name="message" required></textarea>
                                        </div>
                        
                                                <div class="form-group">
                                                        <button type="submit" class="btn btn-primary" value="Send">Envoyer</button>
                                                </div>
                                        </form>
                                </div>
                                <div class='col-lg-5 col-sm-12 footer'>
                                <img src='{{asset('assets/pictofluidici.png')}}'>
                                        <div id='info-footer'>
                                        <p>Du lundi au vendredi</p>
                                        <p>de 10h à 13h</p>
                                        <p>06 81 39 76 28</p>
                                        <p>fluid.flotgraphique.com</p>
                                        </div>
                                </div>
                                <div class='col-lg-3 col-sm-12 footer' id='picto-footer'>
                                                <a target="_blank" href="https://www.facebook.com/groups/1797643553621438/"><i class="fab fa-facebook-f"></i></a>
                                                <a target="_blank" href="https://www.instagram.com/fluid_flot_graphique/?hl=fr"><i class="fab fa-instagram"></i></a>
                                                <a target="_blank" href=""><i class="fab fa-pinterest"></i></a>
                                                <div id='mention'>
                                                                <p>Site réalisé par <a target='_blank' href='https://www.ecole-multimedia.com/'>L'ÉCOLE MULTIMÉDIA</a></p>
                                                                <p>Camille Nourtier</p>
                                                                <p>Estela Ranchy</p>
                                                                <p>Jérémy Geneste</p>
                                                                </div>
                                </div>
                     
                               <div class='row col-lg-12 mentions'>
                                       <p class='year'></p><p>&copy; fluid</p>
                                        <p class='mentions-2'><span>mentions légales</span> <span>cgv</span> <span>confidentialité</span> <span>mentions rgpd</span></p>
                                </div>
                 
                       <a href='#' id='arrow' class='animated fadeInLeft'><i class="fas fa-arrow-circle-up"></i></a>                         
</footer>
