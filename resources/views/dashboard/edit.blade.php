@extends('layouts.appdash')
@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-6">
        <form action="{{route('mnnmo')}}" action="get">
        <div class="card mt-5 ">
            <div class="card-body bg-secondaray ">
            <div class="row">
            <div class="col">
             <input type="hidden" name="id" value="{{$products->id}}">
                <label for="t1">اسم المنتج</label>
               <input type="text" id="t1" name="t1"  value="{{$products->name}}" class="form-control">
            </div>
            <div class="col">
            <label for="t2">وصف المنتج</label>
              <input type="text" id="t2" name="t2" value="{{$products->description}}" class="form-control">
            </div>
            <div class="col">
            <label for="t3">فئة المنتج</label>
              <input type="text" id="t3" name="t3" value="{{$products->category}}" class="form-control">
            </div>
        </div>

        <div class="row mt-2">
            <div class="col text-center">
                <button class="btn btn-primary">حفظ</button>
            </div>
        </div>
            </div>
        </div>
    
     </form>

        </div>
    </div>

   
</div>
   
@endsection