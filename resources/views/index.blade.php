<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title', 'Harry')
</head>
<body>
    @extends('includes.header')

    @section('content')
    <div class="row" style="margin: 50px;">
        <div class="col-md-6">
            <p>
                <h3>
                    HOME PAGE
                </h3>
              This is my home page.
            </p>

        </div>
    </div>
    <div class="row" style="margin:50px">
        <div class="col-md-6">
            <p>
                <br><br><br>
                First laravel project.
            </p>
        </div>
    </div>
    @endsection
</body>
</html>