<?php

namespace App\Http\Services;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class UserService
{

    // Lấy tất cả các dữ liệu
    public function get() {
        return User::all();
    }

    //Trả về dữ liệu với tham số email
    public function show($request) {
        $email = $request->input('email');
        return User::where('email', $email);
    }

    // Hàm thêm dữ liệu user
    public function create() {
        
    }

    // public function create($request) {
    //     try {
    //         User::create([
    //             'category_name' => (string) $request->input('category_name'),
    //             'parent_id' => (int) $request->input('parent_id'),
    //             'description' => (string) $request->input('description'),
    //             'content' => (string) $request->input('content'),
    //             'active' => (string) $request->input('active'),
    //             // 'slug' => Str::slug($request->input('category_name'))
    //            // dd($request->input());

    //         ]);

    //         Session::flash('success', 'Tạo Danh Mục thành công');
    //     }catch (\Exception $err) {
    //         Session::flash('error', $err->getMessage());
    //         return false;
    //     }

    //     return true;

    // }

    // // Phương thức sửa
    // public function update($category, $request) {
    //     if($request->input('parent_id') != $category->id) {
    //         $category->fill($request->input());
    //         $category->save();
    //         Session::flash('success', 'Cập nhật Danh Mục thành công');
    //         return true;
    //     }else {
    //         Session::flash('error', 'Cập nhật Danh Mục thất bại');
    //         return false;
    //     }
    // }

    // // Phương thức xóa
    // public function destroy($request) {
    //     $id = $request->input('id');
    //     $data = Category::where('id', $id)->first();
    //     if($data) {
    //         return Category::where('id', $id)->orWhere('parent_id', $id)->delete();
    //     }

    //     return false;
    // }

}
