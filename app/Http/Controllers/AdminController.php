<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\Article;
use App\Models\cart;
use App\Models\chitietkhuyenmai;
use App\Models\chuongtrinhkhuyenmai;
use App\Models\contactus;
use App\Models\customer;
use App\Models\Gallery;
use App\Models\menu;
use App\Models\MenuCat;
use App\Models\product;
use App\Models\Promotion;
use App\Models\rating;
use App\Models\sanpham;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PhpParser\Node\Expr\FuncCall;
use Termwind\Components\Raw;

class AdminController extends Controller{


    public function index(){

        return View('admin/index/index');
    }


    public function show_dashboard(){
        return view('/admin/dashboard');
    }



    //account
    public function add_account(){
        return view('/admin/accounts/add_account');
    }
    public function list_account(){

        $data = [
            'Users' => User::get(),
        ];

        return view('/admin/accounts/list_account')->with($data);
    }
    public function delete_account($id){

        User::where('id',$id)->delete();

        return redirect('/admin/list-account');


    }
    public function view_account(){
        return view('/admin/accounts/view_account');
    }
    public function detail_account(){
        return view('/admin/accounts/update_account');
    }
    public function update_account($id){
        $data = [
            'User' =>User::where('id','=',$id)->first()
        ];
        return view('admin/accounts/edit_account')->with($data);
    }
      public function save_update_account(Request $request, $id){



        $user = user::find($id);

        $user ->name = $request->input('name') ;
        $user ->email = $request->input('email') ;

        $user ->phone = $request->input('phone') ;
        $user ->status = $request->input('status') ;
        $user ->role = $request->input('role') ;

        $user->update();

        return redirect('/admin/list-account');
    }
    // public function group_account(){
    //     return view('/admin/accounts/group_account');
    // }

    //san pham

    public function list_service(){
        $data = [
            'menus' => menu::get()
        ];

        return view('/admin/services/list_service')->with($data);
    }

    public function add_service(Request $request){

        // if($request->has('photo')){
        //     $file = $request->file('photo');
        //     $request->photo->move(public_path('upload'),$file->getClientOriginalName());
        // }

        menu::create([
            'name' => $request->name,
            // 'photo' => asset('upload/'.$request->file('photo')->getClientOriginalName()),
            'url'=>$request->input('url')

        ]);

        return redirect('/admin/list-service');
    }

    public function edit_service($id){

        $data = [
            'menu' => menu::find($id)
        ];

        return view('/admin/services/edit_services')->with($data);
    }

    public function delete_service($id){

        menu::where('id',$id)->delete();

        return redirect('/admin/list-service');
    }

    public function save_edit_service(Request $request){

        $service = menu::find($request->input('id'));

        if($request->has('photo')){
            $file = $request->file('photo');
            $request->photo->move(public_path('upload'),$file->getClientOriginalName());
            $service ->photo = asset('upload/'.$request->file('photo')->getClientOriginalName()) ;
        }

        $service ->name = $request->input('name') ;
        $service ->url = $request->input('url') ;
        $service->update();
        return redirect('/admin/list-service');
    }

    public function view_service(){
        return view('/admin/services/view_service');
    }


    // menu_cat

    public function list_menu_cat($id)
    {
        $data = [
            'menu' => menu::find($id),
            'cats' => MenuCat::where('id_menu',$id)->get(),
            'menuname' => menu::where('id',$id)->value('name')
        ];

        return view('/admin/services/categories/list_menu_cat')->with($data);
    }

    public function add_menu_cat(Request $request)
    {

        $data =[
            'name' => $request->name,
            'id_menu' => $request->id_menu,
            'url' => 'http://localhost:8000/'.$request->url
        ];

        MenuCat::create($data);
        return redirect('/admin/list-service');
    }

    public function delete_menu_cat($id)
    {

        MenuCat::where('id', $id)->delete();

        return redirect('/admin/list-menu-cat/'.$id);
    }




    // product

    public function list_product(){
        $data =[
          'products' => product::get(),
          'menus' =>menu::get()
        ];

        return view('/admin/product/list_product')->with($data);
    }
    public function edit_product($id){

        $data = [
            'product' =>product::where('product_id','=',$id)->first(),
            'menus' =>menu::get()
        ];

        return view('/admin/product/edit_product')->with($data);
    }
    public function update_product(Request $request, $id){

        $product = product::find($id);

        if($request->has('photo')){
            $file = $request->file('photo');
            $request->photo->move(public_path('upload'),$file->getClientOriginalName());
         $product ->photo = asset('upload/'.$request->file('photo')->getClientOriginalName()) ;


        }

        $product ->name = $request->input('name') ;
        $product ->description = $request->input('description') ;
        $product ->detail = $request->input('detail') ;
        $product ->price = $request->input('price') ;
        $product ->quantity = $request->input('quantity') ;
        $product ->status = $request->input('status') ;
        $product ->menu = $request->input('menu') ;

        $product->update();

        return redirect('/admin/list-product');
    }

    public function add_product(Request $request){
        $data = [
            'menus' =>menu::get()
        ];

        if($request->has('photo')){
            $file = $request->file('photo');
            $request->photo->move(public_path('upload'),$file->getClientOriginalName());

        }
        product::create([
            'name' => $request->name,
            'description' => $request->description,
            'detail' => $request->detail,
            'photo' => asset('upload/'.$request->file('photo')->getClientOriginalName()),
            'quantity' => $request->has('quantity') ?  $request->quantity : null,
            'price' => $request->has('price') ? $request->price : null   ,
            'menu' => $request->menu,
        ]);

        return redirect('/admin/list-product')->with($data);
    }


    public function detail_product($id){

        $data =[
            'product' => product::find($id)
        ];

        return view('admin/product/detail_product')->with($data);
    }
    public function delete_product($id){

        product::where('product_id',$id)->delete();

        return redirect('/admin/list-product');
    }




    public function list_article()
    {
        $data = [
            'articles' => Article::get()
        ];
        return view('/admin/articles/list_article')->with($data);
    }

    public function add_article_view()
    {



        return view('admin/articles/add_article');
    }
    public function add_article(Request $request)
    {

        if ($request->has('photos')) {
            $files = $request->file('photos');

            $photoPaths = [];

            foreach ($files as $f) {
                $photoPath = $f->storeAs('upload/article',$f->getClientOriginalName());
                $photoPaths[] = asset($photoPath);
                $photoString = implode(',', $photoPaths);
                $f->move(public_path('upload/article'),$f->getClientOriginalName());
            }

        }

        Article::create([
            'group_name' => $request->group_name,
            'topic' => $request->topic,
            'photo' =>  isset($photoString) ? $photoString : '',
            'description' => $request->description,
            'status' => $request->status,
            'created_by' => Auth::user()->name,
            // 'created_at'=>date('Y-m-d',strtotime( $request->created_at)),
            // 'updated_at'=>$request->updated_at
        ]);
        return redirect('/admin/list-article')->with('msg', 'Created');
    }


    public function detail_article($id)
    {
        $data = [
            'article' => Article::find($id)
        ];
        return view('admin/articles/detail_article')->with($data);
    }

    public function update_article_view($id)
    {
        $data = [
            'article' => Article::find($id)
        ];
        return view('admin/articles/update_article')->with($data);
    }

    public function update_article(Request $request, $id)
    {
        $article = Article::find($id);
        $article->update([
            'group_name' => $request->group_name,
            'topic' => $request->topic,
            // 'photo',
            'description'=> $request->description,
            'status'=> $request->status,
            // 'created_by',
            // 'created_at',
            // 'updated_at'=>now(),
        ]);
        return redirect('/admin/list-article')->with('msg','Updated');
    }

    public function delete_article($id)
    {

        Article::where('id', $id)->delete();
        return redirect('admin/list-article')->with('msg', 'Deleted');
    }

    //promotion
    public function list_promotion()
    {
        $data = [
            'promotions' => Promotion::get()
        ];
        return view('admin/promotions/list_promotion')->with($data);
    }

    public function detail_promotion($id)
    {
        $data = [
            'promotion' => Promotion::find($id)
        ];
        return view('admin/promotions/detail_promotion')->with($data);
    }

    public function add_promotion(Request $request)
    {

        Promotion::create([
            'name' => $request->name,
            'menu' => $request->menu,
            'start_date' => date('Y-m-d', strtotime($request->start_date)),
            'end_date' => date('Y-m-d', strtotime($request->end_date)),
            'created_by' => Auth::user()->name,
            'status' => $request->status,
            'sale_off' => $request->sale_off,
            'description' => $request->description
        ]);
        return redirect('admin/list-promotion')->with('msg', 'Created');
    }


    public function delete_promotion($id)
    {
        Promotion::where('id', $id)->delete();
        return redirect('admin/list-promotion')->with('msg', 'Deleted');
    }

    public function update_promotion_view($id)
    {
        $data = [
            'promotion' => Promotion::find($id)
        ];
        return view('admin/promotions/update_promotion')->with($data);
    }
    public function update_promotion(Request $request, $id)
    {
        $promotion = Promotion::find($id);
        $promotion->update([
            'name' => $request->name,
            'menu' => $request->menu,
            'start_date' => date('Y-m-d', strtotime($request->start_date)),
            'end_date' => date('Y-m-d', strtotime($request->end_date)),
            // 'created_by'=>$request->created_by,
            'status' => $request->status,
            'sale_off' => $request->sale_off,
            'description' => $request->description
        ]);
        return redirect('/admin/list-promotion')->with('msg','Updated');
    }



    //order
    public function list_order(){


        $data = [
            'orders' => DB::table('customer')
            ->select('carts.customer_id','customer.id','customer.email','customer.created_at','customer.updated_at',DB::raw('SUM(carts.price) AS price'),'customer.payment')
            ->join('carts','customer.id','=','carts.customer_id')
            ->join('product','product.product_id','=','carts.product_id')
            ->groupBy('carts.customer_id','customer.id','customer.email','customer.created_at','customer.updated_at','customer.payment')
            ->get()

        ];


        return view('/admin/orders/list_order')->with($data);
    }
    public function view_order(){
        return view('/admin/orders/view_order');
    }

    public function update_order(){
        return redirect('/detail-order');
    }
    public function detail_order($id){

        $data = [
            'customer' =>customer::find($id),
            'carts' =>cart::join('product','product.product_id','=','carts.product_id')
            ->where('carts.customer_id',$id)

            ->get()

        ];



        return view('admin/orders/detail_order')->with($data);


    }
    public function delete_order($id){

        cart::where('product_id',$id)->delete();
        return redirect()->back();
    }

    //gallery

    public function list_gallery(){
        $existingGalleries = Gallery::count();
        if ($existingGalleries == 0) {
            $product_zones = product::where('menu',2)->get();
            foreach($product_zones as $key =>$value) {
                Gallery::create([
                    'name'=>$value->name,
                    'photo'=>$value->photo,
                    'menu_id'=>$value->menu,
                    'status'=>$value->status,
                ]);
            }
        }
        $data =[
            'galleries' =>Gallery::get(),
            'menus' =>menu::get(),
        ];

        return view('/admin/gallery/list_gallery')->with($data);
    }


    public function add_gallery(Request $request){
        $data =[
            'menus' => menu::get()
        ];

        if($request->has('photo')) {
            $file = $request->file('photo');
            $request->photo->move(public_path('upload/gallery/'),$file->getClientOriginalName());
        }

        Gallery::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' =>$request->status,
            'photo'=> asset('upload/gallery/'.$request->file('photo')->getClientOriginalName()),
            'menu_id'=> $request->menu,
        ]);

        return redirect('/admin/list-gallery')->with($data);
    }

    public function delete_gallery($id){
        Gallery::where('gallery_id',$id)->delete();

        return redirect('/admin/list-gallery');
    }
    public function view_gallery(){
        return view('/admin/gallery/view_gallery');
    }
    public function detail_gallery(){
        return view('/admin/gallery/update_gallery');
    }
    public function update_gallery(){
        return redirect('/detail-gallery');
    }

    //banner
    public function list_banner(){

        $data = [
            'banners' =>banner::get()
        ];

        return view('/admin/banner/list_banner')->with($data);
    }
    public function add_banner(Request $request){
        if($request->has('photo')){
            $file = $request->file('photo');
            $request->photo->move(public_path('upload'),$file->getClientOriginalName());
        }
        banner::create([
            'name' => $request->name,
            'photo' => asset('upload/'.$request->file('photo')->getClientOriginalName()),
        ]);

        return redirect('/admin/list-banner');
    }


    public function update_banner($id){

        $data = [

            'banner' =>banner::find($id)
        ];

        return view('/admin/banner/edit_banner')->with($data);

    }

    public function save_update_banner(Request $request,$id){

        $banner = banner::find($id);

        if($request->has('photo')){
            $file = $request->file('photo');
            $request->photo->move(public_path('upload'),$file->getClientOriginalName());
         $banner ->photo = asset('upload/'.$request->file('photo')->getClientOriginalName()) ;


        }
        $banner ->name = $request->input('name') ;

        $banner->update();

        return redirect('/admin/list-banner');
    }

    public function delete_banner ($id){
        banner::where('id',$id)->delete();

        return redirect('/admin/list-banner');
    }

    // email
    public function inbox(){
        return view('/admin/email/inbox');
    }
    public function composer(){
        return view('/admin/email/composer');
    }

    public function list_review(){


        $data = [
            'reviews' =>rating::join('product','rating.product_id','=','product.product_id')->get()
        ];

        return view('/admin/review/list_review')->with($data);

    }


    public function delete_review($id){

        rating::where('id',$id)->delete();

        return redirect()->back();

    }


    public function list_contactus() {

        $data =[
            'contacts' => contactus::get(),

        ];


        return view('/admin/contactus/list_contactus')->with($data);

    }

    public function contact_delete($id){

        contactus::where('id',$id)->delete();

        return redirect()->back();


    }



}

?>
