<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Acme</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('/') ? 'active' : ''}}"><a href="/">Home</a></li>
                <li class="{{Request::is('about') ? 'active' : ''}}"><a href="/about">About</a></li>
                <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/contact">Contact</a></li>
                <li class="{{Request::is('messages') ? 'active' : ''}}"><a href="/messages">Messages</a></li>
            </ul>
        </div>
    </div>
</nav>