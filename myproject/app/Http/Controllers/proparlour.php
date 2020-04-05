<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class proparlour extends Controller
{

    public function mainpage(){
      return view('myproject.mainhome');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    public function inbox(){
      return view('myproject.inbox');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    public function outbox(){
      return view('myproject.outbox');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    public function login(){
      return view('myproject.login');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    public function useraccount(Request $request){
     $request->validate([
        'email'=>"required|email",
        'password'=>"regex:/^[A-Z]+[a-z]+[@0-9]+$/"
      ]);
      $name=$request->input(['email']);
      $pass=$request->input(['password']);
      if($name =='root@root.com' && $pass == 'Root@123'){ return view('myproject.admin',['name'=>$name]);}
      else{
      $user3=DB::table('userinfo')->where('email',$name)->where('password',$pass)->get();
       return view('myproject.account',['user'=>$user3,'name'=>$name]);
}
      }

    ///////////////////////////////////////////////////////////////////////////////////////////
    public function signup(){
      return view('myproject.signup');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    public function backtologin(Request $request){
      $request->validate([
        'first'=>"required",
        'last'=>"required",
         'email'=>"required|email",
         'address'=>"required",
         'password'=>"required|regex:/^[A-Z]+[a-z]+[@0-9]+$/",
         'confirm'=>"required|same:password",
         'age'=>"gte:18",
         'tel'=>"numeric|digits:10",
         'file'=>"required"
       ]);
       if (DB::table('userinfo')->where('email', '=', $request->input(['email']))->count() == 0){

         // //as i ahve changed my database name and table so always run command: php artisan migrate ...then only new database will work
            $userins=DB::table('userinfo')->insert(
              ['first'=>$request->input(['first']),
              'last'=>$request->input(['last']),
              'email'=>$request->input(['email']),
              'address'=>$request->input(['address']),
              'password'=>$request->input(['password']),
           'tel'=>$request->input(['tel']),
            'image'=>$request->input(['file']),
         ]);
      //  $request->file('file')->store('parlourpro');
         return view('myproject.login');
       }else{
         return "account with ".$request->input(['email'])." already exists";
       }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
    public function backtoaccount($user){
      $user3=DB::table('userinfo')->where('email',$user)->get();
       return view('myproject.account',['user'=>$user3,'name'=>$user]);
    }

    ///////////////////////////////////////////////////////////////////////////////////////////
public function edit($user){
  $user3=DB::table('userinfo')->where('email',$user)->get();
    return view('myproject.edit',['user'=>$user3,'name'=>$user]);
}

////////////////////////////////////////////////////////////////////////////////////////////////
public function details(Request $request,$user){
  $action=$warning="";
  if(empty($request->input(['first'])) && empty($request->input(['last'])) && empty($request->input(['email']))
  && empty($request->input(['address'])) && empty($request->input(['password'])) && empty($request->input(['age'])) &&
  empty($request->input(['tel']))){
      $user3=DB::table('userinfo')->where('email',$user)->get();
    return view('myproject.account',['user'=>$user3,'name'=>$user]);
  }
  else{
if($request->input(['first'])){
  $first=$request->input(['first']);
  $rnd1=DB::table('userinfo')->distinct()->where('email',$user)->get();
$action .= "first name ,";
 $rnd1=DB::table('userinfo')->where('email',$user)->update(['first'=>$first]);
}
if($request->input(['last'])){
    $last=$request->input(['last']);
      $rnd1=DB::table('userinfo')->distinct()->where('email',$user)->get();
$action .= "last name ,";
$rnd1=DB::table('userinfo')->where('email',$user)->update(['last'=>$last]);
}
if($request->input(['address'])){
    $address=$request->input(['address']);
      $rnd1=DB::table('userinfo')->distinct()->where('email',$user)->get();
      $rnd2=DB::table('appointment')->distinct()->where('email',$user)->get();
$action .= "address ,";
$rnd1=DB::table('userinfo')->where('email',$user)->update(['address'=>$address]);
$rnd2=DB::table('appointment')->where('email',$user)->update(['address'=>$address]);
}
if($request->input(['password'])){
  if(empty($request->input(['confirm']))){
    $warning="enter confirm password as well";
  }
}
if($request->input(['password']) && $request->input(['confirm'])){
  if($request->validate([
     'password'=>"regex:/^[A-Z]+[a-z]+[@0-9]+$/",
     'confirm'=>"required|same:password",
   ])){$action .= "password ,";
        $rnd1=DB::table('userinfo')->distinct()->where('email',$user)->get();
$pass=$request->input(['password']);
$rnd1=DB::table('userinfo')->where('email',$user)->update(['password'=>$pass]);
   }
}
if($request->input(['age'])){
  $age=$request->input(['age']);
$action .= "age ,";
$rnd1=DB::table('userinfo')->distinct()->where('email',$user)->get();
$rnd1=DB::table('userinfo')->where('email',$user)->update(['age'=>$age]);
}
if($request->input(['tel'])){
  $tel=$request->input(['tel']);
$action .= "tel ,";
$rnd1=DB::table('userinfo')->distinct()->where('email',$user)->get();
$rnd1=DB::table('userinfo')->where('email',$user)->update(['tel'=>$tel]);
}
$action .= "is updated.";
  $user3=DB::table('userinfo')->where('email',$user)->get();
return view('myproject.successinedit',['action'=>$action,'name'=>$user,'user'=>$user3,'warning'=>$warning]);

}
}
///////////////////////////////////////////////////////////////////////////////////////////
public function offers($user){
  $user3=DB::table('userinfo')->where('email',$user)->get();
   return view('myproject.offers',['name'=>$user,'user'=>$user3]);

}
///////////////////////////////////////////////////////////////////////////////////////////
public function inpay(Request $request,$user){
  //return "hi";
  $total="";
  $count=0;
if($request->input(['facial'])){
      $total .= $request->input(['facial']).",";
      $count += 80;
  }
  if($request->input(['spa'])){
        $total .= $request->input(['spa']).",";
            $count += 60;
    }
    if($request->input(['cleansing'])){
          $total .= $request->input(['cleansing']).",";
              $count += 80;
      }
      if($request->input(['style'])){
            $total .= $request->input(['style']).",";
                  $count += 60;
        }
        if($count == 0){
            $user3=DB::table('userinfo')->where('email',$user)->get();
          return view('myproject.inbooking',['name'=>$user,'user'=>$user3]);
        }
        else{
          $user3=DB::table('userinfo')->where('email',$user)->get();

  return view('myproject.inpay',['name'=>$user,'total'=>$total,'count'=>$count,'user'=>$user3]);}
}

////////////////////////////////////////////////////////////////////////////////////////
public function inbook($user){
  //return $user;
  $user3=DB::table('userinfo')->where('email',$user)->get();

return view('myproject.inbooking',['name'=>$user,'user'=>$user3]);
}

///////////////////////////////////////////////////////////////////////////////////////////
public function payment($user,$total,$count){
  //return "hi";
return view('myproject.payment',['name'=>$user,'total'=>$total,'count'=>$count]);
}
public function paymentoutorder($user,$total,$count){
  //return "hi";
return view('myproject.paymentoutorder',['name'=>$user,'total'=>$total,'count'=>$count]);
}
///////////////////////////////////////////////////////////////////////////////////////////
public function paymentout($user,$total,$count){
return view('myproject.paymentout',['user'=>$user,'total'=>$total,'count'=>$count]);
}
///////////////////////////////////////////////////////////////////////////////////////////
public function outbook($user){
  $user3=DB::table('userinfo')->where('email',$user)->get();

return view('myproject.outdoorbooking',['name'=>$user,'user'=>$user3]);
}

///////////////////////////////////////////////////////////////////////////////////////////
public function outpay(Request $request,$user){
  $total="";
  $count=0;
if($request->input(['facial'])){
      $total .= $request->input(['facial']).",";
      $count += 50;
  }
  if($request->input(['spa'])){
        $total .= $request->input(['spa']).",";
            $count += 90;
    }
    if($request->input(['style'])){
          $total .= $request->input(['style']).",";
              $count += 100;
      }
      if($request->input(['color'])){
            $total .= $request->input(['color']).",";
                  $count += 150;
        }
        if($count == 0){
          $user3=DB::table('userinfo')->where('email',$user)->get();
        return view('myproject.outdoorbooking',['name'=>$user,'user'=>$user3]);
        }
        else{
          $user3=DB::table('userinfo')->where('email',$user)->get();
 return view('myproject.outpay',['name'=>$user,'total'=>$total,'count'=>$count,'user'=>$user3]);
}
}


///////////////////////////////////////////////////////////////////////////////////////////
public function history($user){
    $user3=DB::table('userinfo')->where('email',$user)->get();
      $user4=DB::table('appointment')->where('email',$user)->get();
return view('myproject.history',['name'=>$user,'user'=>$user3,'user4'=>$user4]);
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function searchorder(Request $request,$user){
  $id=$request->input(['searchid']);
    $user3=DB::table('userinfo')->where('email',$user)->get();
      $user4=DB::table('appointment')->where('ordernum',$id)->get();
return view('myproject.history',['name'=>$user,'user'=>$user3,'user4'=>$user4]);
}


////////////////////////////////////////////////////////////////////////////////////////////
public function inorder(Request $request){
  $request->validate([
    'useraddress'=>"required",
    'zipcode'=>"required",
     'usertime'=>"required",
     'userdate'=>"required",
      'cardname'=>"required",
      'cardnumber'=>"regex:/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}+$/",
      'expmonth'=>"required|regex:/^[a-z]{3,10}+$/",
       'expyear'=>"required|regex:/^[0-9]{4}+$/",
        'cvv'=>"required|regex:/^[0-9]{3}+$/"
   ]);
   $num=rand(1000,9999);
    $name=$request->input(['email']);
      $facilities=$request->input(['facilities']);
        $amount=$request->input(['amount']);
        $userins=DB::table('appointment')->insert(
          ['email'=>$name,
          'address'=>$request->input(['useraddress']),
          'facilities'=>$request->input(['facilities']),
          'ordernum'=>$num,
          'amount'=>$request->input(['amount']),
          'entrytime'=>$request->input(['usertime']),
       'entrydate'=>$request->input(['userdate']),
        'category'=>"indoor",
        'action'=>"wait for the response",
        'cardholder'=>$request->input(['cardname']),
     ]);
      return view('myproject.finalordernum',['num'=>$num,'user'=>$name]);
}

////////////////////////////////////////////////////////////////////////////////////////////
public function outsideorder(Request $request){
  $request->validate([
    'useraddress'=>"required",
    'zipcode'=>"required",
     'usertime'=>"required",
     'userdate'=>"required",
      'cardname'=>"required",
      'cardnumber'=>"regex:/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}+$/",
      'expmonth'=>"required|regex:/^[a-z]{3,10}+$/",
       'expyear'=>"required|regex:/^[0-9]{4}+$/",
        'cvv'=>"required|regex:/^[0-9]{3}+$/"
   ]);
   $num=rand(1000,9999);
    $name=$request->input(['email']);
      $facilities=$request->input(['facilities']);
        $amount=$request->input(['amount']);
        $userins=DB::table('appointment')->insert(
          ['email'=>$name,
          'address'=>$request->input(['useraddress']),
          'facilities'=>$request->input(['facilities']),
          'ordernum'=>$num,
          'amount'=>$request->input(['amount']),
          'entrytime'=>$request->input(['usertime']),
       'entrydate'=>$request->input(['userdate']),
        'category'=>"outdoor",
        'action'=>"wait for the response",
        'cardholder'=>$request->input(['cardname']),
     ]);
      return view('myproject.finalordernum',['num'=>$num,'user'=>$name]);
}

////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////admin////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////

public function appointments($name){
  $count=0;
    $user3=DB::table('appointment')->distinct()->get();
    return view('myproject.appointments',['name'=>$name,'user'=>$user3,'count'=>$count]);
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function searchadminorder(Request $request,$name,$count){
  $id=$request->input(['searchid']);
  $user4=DB::table('appointment')->where('ordernum',$id)->get();
return view('myproject.appointments',['name'=>$name,'user'=>$user4,'count'=>$count]);
}
/////////////////////////////////////////////////////////////////////////////////////////////
public function pending($name){
  $count=0;
    $user3=DB::table('appointment')->where('action','wait for the response')->get();
    return view('myproject.pending',['name'=>$name,'user'=>$user3,'count'=>$count]);
}
///////////////////////////////////////////////////////////////////////////////////////////
public function pendingadminorder(Request $request,$name,$count){
  $id=$request->input(['pendingid']);
    $action=$request->input(['pendingaction']);
      $user3=DB::table('appointment')->where('action','wait for the response')->get();
  $user4=DB::table('appointment')->where('ordernum',$id)->get();
    $user5=DB::table('appointment')->where('ordernum',$id)->update(['action'=>$action]);

return view('myproject.pending',['name'=>$name,'user'=>$user3,'count'=>$count]);
}
//////////////////////////////////////////////////////////////////////////////////////////
public function cancelled($name){
  $count=0;
    $user3=DB::table('appointment')->where('action','cancelled')->get();
    return view('myproject.cancelled',['name'=>$name,'user'=>$user3,'count'=>$count]);
}
/////////////////////////////////////////////////////////////////////////////////////////
public function canceladminorder(Request $request,$name,$count){
  $id=$request->input(['cancelid']);
$user4=DB::table('appointment')->where('ordernum',$id)->get();
return view('myproject.cancelled',['name'=>$name,'user'=>$user4,'count'=>$count]);
}
/////////////////////////////////////////////////////////////////////////////////////////
public function confirmed($name){
  $count=0;
    $user3=DB::table('appointment')->where('action','confirmed')->get();
    return view('myproject.confirmed',['name'=>$name,'user'=>$user3,'count'=>$count]);
}
///////////////////////////////////////////////////////////////////////////////////////////
public function confirmedadminorder(Request $request,$name,$count){
  $id=$request->input(['confirmedid']);
$user4=DB::table('appointment')->where('ordernum',$id)->get();
return view('myproject.confirmed',['name'=>$name,'user'=>$user4,'count'=>$count]);
}
/////////////////////////////////////////////////////////////////////////////////////////////
public function users($name){
  $count=0;
    $user3=DB::table('userinfo')->distinct()->get();
    return view('myproject.users',['name'=>$name,'user'=>$user3,'count'=>$count]);
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function searchuser(Request $request,$name,$count){
  $id=$request->input(['userid']);
  $user4=DB::table('userinfo')->where('id',$id)->get();
return view('myproject.users',['name'=>$name,'user'=>$user4,'count'=>$count]);
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function artist($name){
  $count=0;
    $user3=DB::table('artist')->distinct()->get();
    return view('myproject.artist',['name'=>$name,'user'=>$user3,'count'=>$count]);
}
//////////////////////////////////////////////////////////////////////////////////////////////
public function searchartist(Request $request,$name,$count){
  $id=$request->input(['searchid']);
  $user4=DB::table('artist')->where('artistid',$id)->get();
return view('myproject.artist',['name'=>$name,'user'=>$user4,'count'=>$count]);
}
/////////////////////////////////////////////////////////////////////////////////////////////
public function addartist($name){

    return view('myproject.addartist',['name'=>$name]);
}
/////////////////////////////////////////////////////////////////////////////////////////////
public function addartistverify(Request $request,$name){
  $count=0;
  $request->validate([
    'artistname'=>"required",
     'artistaddress'=>"required",
     'artistnumber'=>"numeric|digits:10"

   ]);
   if (DB::table('artist')->where('artistnumber', '=', $request->input(['artistnumber']))->count() == 0){

            $userins=DB::table('artist')->insert(
          ['artistname'=>$request->input(['artistname']),
          'artistaddress'=>$request->input(['artistaddress']),
          'artistnumber'=>$request->input(['artistnumber']),
     ]);
       $user3=DB::table('artist')->distinct()->get();
     return view('myproject.artist',['name'=>$name,'count'=>$count,'user'=>$user3]);
   }else{
     return "account with number ".$request->input(['artistnumber'])." already exists";
   }
}
/////////////////////////////////////////////////////////////////////////////////////////
public function deleteartist($name){

    return view('myproject.deleteartist',['name'=>$name]);
}

////////////////////////////////////////////////////////////////////////////////////////
public function deleteartistverify(Request $request,$name){
  $count=0;
  $request->validate([
    'artistid'=>"required",
   ]);
   if (DB::table('artist')->where('artistid', '=', $request->input(['artistid']))->count() > 0){

            $userins=DB::table('artist')->where('artistid',$request->input(['artistid']))->get();
              $userins=DB::table('artist')->where('artistid',$request->input(['artistid']))->delete();
       $user3=DB::table('artist')->distinct()->get();
     return view('myproject.artist',['name'=>$name,'count'=>$count,'user'=>$user3]);
   }else{
     return "artist account with id ".$request->input(['artistid'])." does not exists";
   }
}
/////////////////////////////////////////////////////////////////////////////////////////
public function adminoffers($name){
return view('myproject.adminoffers',['name'=>$name]);
}

}
