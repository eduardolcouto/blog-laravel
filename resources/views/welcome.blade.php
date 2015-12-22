<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
                <h3><a href="{{url('auth/logout')}}">Logout</a></h3>
                 <br>
        <table class="table">
            <tr>
                <th>Acesso</th>
            </tr>
            @foreach($log_acessos as $log)
            <tr>
                <td>{{$log->data_acesso}}</td>
            </tr>
            @endforeach
        </table>
            </div>
        </div>
       
    </body>
</html>
