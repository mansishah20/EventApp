<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Category;
use App\Package;
use App\Place;
use App\Booking;
use App\Review;
use App\UserMaster;

class AdminController extends Controller
{
    
    function bookingindex()
    {
        $booking = DB::Table('booking')
        ->join('user_master','booking.user_id','=','user_master.id')
        ->join('package','booking.package_id','=','package.id')
        ->select('booking.id','booking.to_date','booking.from_date','booking.advance_pay','user_master.name as username','package.name as packagename')
        ->get();

        return view('admin.booking', compact('booking'));
    }
   
    public function categoryindex()
    {
        $cat= Category::all();  
		return view('admin.category', compact('cat'));
    }
   
    function categorystore(Request $request)
    {
        $cat = new Category();  
        $cat->name = $request->get('name');  
       
        $request->validate([

            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.$request->icon->extension();  
        $request->icon->move(public_path('caticon/'), $imageName);
        $cat->icon = $imageName;

        $cat->save();
		
		//return ("Category Record Saved");
        return redirect('/admin/categoryindex');
    }

    public function categoryedit($id)
    {
        $cat= category::find($id);  
		return view('admin.categoryedit', compact('cat'));
    }
    public function categoryupdate(Request $request, $id)
    {
        $cat =category::find($id);  
        $cat->name =  $request->get('name'); 
        $request->validate([

            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.$request->icon->extension();  
        $request->icon->move(public_path('caticon/'), $imageName);
        $cat->icon = $imageName;

        $cat->save();
		
		//return ("Category Record Saved");
        return redirect('/admin/categoryindex');
   
    }
    public function categorydestroy($id)
    {
        $cat =category::find($id); 
		$cat->delete();
       //return (" Category Record Deleted");
       return redirect('/admin/categoryindex');
    }

    function packageindex()
    {
        $pack = DB::Table('package')
        ->join('place','package.place_id','=','place.id')
        ->join('category','package.category_id','=','category.id')
        ->select('package.id','package.name','package.photo','package.details','package.price','place.name as placename','category.name as categoryname')
        ->get();

        return view('admin.package', compact('pack'));
    }
    function addpackage()
    {
        $category= Category::all();  
		$place= Place::all();  
		
        return view('admin.addpackage',compact("category","place"));

    }
    public function packagestore(Request $request)
    {
        $pack = new Package();  
        $pack->name =  $request->get('name');  
        $request->validate([

            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.$request->photo->extension();  
        $request->photo->move(public_path('package/'), $imageName);
        $pack->photo = $imageName;
        $pack->details = $request->get('details');  
        $pack->price = $request->get('price');  
        $pack->place_id = $request->get('place'); 
        $pack->category_id = $request->get('category'); 
        $pack->save();
       // return view('admin.package');
        return redirect('/admin/packageindex');
   
    }
    public function packageedit($id)
    {
        $pack= Package::find($id);  
        $category= Category::all();  
		$place= Place::all();  
		
		return view('admin.packageedit', compact("pack","category","place"));
    }
    public function packageupdate(Request $request, $id)
    {
        $pack =Package::find($id);  
        $pack->name = $request->get('name');  
        $request->validate([

            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $imageName = time().'.'.$request->photo->extension();  
        $request->photo->move(public_path('package/'), $imageName);
        $pack->photo = $imageName;
        $pack->details = $request->get('details');  
        $pack->price = $request->get('price');  
        $pack->place_id = $request->get('place'); 
        $pack->category_id = $request->get('category'); 
        $pack->save();
       // return view('admin.package');
        return redirect('/admin/packageindex');
    }
    public function packagedestroy($id)
    {
        $pack = Package::find($id); 
		$pack->delete();
        return redirect('/admin/packageindex');
   
    }
     
    
    public function placeindex()
    {
        $place= Place::all();  
		return view('admin.place', compact('place'));
    }

    function placestore(Request $request)
    {  
        
        $place = new Place(); 
        $place->name = $request->get('name'); 
        $place->save();
		
        return redirect('/admin/placeindex');

    }
    public function placeedit($id)
    {
        $place= Place::find($id);  
		return view('admin.placeedit', compact('place'));
    }
    public function placeupdate(Request $request, $id)
    {
        $place =Place::find($id);  
        $place->name = $request->get('name');  
        
        $place->save();
		
        return redirect('/admin/placeindex');
		//return ("Place Record Edited");
    }
    public function placedestroy($id)
    {
        $place = Place::find($id); 
		$place->delete();
        //return ("Place Record Deleted");
        return redirect('/admin/placeindex');
    }

    
    public function signup()
    {
        $usermaster = UserMaster::all();   
        return view('admin.signup');
    }

    
    public function userindex()
    {
            $usermaster= UserMaster::all();  
            return view("admin.userindex", compact('usermaster'));
    }

    public function usercreate()
    {
        $usermaster = UserMaster::all();
        return view("admin.signup", compact('usermaster'));
		
    }
    public function userstore(Request $request)
    {
        $user = new UserMaster();  
        $user->name = $request->get('name');  
        $user->email= $request->get('email');
        $user->password= $request->get('password');
        $user->address= $request->get('address');
        $user->city= $request->get('city');
        $user->contact= $request->get('contact');
        $user->gender= $request->get('gender');
        $user->type= $request->get('type');   
        
		$request->validate([
            'name'             => 'required',                        
            'email'            => 'required|email',
            'password'         => 'required',
            'confirmpassword'  => 'required_with:password|same:password',
            'contact'          => 'required|min:10|numeric',
            'gender'           => 'required',
            'type'             => 'required',
        ]);
            
        $user->save();
        //return back()->with('success', "Record saved");
		//return ("New Account Created");
        return redirect('/admin/userindex');
   
    }
    public function check(Request $request)
    {
        $varemail = $request->post('email');
        $varpassword = $request->post('password');
        $user = DB::select("select * from user_master where email='$varemail' AND password='$varpassword'");
        if($user==NULL)
        {
           return redirect('/admin/login');

        }
        else{
           
            //return $user;

            if($user[0]->type=='admin')    
            {
                $request->session()->put('name',$user[0]->name);
                return redirect('/admin/categoryindex');
            }
            else
            {

            $request->session()->put('name',$user[0]->name);
            return redirect('/index');
            }

        }
       
    }
    public function logout(Request $request){
        $request->session()->forget('name');
        return redirect('/admin/login');

    }
    public function login(Request $request){
      
        return view('admin.login2');

    }
    
    public function useredit($id)
    {
        $user= usermaster::find($id);  
		return view('admin.useredit', compact('user'));

    }
    public function userupdate(Request $request, $id)
    {
        $user =usermaster::find($id);  
		$user->name = $request->get('name');  
        $user->email= $request->get('email');
        $user->password= $request->get('password');
        $user->address= $request->get('address');
        $user->city= $request->get('city');
        $user->contact= $request->get('contact');
        $user->gender= $request->get('gender');
        $user->type= $request->get('type');   
        
		$request->validate([
            'name'             => 'required',                        
            'email'            => 'required|email',
            'password'         => 'required',
            'confirmpassword'  => 'required_with:upassword|same:upassword',
            'contact'          => 'required|min:10|numeric',
            'gender'           => 'required',
            'type'             => 'required',
        ]);
            
        $user->save();
        return redirect('/admin/userindex');
   
    }

    public function userdestroy($id)
    {
        $user =usermaster::find($id); 
		$user->delete();
        return redirect('/admin/userindex');
       //return ("User Account Deleted");
    }

}
