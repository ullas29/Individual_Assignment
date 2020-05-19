<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\User;
use Carbon\Carbon;

class adminController extends Controller
{
    public function profile(Request $req)
    {
       $ur = DB::table('user')
                    ->where('uid',$req->session()->get('uid'))
                    ->first();
      return view('admin/profile',['user'=>$ur]);
    } 





    // BUS SCHEDULE LIST

    public function busesshedule(Request $req)
    {
      $busesshedule = DB::table('busesshedule')
                    ->get();
      return view('admin/busesshedule',['busesshedule'=>$busesshedule]);

    }
// busesshedule    bussummary


    public function bussummary(Request $req)
    {
      $bussummary = DB::table('bussummary')
                    ->join('busesshedule', 'bussummary.bsid', '=', 'busesshedule.bsid')
                    ->select('bussummary.*', 'busesshedule.name', 'busesshedule.route','busesshedule.operator','busesshedule.fare')
                    
                       ->get();
      return view('admin/bussummary',['bussummary'=>$bussummary]);
    }

   
    
    public function edit_profile(Request $req,$id)
    {
      $user = DB::table('user')
                    ->where('uid',$id)
                    ->first();
      return view('admin/edit_profile',['user'=>$user]);
    }

    public function update_profile(Request $req,$id)
    {
      $validation = Validator::make($req->all(), [
        'uname'=>'required',
        'email'=>'bail|required|email|exists:user,email',
        'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        'password_confirmation' => 'min:6',
        'gender' => 'required',
        'phone' => 'required',
        'address' => 'required',
        
    ]);

    if($validation->fails()){
        return back()
                ->with('errors', $validation->errors())
                ->withInput();

        return redirect()->route('admin.editprofile')
                        ->with('errors', $validation->errors())
                        ->withInput();
        }

        else {
            DB::table('user')
            ->where('uid',$id)
            ->update(
              [
                'uname' => $req->uname,
                'email' => $req->email,
                'password' => $req->password,
                'gender' => $req->gender,
                'phone' => $req->phone,
                'address' => $req->address
                ]
            );
            return redirect()->route('admin.profile');
        }
    }




// EDIT BUS SCHEDULE

    public function edit_busesshedule(Request $req,$id)
    {
      $busesshedule = DB::table('busesshedule')
                    ->where('bsid',$id)
                    ->first();
      return view('admin/edit_busesshedule',['busesshedule'=>$busesshedule]);
    } 


// EDIT BUS SCHEDULE
    public function update_busesshedule(Request $req,$id)
    {
      $validation = Validator::make($req->all(), [
        'name'=>'required',
        'route'=>'required',
        'fare'=>'required',
        'departure'=>'required',
        'arrival'=>'required'
    ]);

    if($validation->fails()){
        return back()
                ->with('errors', $validation->errors())
                ->withInput();

        return redirect()->route('admin.editbusesshedule')
                        ->with('errors', $validation->errors())
                        ->withInput();
        }

        else {
            DB::table('busesshedule')
            ->where('bsid',$id)
            ->update(
              [
                'name' => $req->name,
                'operator' => $req->operator,
                'seat_row' => $req->seat_row,
                'seat_column' => $req->seat_column,
                'route' => $req->route,
                'fare' => $req->fare,
                'departure' => $req->departure,
                'arrival' => $req->arrival
                

                ]
            );
            return redirect()->route('admin.busesshedule');
        }
    }





// ADD BUS SCHEDULE
    public function new_busesshedule(Request $req)
    {
      return view('admin/new_busesshedule');
    }

    public function insert_busesshedule(Request $req)
    {
      $validation = Validator::make($req->all(), [
        'name'=>'required',
        'route'=>'required',
        'fare'=>'required',
        'departure'=>'required',
        'arrival'=>'required'

    ]);

    if($validation->fails()){
        return back()
                ->with('errors', $validation->errors())
                ->withInput();

        return redirect()->route('admin.newbusesshedule')
                        ->with('errors', $validation->errors())
                        ->withInput();
        }

        else {
            DB::table('busesshedule')
            ->insert(
              [
                'name' => $req->name,
                'operator' => $req->operator,
                'seat_row' => $req->seat_row,
                'seat_column' => $req->seat_column,                
                'route' => $req->route,
                'fare' => $req->fare,
                'departure' => $req->departure,
                'arrival' => $req->arrival
                

                ]
            );
            return redirect()->route('admin.busesshedule');
        }
    }





// DELETE BUS SCHEDULE
    public function delete_busesshedule(Request $req,$id)
    {
      DB::table('busesshedule')
              ->where('bsid', $id)
              ->delete();
      return redirect()->route('admin.busesshedule');
    }




//bussummary

     public function edit_bussummary(Request $req,$id)
    {
      $bussummary = DB::table('bussummary')
                    ->where('suid',$id)
                    ->first();
      $bussummary = DB::table('bussummary')
                    ->get();
      return view('admin/edit_bussummary',['bussummary'=>$bussummary,'bussummary'=>$bussummary]);
    } 

   

  

}