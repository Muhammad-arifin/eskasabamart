<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        return view('pelanggan.page.home', [
            'title' => 'Beranda',
        ]);
    }
    public function shop()
    {
        return view('pelanggan.page.shop', [
            'title' => 'shop',
        ]);
    }
    public function transaksi()
    {
        return view('pelanggan.page.transaksi', [
            'title' => 'Transaksi',
        ]);
    }
    public function contact()
    {
        return view('pelanggan.page.contact', [
            'title' => 'Contact Us',
        ]);
    }
    public function checkout()
    {
        return view('pelanggan.page.checkout', [
            'title' => 'Check Out',
        ]);
    }
      public function admin()
      {
        return view('admin.page.dashboard', [
            'nama' =>  'Dashboard',
            'title' => 'Admin Dashboard',
        ]);
    }
    public function product()
      {
        return view('admin.page.product', [
            'nama' =>  'product',
            'title' => 'Admin product',
        ]);
    }
    public function userManagement()
      {
        return view('admin.page.user', [
            'nama' =>  'User Management',
            'title' => 'Admin User Management',
        ]);
    }
    public function report()
      {
        return view('admin.layout.report', [
            'nama' =>  'report',
            'title' => 'Admin report',
        ]);
    }


}
