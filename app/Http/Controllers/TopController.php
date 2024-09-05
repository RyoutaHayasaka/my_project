<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class TopController extends Controller {
        public function index ( Request $request ) {
            $sampleValue = "sample テキストです。";

            // $records = DB::connection('mysql') -> select("select * from items");
            // $records[0] -> name;

            // 追加
            // $insertResult = DB::connection("mysql") -> insert("insert into items (id, name, price) values (null, 'メロン', 2000)");
            // 更新
            // $updateResult = DB::connection("mysql") -> update("update items set name = 'りんご', price = 600 where id = 1");
            // 削除
            // $deleteResult = DB::connection("mysql") -> delete("delete from items where id = 3");
            // dd($deleteResult);

            return view("top/index" , ["sampleValue" => $sampleValue]);
        }
    }
