<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

//use Illuminate\

class CustomerController extends Controller
{
    public function index()
    {

        return view('reg');
    }
    public function store(Request $request)
    {

        $request->validate(
            ['name'=>'required' ,
                'email'=>'required|email',
                'number'=>'required|integer',
                'password'=>'required',
                'image'=>'required'
            ]

        );
        $new_name= time().'tv.'.$request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('uploads',$new_name);
        $customers =new Customer;
        $customers->name=$request['name'];
        $customers->email=$request['email'];
        $customers->phone_number=$request['number'];
        $customers->gender=$request['gender'];
//        $customers->gender=$request['female'];
        $customers->password=md5($request['password']);
        $customers->image=$request['image'];
        $customers ->save();

        return redirect('/customer');

//    print_r($request->all());
    }
    public function view(Request $request )
    {
        $search=$request['search']??"";

//        print_r($customers->toArray());
        if ($search!=null) {
//            $queryString = Input::get('search');
            $customers = Customer::where('name', 'LIKE', "%$search%")->orderBy('id')->paginate(5);}
            else   {
                $customers=Customer::all();
                $customers = Customer::paginate(5);

    }
        $data = compact('customers');
        return view('/customer')->with($data);
    }
    public function delete($id){
        $customer = Customer:: find($id)->delete();
//        print_r($customer->toArray);
        return redirect()->back();


    }

    public function update($id){
        $customers= Customer::find($id);
//        $data=compact('customer');


        $data=compact('customers' );
        return view('update')->with($data);

    }

    public function update_action ($id,Request $request){
        $customers = Customer:: find($id);

        $customers->name=$request['name'];
        $customers->email=$request['email'];
        $customers->phone_number=$request['number'];
        $customers->gender=$request['gender'];
//        $customers->gender=$request['female'];
//        $customers->password=md5($request['password']);
        $customers ->save();

        return redirect('/customer');


    }

//    public function upload(Request $request){
//     $request->file('image')->store('uploads');
//    }
}

