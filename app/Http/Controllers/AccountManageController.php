<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountManageController extends Controller
{
    public function __construct(Request $request)
    {
        $this->page_title = $request->route()->getName();
        $description = \Request::route()->getAction();
        $this->page_desc = isset($description['desc']) ?  $description['desc']:$this->page_title;
        \App\System::AccessLogWrite();
    }

    public function AccountDashboard(){

        $data['page_title'] = $this->page_title;
        return view('pages.account.dashboard',$data);
    }
}
