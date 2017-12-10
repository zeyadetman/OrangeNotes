<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}">        
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch|Raleway" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
     <div class="header">
            <p class="logo"><span>Orange</span> Notes</p>
                @if (true)
                <ul>
                    <a href="/login"><li>Log in</li></a>
                    <a href="/signup"><li>Sign up</li></a>
                </ul>
                @else
                <ul>
                    <a href=""><li>Notes</li></a>
                    <a href=""><li>Notebooks</li></a>                    
                    <a href=""><li>Create New Notebook</li></a>                                                                            
                    <a href=""><li>Add New Note</li></a>
                    
                </ul>
                @endif
            </div>
             <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="{{asset('/js/welcome.js') }}"></script>
        @yield('content')
    </body>
</html>