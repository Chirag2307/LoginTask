<?php
namespace App\Lib;

use App\Models\User;
use App\Models\Items;
class Login{

    
    public function home(){
        return view('/login');
    }
    
    public function checkLogin($data){
        $user = User::where('email',$data['email'])->first();
        if($user && $user->password === $data['password']){
            if($user->role=='admin'){
                return redirect('additems');
            }
            elseif($user->role=='user'){
                return redirect('itemspage');
            }
            else{
              return redirect('login');
            }  
    }
    }
    public function showItemsPage(){
        $items = Items::all();
        return $items;  
    }
    public function showAddItems(){
    return view('addItems');
    }
    public function insertItems($request){
          $item = $request->input('name');
          Items::create(['name'=>$item]);
          return redirect('itemspage');
    }
}

?>
