<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\Products_Details;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function index(Request $request){
       // dd($request->user()->password);
        return view('dashboard.index');
    }
    public function pro(){
        $pp=products::All();
        return view('dashboard.products',['pm'=>$pp]);
       // return view('dashboard.products');
    }
    public function creatnp(Request $request){
        //dd($request);
       $prod=Products::create([
        'name'=>$request->p1,
        'description'=>$request->p2,
        'category'=>$request->p3
       ]);
       $prod->save();
       return redirect()->route('jam');
    }
    public function deletem(){
        $igg=$_GET['id'];
        //dd($igg);
        $pppp=products::find($igg);
        $pppp->delete();
    }
    public function editedit($ed){
       // dd($ed);
       $products=products::find($ed);
        return view('dashboard.edit',['products'=>$products]);
    }
    public function updateupdate(Request $request){
        //dd($request);
        products::where('id',$request->id)
        ->update(['name'=>$request->t1,'description'=>$request->t2,'category'=>$request->t3]);
        return redirect()->route('jam');

    }
    public function showproduct_details(){
        $podm=products::All();
       // $podmhh=Products_Details::All(); ما نحتاجها 
       $podmhh=DB::table('products')
       ->join('products__details','products.id','=','products__details.products_id')// استعلام من جدولين لو حذفت ذا السطر بيعطيني كل السجلات
       ->get();//لو كتبت first رح يعطيني اول سجل فقط
       //dd($podmhh);
        return view('dashboard.product_details',['podg'=>$podm,'podmkk'=>$podmhh]);
    }
    public function create_new_details(Request $request){
        //dd($request);
        $pdetails=Products_Details::create([
            'products_id'=>$request->id_sel,
            'price'=>$request->fg1,
            'qty'=>$request->fg2,
            'img'=>$request->fg3,
            'color'=>$request->fg4
        ]);
        $pdetails->save();
        return redirect()->route('msmp');
    }
   
     /*
    public function updateCategory($id, $category)
    {
        // تحديث المنتج باستخدام Query Builder
        $updated = DB::table('products')
                     ->where('id', $id)  // تحديد المنتج حسب ID
                     ->update(['category' => $category]);  // تحديث الفئة

        if ($updated) {
            return redirect()->route('jam')->with('success', 'تم تحديث الفئة بنجاح!');
        }

        return redirect()->route('jam')->with('error', 'لم يتم تحديث الفئة!');
    }*/
}
