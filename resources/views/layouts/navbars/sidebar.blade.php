<div class="sidebar bg-success" data-color="green" data-background-color="green" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      <img src="{{ asset('images/logo.png')}}" alt="Logo" class="img">
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="/admin/images">
          <i class="material-icons">photos</i>
          <p>{{ __('Images') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link" href="/admin/audio">
          <i class="material-icons">library_music</i>
          <p>{{ __('Audio') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="/admin/videos">
          <i class="material-icons">music_video</i>
            <p>{{ __('Videos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="/admin/parameters">
          <i class="material-icons">segment</i>
            <p>{{ __('Parameters') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="/admin/station">
          <i class="material-icons">window_open</i>
            <p>{{ __('Stations') }}</p>
        </a>
      </li>
      <!-- <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="/admin/notifications">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li> -->
      <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="/admin/user">
              <i class="material-icons">manage_accounts</i>
          <p>{{ __('User Management') }}</p>
              </a>
      </li>
     
    </ul>
  </div>
</div>
