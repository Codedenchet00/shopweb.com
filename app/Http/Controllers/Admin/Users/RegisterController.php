<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\UserService;
use Illuminate\Support\Str;


class RegisterController extends Controller
{   
    protected $userService;
    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }
    
    public function index() {
        // $data = $this->userService->get();
        // dd($data);
        // return $data;
        $title = 'Đăng Ký Hệ Thống';
        // $page = 'register-page';
        $name = Str::slug($title);
        echo $name;
        // return view('admin.contents.users.register', compact('title', 'page'));
    }

    public function store(Request $request) {
        // dd($request->input());
        // return 'Current PHP version: ' . phpversion();
    }

}
