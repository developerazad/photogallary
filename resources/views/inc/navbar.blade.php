<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Photo Gallary</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{{Request::is('/')?'active':''}}"><a href="{{ url('/') }}">Home</a></li>

            </ul>
            <ul class="nav navbar-nav pull-right">
                <li class="{{Request::is('todo/create')?'active':''}}"><a href="{{ url('album/create') }}">Create</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>