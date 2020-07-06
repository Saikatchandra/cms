<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>hello</title>

    
    <meta name="author" content="saikat">

    <link href="{{asset('user/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('user/css/style.css')}}" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
    <div class="row pt-3">
        <div class="col-md-8">
            <div class="row">
               @foreach($vedios as $v)
                @if($v->section == 1) 
                <div class="col-md-6">
                  
                         {!! $v->link  !!}
                
                   
                    <h6>
                        {{$v->title}}
                    </h6>
                    <p>
                        {{$v->description}}
                    </p>
                </div>
                @endif
                @endforeach
                <div class="col-md-6">
                    <div class="row">
                        @foreach($vedios as $v)
                            @if($v->section == 1) 
                                    <div class="col-md-6">
                                         {!! $v->link  !!}
                                        <h6>
                                            {{$v->title}}
                                        </h6>
                                    </div>
                                      @endif
                            @endforeach
                    </div>
               
                   
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                @foreach($posts as $p)
                @if($p->section == 2)   
                <div class="col-md-12">
                      <img alt="Bootstrap Image Preview" src="{{('/'.$p->image)}}" style="width: 130px; height: 150px">
                    <h6>
                        {{$p->title}}
                    </h6>
                    <p>
                        {{$p->description}} 
                    </p>
                </div>
                 @endif
                @endforeach
            </div>
            <div class="row">
            @foreach($posts as $p)
                @if($p->section == 2) 
                <div class="col-md-6">
                    <img alt="Bootstrap Image Preview" src="{{('/'.$p->image)}}" style="width: 130px; height: 150px">
                    
                    <h6>
                        {{$p->title}}
                    </h6>
                </div>
                 @endif
                @endforeach
            </div>
         
        </div>
    </div>
</div>

    <script src="{{asset('user/js/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/scripts.js')}}"></script>
  </body>
</html>