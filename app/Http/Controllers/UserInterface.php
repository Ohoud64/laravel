<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class UserInterface extends Controller
{
    public function indexu(){
         return view('userinterface.landingpage');
     }

     public function electr(){
        $km=products::all();
        return view('userinterface.elect',['mk'=>$km]);
    }

    public function player(){
        $kg=products::all();

        return view('userinterface.play',['gk'=>$kg]);
    }
    public function homeapp(){
        $kh=products::all();

        return view('userinterface.homeappliation',['hk'=>$kh]);
    }
    public function pduse($id){
        
        $odmhh=DB::table('products')
        ->join('products__details','products.id','=','products__details.products_id')
        ->where('products.id','=',$id)
        ->first();
        return view('userinterface.pduser',['om'=>$odmhh]);
    }
    public function addtocart(){
        $count=session::get('counter');
        $count++;
        session::put('counter',$count);
        return view('userinterface.landingpage');

    }

    public function Continuebuying(){
        
        return view('userinterface.landingpage');

    }

    /*public function showpdui()
    {
        $products = DB::table('products')
            ->join('products_details', 'products.id', '=', 'products_details.id_products')
            ->select('products.*', 'products_details.price', 'products_details.qty', 'products_details.color', 'products_details.image')
            ->whereBetween('products_details.price', [50, 8000])
            ->get();
    
        return view('userinterface.landingpage', ['products' => $products]);
    }*/
    /*public function updateCate($id, $category)
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
    // دالة لعرض المنتجات بناءً على الفئة
    public function showByCategory($category)
    {
        // جلب المنتجات التي تتبع الفئة المحددة
        $products = Products::where('category', $category)->get();

        // تمرير المنتجات إلى العرض المناسب
        return view('userinterface.categor', compact('products', 'category'));
    }

    
}
