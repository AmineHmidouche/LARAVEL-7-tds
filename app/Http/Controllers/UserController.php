<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;


class UserController extends Controller
{

  public function UserAvatar(){
    if(request()->hasFile('image')){
user::uploadAvatar(request()->image);

    return redirect()->back()->with('message','image uploaded');
  
  }  
 
  return redirect()->back()->with('error','image note uploaded');
}

    public function HomeUser(){
        /*
        DB::insert('insert into users (name,email,password) 
        values(?,?,?)',['aminee','ameeeeeine@gmail.com','passeeeeeeword',
        ]);
        */

        // DB::update('update users set name = ? where id = 5',["Heeeeeeeeebb"]);
        /* 

        DB::delete('delete from users where id = 5');
        $User =  DB::select('select * from users ');
        return $User; */
        
        /*
        $user = new User();
        $user->name="assssssssmine";
        $user->email="amines@gmail.com";
        $user->password=bcrypt("wordpressss");
        $user->save();
        */

          $dataa = [
            'name'    => 'Elon',
            'email'   => 'amine@hamouda.com',
            'password'=> 'password',
          ];  
            
        $user = User::all();
        return $user;
        
        // delete part 
        //User::where('id',12)->delete(); 
        //User::where('id',13)->update(['name'=>'HAmouuuuuuuuuuuuu']);

      
       // User::create($data);


        return view('home');
    }    
}
