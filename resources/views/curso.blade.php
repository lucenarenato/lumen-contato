<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Code Agenda</title>

    {{--<link href="css/app.css" rel="stylesheet">--}}
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 page-header">
            <h1>
                Code.Education <br>
                <small><i class="glyphicon glyphicon-phone-alt"></i> Agenda Telefônica</small>
                <span class="pull-right">
                     <form class="form-inline" action="#" method="post">
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Pesquisar Contato...">
                           <span class="input-group-btn">
                               <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                           </span>
                        </div>
                     </form>
                  </span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @foreach(range('A', 'Z') as $letra)
                <a href="{{ route('curso.letra', ['letra' => $letra]) }}" class="btn btn-primary btn-xs">{{$letra}}</a>
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 btn-row">
            <a href="#" class="btn btn-primary">Novo Contato</a>
        </div>
    </div>
    <div class="row">
        @yield('content')
    </div>
</div>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/scripts.js"></script>
{{--<script src="{{ url('js/scripts.js') }}"></script>--}}
</body>
</html>

