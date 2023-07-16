<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\Login;
class UserController extends Controller
{  public function index(){
    $page = new Login;
    return $page->home();

}
public function show(Request $request){
    $email = $request->input('email'); $password = $request->input('password');
    $data = ['email'=>$email,"password"=>$password];
    $check = new Login;
    return $check->checkLogin($data);
}

public function itemsPage(){
 $items = new Login;
 return $items->showItemsPage();
}
public function additems(){
$addItems = new Login;
return $addItems->showAddItems() ;
}
    //

    public function itemsAdded(Request $request){
        $addedItems = new Login;
        return $addedItems->insertItems($request);
    }
}
