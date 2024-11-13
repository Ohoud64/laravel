@extends('layouts.appuserui')
@section('content')


<style>
    
.games-title, .games-icon {
    color: #C38154; /*  للألعاب */
}

.home-tools-title, .home-tools-icon {
    color: #ABC4AA; /*   للأدوات المنزلية */
}

.electronics-title, .electronics-icon {
    color: #7E8A97; /*    للإلكترونيات */
}

/*  الهامش والمسافات */
.card-body {
    padding: 1.5rem;
}

.h1 {
    font-size: 3rem;
}
/* تأثير عند تمرير الماوس على المربع */
.card:hover {
    background-color: #3F2305; 
    color: white; 
}

.card:hover .games-title, .card:hover .games-icon {
    color: white; /* تغيير الأيقونة والنص إلى الأبيض */
}

.card:hover .home-tools-title, .card:hover .home-tools-icon {
    color: white;
}

.card:hover .electronics-title, .card:hover .electronics-icon {
    color: white;
}
/* إزالة خط الرابط تحت النص */
a {
    text-decoration: none; /* إزالة التسطير تحت الرابط */
}
</style>


<div class="container"  style="background-color: #F5F5F5; color: black;">
    <div class="row mt-5">
        <div class="col">
            <h3 class="text-end" >مرحبًا بك في منتقي</h3>
            <p class="text-end">.منتقي هو وجهتك المثالية للتسوق الإلكتروني، حيث تجد المنتجات المختارة بعناية لتمنحك تجربة تسوق استثنائية</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <!--<a href ="{{route('ppplll')}}""{{ route('category.show', ['category' => 'games']) }}">
            -->
        <a href ="{{ route('category.show', ['category' => 'games']) }}">
            <div class="card" >
                <div class="card-body" >
                    <div class="row text-end justify-content-end align-items-center" >
                        <div class="col-auto" >
                            <h3 class="games-title">الالعاب</h3>
                        </div>
                        <div class="col-auto">
                        <i class="bi bi-controller h1 games-icon"></i>


                        </div>
                    </div>
                </div>
            </div>
            </a>
            </div>
        <div class="col">
        <a href ="{{ route('category.show', ['category' => 'houseware']) }}" >
        <div class="card">
                <div class="card-body">
                    <div class="row text-end justify-content-end align-items-center">
                        <div class="col-auto">
                            <h3 class="home-tools-title">الادوات المنزلية</h3>
                        </div>
                        <div class="col-auto">
                        <i class="bi bi-house h1 home-tools-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col">
            <a href ="{{ route('category.show', ['category' => 'electronics']) }}">
        <div class="card">
                <div class="card-body">
                    <div class="row text-end justify-content-end align-items-center">
                        <div class="col-auto">
                            <button class="btn" type="submit"><h3 class="electronics-title">الإلكترونيات</h3></button>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-phone-vibrate-fill h1 electronics-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
</div>
@endsection