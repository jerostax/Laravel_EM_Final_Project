<footer>
        
        <div class='col-5 footer'>lala
        </div>
                <div class="col-5  footer" id='contact'>
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
                                                <input type="text" class="form-control" id="email" placeholder="votremail@example.com" name="email" required>
                                        </div>
                        
                                        <div class="form-group">
                                                <label for="message">message: </label>
                                                <textarea type="text" class="form-control luna-message" id="message" placeholder="Écrivez votre message ici" name="message" required></textarea>
                                        </div>
                        
                                                <div class="form-group">
                                                        <button type="submit" class="btn btn-primary" value="Send">Envoyer</button>
                                                </div>
                                        </form>
                                </div>
                     
                        
</footer>