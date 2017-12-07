<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
class IndexController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($page='')
    {
        
        //当前页
        $type = 3;
        //每页条数
        $perPage = request('perPage') ? request('perPage') : 6;

        $res=DB::table('a')->simplepaginate($perPage);

        return view('index',['res'=>$res,'type'=>$type]);
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function insert(Request $requset)
    {

        $content=$requset->all();

        $res=DB::table('a')->insert([
            ['name' =>$content['name'],'pwd' => $content['pwd'] ],
        ]);

        if($res){
            return redirect('/');
        }

    }
    public  function  del($id){
        $res=Db::table('a')->where(['id'=>$id])->delete();
        if($res){
            return redirect('/');
        }
    }
    public function update($id=''){

        $res=Db::table('a')->find($id);
        return view('update',['res'=>$res]);
    }
    public function  updatedes(Request $request){
        $res=$request->all();
        $id=$res['id'];
        unset($res['id']);
        unset($res['_token']);
        unset($res['提交']);

        $return=Db::table('a')->where(['id'=>$id])->update($res);
        if($return){
            return redirect('/');
        }

    }

}
