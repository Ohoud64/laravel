@extends('layouts.appuserui')
@section('content')

<div class="container">
    <div class="row mt-5">
        <div class="col">
           @foreach($products as $product)
           <div class="row mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-body"  style="background-color: #CBBCB1; color: white;">
                        <div class="row mt-3">
                            <div class="col">
                              
                            @if($category == 'games')
                            <img src="https://rukminim1.flixcart.com/image/1664/1664/gamingconsole/g/a/t/playstation-4-ps4-500-sony-dualshock-4-controller-original-imadrhehpvvetkgf.jpeg?q=90" wedith="200" height="200">
                            <!--<img src="https://th.bing.com/th/id/OIP.YEqIOqhGxyfrNGi3oUZ0eQHaEn?rs=1&pid=ImgDetMain" wedith="200" height="200">-->
                            @elseif($category == 'houseware')
                            <img src="https://www.homesdirect365.co.uk/images/puro-white-console-table-p64367-96551_zoom.jpg" wedith="200" height="200">
                            <!--<img src="https://img.freepik.com/free-photo/close-up-arrangement-modern-vases_23-2149646531.jpg?t=st=1731379448~exp=1731383048~hmac=4f97676b4f3a6874b12b557e29aeab9f15f29880333ec28a1bf1f7ee662dea42&w=360" wedith="200" height="200">
                               <img src="https://m.media-amazon.com/images/I/612ysynMM5L._AC_SX355_.jpg"wedith="200" height="200">-->
                             @elseif($category == 'electronics')
                              <img src="https://f.nooncdn.com/p/pnsku/N53432479A/45/_/1694762196/41851adf-464e-4d18-ac48-b8647ab2600b.jpg?format=avif&width=800" wedith="200" height="200">
                              <!--<img src="https://m.media-amazon.com/images/I/51YaFoheLGL._AC_SX679_.jpg" wedith="200" height="200">
                              <img src="https://m.media-amazon.com/images/I/71CxaAl1kKL._AC_SX679_.jpg" wedith="200" height="200"-->
                                  @endif
                            </div>
                            <div class="col">
                                <h1 class="alert "  style="background-color: #AF6B58; color: white;">{{$product->name}}</h1>
                                <p >{{$product->description}}</p>
                            </div>                    
                        </div>

                        <div class="row">
                            <div class="col text-center">
                                <a href="{{route('pnbp',['id'=>$product->id])}}" class="btn "  style="background-color: #A9907E; color: white;">تفاصيل</a>
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