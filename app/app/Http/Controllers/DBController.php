<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    //
    //查询
    public function select()
    {
    	$mvs = DB::select('select * from goods_1 limit 10');
    	dd($mvs);
    }
    //事务
    public function trans()
    {
    	DB::transaction(function(){
    		    	$res1 = DB::update('update users set  qian = qian - 100 where id =100');
    		    	$res2 = DB::update('update users set  qian = qian + 100 where id =2');
    		    	if($res1 && $res2) {
    		    		DB::commit();
    		    	}else{
    		    		DB::rollback();
    		    	}
    		    });
    	
    	// try{
    	// 	$res2 = DB::update('update users sets  qian = qian + 100 where id =10');
    	// }catch(\Exception $e){
    	// 	// echo $e->getMessage();
    	// }
    	// echo 333;
    	return view('haha/page1');
    }

    public function ceshi()
    {
    	// DB::insert('insert') 
    //构造器
    // 单条
    
        // DB::table('users')->insert(['email'=>'hhahah']);
    //多条   
    // DB::table('users')->insert([['email'=>'lalal','username'=>'xiaochaoge'],['email'=>'lsdsalal','username'=>'xiaosdschaoge']]); 
    // 
    // 
    // 获取id插入
    $id = DB::table('users')->insertGetId(
    ['email' => 'john@example.com', 'votes' => 0]
);
    }
    //jion
    public function join()
    {
        $res = DB::table('goods_1')->join('cates','goods_1.cate_id','cates.id')
            ->skip(0)
            ->take(10)
            ->get();
            dd($res);
    }
}
