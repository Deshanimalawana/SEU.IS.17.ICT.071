<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class Logincontroller extends Controller
{
    

    public function getdetail(Request $req){

        $detail = new Register;

        $detail->name = $req->name;
        $detail->username = $req->username;
        $detail->date = $req->date;
        $detail->email = $req->email;
        $detail->phonenumber = $req->phonenumber;
        $detail->nic = $req->nic;
        $detail->gender = $req->gender;
        $detail->password = $req->password;
        $detail->npassword = $req->npassword;

        $detail->save();

        return redirect('login');
    }


    public function fetchdetail(){

        $detail = Register::all();

        return view('fetch',['data'=>$detail]);
    }
    public function edit($id){

        $detail = Register::find($id);
        return view('update',['detail'=>$detail]);
    }

    public function update(Request $req){

        $detail = Register::find($req->id);
        $detail->name = $req->name;
        $detail->username = $req->username;
        $detail->date = $req->date;
        $detail->email = $req->email;
        $detail->phonenumber = $req->phonenumber;
        $detail->nic = $req->nic;
        $detail->gender = $req->gender;
        $detail->password = $req->password;
        $detail->npassword = $req->npassword;
        $detail->save();

        return redirect('fetch');

    }

    public function delete($id){

        $detail = Register::find($id);
        $detail->delete();

        return redirect('fetch');
    }

}
