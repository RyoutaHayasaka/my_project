<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;

    class SampleController extends Controller {
        public function index ( Request $request ) {
            $sampleValues = 'Sampleページです';

            // $insertResult = DB::connection("mysql") -> insert("insert into users (id, email, name, password) values (null, 'iii@iii.com', 'いいい', 'iiiiii'), (null, 'uuu@uuu.com', 'ううう', 'uuuuuu')");
            // $deleteResult = DB::connection("mysql") -> delete("delete from users where id = 2");
            // dd($deleteResult);

            return view("sample/index" , ["sampleValues" => $sampleValues]);
        }
    }