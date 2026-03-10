<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalMessages = Message::count();

        return view('admin.dashboard',compact('totalMessages'));
    }
}