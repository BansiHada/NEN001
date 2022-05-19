<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class MemberController extends Controller
{
    function show()
    {
        //return view('list');     
        //$data=member::all();
        $data=member::all();
        return view('list',['members'=>$data]);
    }
    function Adddata(Request $req)
    {
        $member=new Member;
        $member->title=$req->title;
        $member->small_desc=$req->small;
        $member->detail_desc=$req->detail;
        $member->galleryid=$req->gallery;
        $member->photo_url=$req->photo;
        $member->save();
        return redirect('list');
    }
    function editData($id)
    {
        $data=member::find($id);
        return view('edit',['data'=>$data]);
    }
    function Update(Request $req)
    {
        $data=member::find($req->id);
        
        $data->title=$req->title;
        $data->small_desc=$req->small;
        $data->detail_desc=$req->detail;
        $data->galleryid=$req->gallery;
        $data->photo_url=$req->photo;
        $data->save();
        return redirect('list');
       }
    function delete($id)
    {
        $data=member::find($id);
        $data->delete();
        return redirect('list');
        



    }


}
    
