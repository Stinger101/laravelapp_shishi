<header>
    <div class="container">
<div id="branding">
  <h1> <span class="highlight">Nairobi National Park </span>Wildlife</h1>
</div>
<nav>

  <ul>

        <li><a href="services.html">services</a></li>
        @can('manage_wildlife')
        <li class="current"><a href="/manager">Manager</a></li>
        @endcan
        @can('vet_wildlife')
        <li class="current"><a href="/vet">Vet</a></li>
        @endcan
        @can('users_manage')
        <li class="current"><a href="/">Admin</a></li>
        @endcan
        <li><a href="#logout" onclick="$('#logout').submit();">Logout</li>


  </ul>
  {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
  <button type="submit">@lang('global.logout')</button>
  {!! Form::close() !!}

</nav>
</div>
  </header>
	<!-- Simple header with fixed tabs. -->

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header
            mdl-layout--fixed-tabs">
            @can('manage_wildlife')
  <header class="mdl-layout__header" style="background-color: #434323">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">WILDLIFE MANAGER</span>
    </div>
    <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background-color: #434323">
      <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Add animal</a>
      <a href="#fixed-tab-2" class="mdl-layout__tab">All animals</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Wildlife Exchange</a>


    </div>

  </header>
  @endcan
  @can('users_manage')
<header class="mdl-layout__header" style="background-color: #434323">
<div class="mdl-layout__header-row">
<!-- Title -->
<span class="mdl-layout-title">SITE ADMIN</span>
</div>
<!-- Tabs -->
<div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background-color: #434323">
<a href="{{ route('admin.abilities.index') }}" class="mdl-layout__tab is-active">@lang('global.abilities.title')</a>
<a href="{{ route('admin.roles.index') }}" class="mdl-layout__tab">@lang('global.roles.title')</a>
<a href="{{ route('admin.users.index') }}" class="mdl-layout__tab">@lang('global.users.title')</a>


</div>

</header>
@endcan
  @can('vet_wildlife')
  <header class="mdl-layout__header" style="background-color: #434323">
    <div class="mdl-layout__header-row">

      <span class="mdl-layout-title">WILDLIFE VETERINARY DOCTOR</span>
    </div>
    <!-- Tab area -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background-color: #434323">
      <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Add check up details.</a>
      <a href="#fixed-tab-2" class="mdl-layout__tab">View records</a>

    </div>


  </header>
  @endcan
