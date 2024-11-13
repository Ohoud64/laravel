@extends('layouts.appdash')
@section('content')



<div class="container">
      <div class="row">
        <div class="col">
        <h1 class="alert" style="background-color: #ABC4AA; color: white;">تفاصيل المنتجات</h1>

            <div class="card">
                <div class="card-body" style="background-color: #F5F5F5; color: black;">
                    <form action="{{route('ccckkmm')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                            <label for="id_sel" class="form-label">رقم المنتج</label>
                            <select class="form-select" id="id_sel" name="id_sel" style="background-color: #A9907E; color: white;">
                                @foreach($podg as $hoo)
                                <option value="{{$hoo->id}}">{{$hoo->name}}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="fg1" class="form-label">سعر المنتج</label>
                                <input type="text" class="form-control" id="fg1" name="fg1" style="background-color: #A9907E; color: white;">
                            </div>
                            <div class="col">
                            <label for="fg2" class="form-label">الكمية</label>
                            <input type="text" class="form-control" id="fg2" name="fg2" style="background-color: #A9907E; color: white;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <label for="fg4" class="form-label">لون المنتج</label>
                                <input type="text" class="form-control" id="fg4" name="fg4" style="background-color: #A9907E; color: white;">
                            </div>
                            <div class="col">
                            <label for="fg3" class="form-label"> صورة المنتج</label>
                            <input type="text" class="form-control" id="fg3" name="fg3" style="background-color: #A9907E; color: white;">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-center">
                            <button class="btn " style="background-color: #ABC4AA; color: white;">حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>


      <div class="row mt-5">
    <div class="col">
        <div class="card">
            <div class="card-body " style="background-color: #F5F5F5; color: white;">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>رقم المنتج</th>
                            <th>اسم المنتج</th>
                            <th>سعر المنتج</th>
                            <th>الكمية </th>
                            <th>صورة المنتج</th>
                            <th>لون المنتج</th>
                            <th colspan="2">اجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($podmkk as $ivvv)
                        <tr>
                            <td>
                            {{$ivvv->id}}
                            </td>
                            <td>
                            {{$ivvv->name}}
                            </td>
                            <td>
                            {{$ivvv->price}}
                            </td>
                            <td>
                            {{$ivvv->qty}}
                            </td>
                            <td>
                            {{$ivvv->img}}
                            </td>
                            <td>
                            {{$ivvv->color}}
                            </td>
                            <td>
                           <a href="#" onclick="lunch({{$ivvv->id}})"><i class="bi bi-trash3 text-danger"></i></a>
                            </td>
                            <td>
                            <a href="{{route('kmlr',['ed'=>$ivvv->id])}}"> <i class="bi bi-pencil-square text-success"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>


  
</div>
@endsection

