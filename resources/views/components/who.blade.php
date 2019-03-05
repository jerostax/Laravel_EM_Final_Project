@if(Auth::guard('web')->check())
    <p class='text-success'>Vous êtes connecté en tant que membre</p>
@else
<p class='text-danger'>Vous êtes deconnecté en tant que membre</p>
@endif
@if(Auth::guard('admin')->check())
    <p class='text-success'>Vous êtes connecté en tant qu'admin</p>
@else
    <p class='text-danger'>Vous êtes deconnecté en tant qu'admin</p>
@endif