<!doctype html>
<html lang="en">
  <head>
    <title>Product</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .card-title{
            text-transform: uppercase;
            font-size: 0.7rem;
            font-weight: bolder;
        }
    </style>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body h-100"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    @foreach ($data as $key => $item)
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <div class="card-header">
                                    <span class="card-title">{{$key}}</span>
                                </div>
                                <div class="card-body">
                                    <img class="img-fluid" src="{{asset('assets/img/no-image.png')}}" alt="{{$key}}">
                                    <p>@foreach ($item['composition'] as $value)
                                            @if (count($item['composition']) > 1)
                                                {{$value}}&nbsp;,
                                            @else
                                                {{$value}}
                                            @endif
                                    @endforeach</p>
                                    <div>
                                        <p><b>Pack: </b>{{$item['size']}} ({{$item['packing']}})</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>