<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSkillRequest;
use App\Http\Requests\FeedbackRequest;
use App\Mail\sendmail;
use App\Models\Feedback;
use App\Models\info;
use App\Models\skill;
use App\Models\load;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(){
        $skill=skill::all();
        $info=info::get()->first();
         $load=new load();
        $load->save();
        return response()->json(['skill'=>$skill,'info'=>$info]);
    }
    public function create(FeedbackRequest $request){
       $feedback=new Feedback();
       $feedback->fill($request->all());
       $feedback->save();
//        Mail::to($request->email)->queue(new sendmail());
       return response()->json(['message'=>'phản hồi thành công']);
    }
    public function  addSkill(AddSkillRequest $request){
        $skill= new skill();
        $skill->fill($request->all());
        if ($skill->save()){
            return response()->json(['message'=>'Thêm kĩ năng thành công'],200);
        }
        return response()->json(['message'=>'Thêm kĩ năng thất bại'],422);
    }
}
