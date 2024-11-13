@extends('layouts.appuserui')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
           @foreach($gk as $ded)
           <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col">
                              <img src="https://rukminim1.flixcart.com/image/1664/1664/gamingconsole/g/a/t/playstation-4-ps4-500-sony-dualshock-4-controller-original-imadrhehpvvetkgf.jpeg?q=90" wedith="200" height="200">
                              <img src="https://th.bing.com/th/id/OIP.YEqIOqhGxyfrNGi3oUZ0eQHaEn?rs=1&pid=ImgDetMain" wedith="200" height="200">

                            </div>
                            <div class="col">
                                <h1 class="alert alert-success">{{$ded->name}}</h1>
                                <p >{{$ded->description}}</p>
                            </div>                    
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <a href="{{route('pnbp',['id'=>$ded->id])}}" class="btn btn-primary">تفاصيل</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
           @endforeach
        </div>
    </div>
</div>

@endsection

