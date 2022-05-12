<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Foodchef;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function user(){
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    public function deletemenu($id){
        $data=food::find($id);

        $data->delete();

        return redirect()->back();

    }

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu(){
         $data=food::all();
        return view("admin.foodmenu", compact("data"));
    }

    public function uploadfoodchef(Request $request){
        
        $data = new foodchef;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('foodimage',$imagename);
                $data->image=$imagename;

                $data->title=$request->title;

                $data->price=$request->price;
                $data->description=$request->description;

                $data->save();

                return redirect()->back(); 
    }

    public function updateview( $id){

        $data = Food::find($id);
        return view("admin.updateview",compact("data"));

    }

    public function update(Request $request, $id){
        $data=food::find($id);

        $image = $request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('foodimage',$imagename);
                $data->image=$imagename;

                $data->title=$request->title;

                $data->price=$request->price;
                $data->description=$request->description;

                $data->save();

                return redirect()->back(); 

    }


public function reservation(Request $request){
        
        $data = new Reservation;

                $data->name=$request->name;
                $data->email=$request->email;
                $data->phone=$request->phone;
                $data->guest=$request->guest;
                $data->date=$request->date;
                $data->time=$request->time;
                $data->message=$request->message;

                $data->save();

                return redirect()->back(); 
    }

    public function viewreservation(){
        $data=reservation::all();

        return view("admin.adminreservation",compact("data"));
    }

    public function viewchef(){

        $data=foodchef::all();
        return view("admin.adminchef",compact("data"));
    }

    public function uploadchef(Request $request){

        $data=new foodchef;

        $image=$request->image;

        $imagename=time().'.'.$image->getClientOriginalExtension();
                $request->image->move('chefimage',$imagename);
                $data->image=$imagename;

                $data->name=$request->name;
                $data->speciality=$request->speciality;

                $data->save();

                return redirect()->back();


    }

    public function updatechef($id){

        $data=foodchef::find($id);

        return view("admin.updatechef",compact("data"));
    }

    public function updatefoodchef(Request $request, $id){

        $data = Foodchef::find($id);

        $image = $request->image;

        // dd($image);

        if ($image)
        {
            $imagename = time().'.'.$image->extension();

                $request->image->move('chefimage',$imagename);

                $data->image=$imagename;
        }
        

                $data->name=$request->name;
                $data->speciality=$request->speciality;

                $data->save();
                return redirect()->back();
    }

    public function deletechef($id){

        $data=Foodchef::find($id);

        $data->delete();
        return redirect()->back();

    }

    public function orders(){
        $data=order::all();

        return view('admin.orders',compact('data'));
    }


    public function search(Request $request){

        $search=$request->search;

        $data=order::where('name','Like','%'.$search.'%')->orWhere('foodname','Like','%'.$search.'%')->get();

        return view('admin.orders',compact('data'));

    }

}
