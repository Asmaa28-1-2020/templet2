<?php

namespace App\Http\Controllers;
 use\Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\acount;

class con1 extends Controller
{
    //registration
 public function insert(){
    return view('registration') ;
 } 
 //login
  public function login(){
    return view('user.login') ;
 } 
 //home
 
 public function home(){
    return view('user.home') ;
 } 
 
 
 //check
  public function check(Request $Request){
      $email=$Request->email;
      $password=$Request->password;
      
      $row=DB ::table('acounts')
            -> where('email',$email)
               ->where('password', $password)
           //->orderBy('fname','desc')
           ->select()
           ->get();
      
      if(count($row)>0){
        return redirect('show') ;  
          
      }
      
      else{
         
      return redirect('insert') ; 
    
  }} 
 
 
 
 
 
 //show
  public function show(){
     $rows= DB ::table('acounts')
            
          
           ->select()
           ->get();
//      $rows=acount::all();
//      dd($rows);
    
  
    return view('show', compact('rows'));
}
   //addacount
public function addacount( Request $request){
  $acount=new acount();
  
   //validation
  $request->validate([
      'fname'=>'required',
      'lname'=>'required',
        'email' => 'required|unique:acounts|max:255',
        'password' => 'required',
    ],[
       'fname=>required'=>'please fname is required' ,
       'lname=>required'=>'please lname is required' , 
      'email.required'  =>'please write your email' ,
        'email.unique'  =>'please write unique email' ,
      'password.required'  =>'please write your password'   
    ]);
  
   $acount->fname=$request->fname; 
    $acount->lname=$request->lname;
    $acount->email=$request->email;
    $acount->password=$request->password;
    $acount->telephone=$request->telephone;
    $acount->gender=$request->gender;
    
     $acount->save();
      return redirect('show');
    
    
}
//delete
    public function delete(acount $id) {
     $id->delete();
     return redirect('show');
    }
//edit
  public function edit(acount $id){
    return view('admine.edit', compact('id')) ;
 } 
  public function update(Request $request ,acount $id) {
      $id->update($request->all());
      
      return redirect('show');
       
    }
     
 
}
