@extends('layouts.appuserui')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
           @foreach($hk as $ded)
           <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col">
                              <img src="https://img.freepik.com/free-photo/close-up-arrangement-modern-vases_23-2149646531.jpg?t=st=1731379448~exp=1731383048~hmac=4f97676b4f3a6874b12b557e29aeab9f15f29880333ec28a1bf1f7ee662dea42&w=360" wedith="200" height="200">
                              <img src="https://www.homesdirect365.co.uk/images/puro-white-console-table-p64367-96551_zoom.jpg" wedith="200" height="200">
                               <img src="https://m.media-amazon.com/images/I/612ysynMM5L._AC_SX355_.jpg"wedith="200" height="200">
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

