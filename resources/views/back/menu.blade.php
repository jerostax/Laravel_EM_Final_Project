<div id='dash-nav'class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <h2 id='dash-title'>Dashboard</h2>
        <a class="nav-link {{ request()->is('admin/event') ? 'active' : '' }}" id="v-pills-home-tab" href="{{route('event.index')}}" role="tab" aria-controls="v-pills-home" aria-selected="true">Évènements</a>
          <a class="nav-link {{ request()->is('admin/product') ? 'active' : '' }}" id="v-pills-profile-tab"  href="{{route('product.index')}}" role="tab" aria-controls="v-pills-profile" aria-selected="false">Produits</a>
          <a class="nav-link {{ request()->is('admin/partner') ? 'active' : '' }}" id="v-pills-messages-tab"  href="{{route('partner.index')}}" role="tab" aria-controls="v-pills-messages" aria-selected="false">Partenaires</a>
        </div>
      </div>