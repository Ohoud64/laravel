@extends('layouts.appuserui')
@section('content')


<section class="h-100 h-custom" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card border-3" style="border-color: #675d50;">
          <div class="card-body p-5">

            <p class="lead fw-bold mb-5" style="color: #675D50;"> <i class="bi bi-cart2" style="font-size: 50px;"></i></p>
            

            <div class="row">
              <div class="col mb-3">
                <p class="small text-muted mb-1">Date</p>
                <p>10 April 2021</p>
              </div>
              <div class="col mb-3">
                <p class="small text-muted mb-1">Order No.</p>
                <p>012j1gvs356c</p>
              </div>
            </div>

            <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
              <div class="row">
                <div class="col-md-8 col-lg-9">
                  <p>{{$om->description}}</p>
                </div>
                <div class="col-md-4 col-lg-3">
                  <p>{{$om->price}}</p>
                </div>
              </div>
              
            </div>

            <div class="row my-4">
              <div class="col-md-4 offset-md-8 col-lg-3 offset-lg-9">
                <p class="lead fw-bold mb-0" style="color: #675D50;">£00.00</p>
              </div>
            </div>

            <p class="lead fw-bold mb-4 pb-2" style="color: #675D50;">Tracking Order</p>

            <div class="row">
              <div class="col-lg-12">

                <div class="horizontal-timeline">

                  <ul class="list-inline items d-flex justify-content-between">
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #B8621B;"><a href="{{route('hmklo')}}" class="btn text-white">اضف الى السلة</a>  </p
                        class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                    </li>
                    <li class="list-inline-item items-list">
                      <p class="py-1 px-2 rounded text-white" style="background-color: #B8621B;"><a href="{{route('loklo')}}" class="btn text-white"> مواصله الشراء </a> </p
                        class="py-1 px-2 rounded text-white" style="background-color: #f37a27;">
                    </li>
                    
                    <li class="list-inline-item items-list text-end" style="margin-right: 8px;">
                      <p style="margin-right: -8px;"></p>
                    </li>
                  </ul>

                </div>

              </div>
            </div>

            <p class="mt-4 pt-2 mb-0">Want any help? <a href="#!" style="color: #B8621B;">Please contact
                us</a></p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
