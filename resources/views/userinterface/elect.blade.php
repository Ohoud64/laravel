@extends('layouts.appuserui')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
           @foreach($mk as $ded)
           <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col">
                              <img src="https://img.freepik.com/free-vector/realistic-pink-smartphone-different-views_52683-28257.jpg?t=st=1731370082~exp=1731373682~hmac=adea3b5410201df62554375e9cc3a0786ebb9f0cf78192324f28ac38b3669778&w=1060" wedith="200" height="200">
                              <img src="https://m.media-amazon.com/images/I/51YaFoheLGL._AC_SX679_.jpg" wedith="200" height="200">
                              <img src="https://m.media-amazon.com/images/I/71CxaAl1kKL._AC_SX679_.jpg" wedith="200" height="200">
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
