<div id="logo" class="super super-narrow-top special-narrow-left">
    <img src="{{ asset('img/dongkrak_logo.png') }}" alt="menu">
</div>

<div id="left-blob" class="super super-middle special-narrow-left nav-b">
    <img onClick="fullpage_api.moveSlideLeft()" src="{{ asset('img/blob_purple.png') }}" alt="menu">
</div>

<div id="right-blob" class="super super-middle special-narrow-right nav-b">
    <img onClick="fullpage_api.moveSlideRight()" src="{{ asset('img/blob_purple.png') }}" alt="menu">
</div>

<div id="menu" onClick="openNav()" class="super super-narrow-bottom special-narrow-left m-l">
    <img src="{{ asset('img/menu.png') }}" alt="menu">
</div>

<div id="menu" onClick="openNav()" class="super super-narrow-top special-narrow-right m-r">
    <img src="{{ asset('img/menu.png') }}" alt="menu">
</div>

<div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="#community" onclick="window.location.href='#community';" class="subtitle">Community</a>
      <a href="#bazaar" onclick="window.location.href='#bazaar';" class="subtitle" >Bazaar</a>
      <a onclick="window.location.href='#exhibition';" class="subtitle" href="javascript:void(0)">Exhibition</a>
      <a onclick="window.location.href='#music';" class="subtitle" href="javascript:void(0)">Music</a>
      <a onclick="window.location.href='#ticket';" class="subtitle" href="javascript:void(0)">Ticket</a>
      <a onclick="window.location.href='#lineup';" class="subtitle" href="javascript:void(0)">Line Up</a>
    </div>
  
  </div>
  