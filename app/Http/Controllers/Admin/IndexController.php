<?php
/**
 * Created by PhpStorm.
 * User: 创造404
 * Date: 2018/12/10
 * Time: 14:39
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function index_info()
    {
        return view('admin.index_v1');
    }
}