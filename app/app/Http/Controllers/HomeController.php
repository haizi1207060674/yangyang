<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function set()
    {   
        // setcookie('name','haha',time() + 3600,'/');
         // \Cookie::queue('name','zhifeng', 10);
         // return response('<p>我是响应体</p>')->withCookie('class','lamp207',10);
         // $name = \Cookie::get('name');
         // dd($name);
    }

    //写入闪存
    public function false()
    {
        // \Session::flash('week','Monday');
        return redirect('/get-flash')->with('info','添加成功');
    }

    //读取sesiion
    public function getflash()
    {
        return view('haha/admin');
    }

    public function haha()
    {
        return view('haha/userss');
    }
    public function insert()
    {
        //表单验证   检测用户   密码
        if(empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20) {
            \Session::flash('error','用户名格式不正确');
            return back()->withInput();
        }
        
        
    }
    public function resposnse()
    {
            // echo 'i miss you ';
            // return '<span>啊要开项目了</span>';
            //返回json
            // return response()->json(['name'=>'xiaohigh','age'=>18]);

            //返回 魔板
            return  view ('haha/view');
            
            //下载
            return response()->download('./renxi.mp3');
    }

    public function shitua()
    {
        return view('haha/shitu',['title'=>'哈哈哈哈',
            'content'=>'还有20分钟战斗',
            'pages'=>'<a href="">1</a><a>2</a>'
            ]);
    }
    //创建页面
    public function page1()
    {
        return view ('haha/page1');
    }
     public function page2()
    {
        return view ('haha/page2');
    }

    //控制
    public function contre()
    {
       return view('haha/yskz',['isvip'=> false,
            'classmates'=>['贾诩','彬彬','洋洋']
        ]);
    }
}
