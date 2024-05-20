<?php

namespace App\Http\Controllers;

use App\Models\UserEloquent;
use Illuminate\Http\Request;

class UserEloquentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = UserEloquent::all();
        // $users = UserEloquent::find([3,2], ['name' ,'email']); // find return array not json
        // $users = UserEloquent::count(); // find count of rows of data
        // $users = UserEloquent::min('age'); // find minimum of age
        // $users = UserEloquent::max('age'); // find maximum of age
        // $users = UserEloquent::sum('age'); // find sum of age
        // $users = UserEloquent::where('city', 'delhi')->get();
        // $users = UserEloquent::where('city', 'delhi')->where('age', '>', 20)->get();
        // we can write nested where condition like below
        // $users = UserEloquent::where(
        // [
        //     ['city', 'Delhi'],
        //     ['age', 20],
        // ]
        // )->get();
        // this query selects all users who are either located in 'Delhi' or are older than 20 years old
        // $users = UserEloquent::where('city', 'Delhi')
                                // ->orWhere('age', '>', 20)
                                // ->get();
        // $users = UserEloquent::where('city', 'Delhi')
        //                         ->orWhere('age', '>', 20)
        //                         ->count();
        
        // $users = UserEloquent::whereCity('Delhi')->get();            
        // $users = UserEloquent::whereCity('Delhi')->whereAge(40)->get();            
        // $users = UserEloquent::whereCity('Delhi')->whereAge(40)->select('name', 'email')->get();            
        
        // $users = UserEloquent::whereCity('mithi')->whereAge(21)->select('name', 'email as User Email')->get();            
        // $users = UserEloquent::whereCity('mithi')->whereAge(21)->select('name', 'email as User Email')->toSql();  //secure          
        // $users = UserEloquent::whereCity('mithi')->whereAge(21)->select('name', 'email as User Email')->toRawSql();  //unsecure          
        // $users = UserEloquent::whereCity('mithi')->whereAge(21)->select('name', 'email as User Email')->dd();  //unsecure          
        // $users = UserEloquent::whereCity('mithi')->whereAge(21)->select('name', 'email as User Email')->ddRawSql();  //unsecure          
        // $users = UserEloquent::whereCity('Delhi')->first(); //will bring the first record
        // $users = UserEloquent::whereNot('age', 20)->get();      
        // $users = UserEloquent::whereBetween('age', [20, 25])->get();      
        // $users = UserEloquent::whereNotBetween('age', [20, 25])->get();      
        // $users = UserEloquent::whereIn('age', [20, 25])->get();      //age is 20 ya 25
        // $users = UserEloquent::whereNotIn('city', ['mithi', 'diplo'])->get();      //bring those recors whose city is not mithi or diplo
        // return view('welcome',['data' => $users ]);
        return view('home', compact('users'));
        // return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('createuser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
       /*  
       First Method of inserting data
        $user = new UserEloquent;
        $user->name = $request->username;
        $user->email = $request->useremail;
        $user->age = $request->userage;
        $user->city = $request->usercity;

        $user->save(); */

        // 2nd Method of inserting data using mass assignment for that we will need help of fillable variable
        UserEloquent::create([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity,
        ]);

        return redirect()->route('users.index')
                           ->with('status', 'New User Added Successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
        $users = UserEloquent::find($id);
        // dd($users);
        // return $users;
        return view('viewuser', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = UserEloquent::find($id);
        return view('updateuser', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // First Method of updating data
       /*  $user = UserEloquent::find($id);
        $user->name = $request->username;
        $user->email = $request->useremail;
        $user->age = $request->userage;
        $user->city = $request->usercity; 
        $user->save();
        
        */


        // 2nd Method updating

        $user = UserEloquent::where('id', $id)->update([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity,
        ]);
        return redirect()->route('users.index')->with('status', 'User Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserEloquent $userEloquent)
    {
        //
    }
}
