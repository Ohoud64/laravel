@extends('layouts.appdash')
@section('content')


<!-- حق الرساله التحذيريه Delete Modal الزر -->

<div class="modal" tabindex="-1" id="del2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">رساله تأكيد</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>هل بالفعل تريد حذف هذا السجل؟ !!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء الامر</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="confirm()">حذف</button>
      </div>
    </div>
  </div>
</div>
<!--حق صفحه المنتجات Modal الزر -->
<div class="modal" tabindex="-1" id="addproducts">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">اضافه منتج</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('map')}}" method="get">
          <div class="row">
            <div class="col">
                <label for="p1" class="form-label"> اسم المنتج</label>
                <input type="text" class="form-control p-2" name="p1" id="p1" style="background-color: #A9907E; color: white;">
            </div>
            <div class="col">
            <label for="p2" class="form-label"> وصف المنتج</label>
            <input type="text" class="form-control p-2" name="p2" id="p2" style="background-color: #A9907E; color: white;">
            </div>
            <div class="col">
            <label for="p3" class="form-label"> فئه المنتج</label>
            <input type="text" class="form-control p-2" name="p3" id="p3" style="background-color: #A9907E; color: white;">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col ">
            <button type="submit" class="btn " style="background-color: #ABC4AA; color: white;">حفظ</button>
            </div>
          </div>
        </form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col">
        <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#addproducts" style="background-color: #ABC4AA; color: white;">
          اضافة   
        </button>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col">
        <div class="card" >
            <div class="card-body " style="background-color: #F5F5F5; color: white;">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>رقم المنتج</th>
                            <th>اسم المنتج</th>
                            <th>وصف المنتج</th>
                            <th>فئة المنتج</th>
                            <th colspan="2">اجراء</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pm as $ib)
                        <tr>
                            <td>
                                {{$ib->id}}
                            </td>
                            <td>
                            {{$ib->name}}
                            </td>
                            <td>
                            {{$ib->description}}
                            </td>
                            <td>
                            {{$ib->category}}
                            </td>
                            <td>
                            <a href="#" onclick="lunch({{$ib->id}})"><i class="bi bi-trash3 text-danger"></i></a>
                            </td>
                            <td>
                            <a href="{{route('kmlr',['ed'=>$ib->id])}}"> <i class="bi bi-pencil-square text-success"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@endsection
