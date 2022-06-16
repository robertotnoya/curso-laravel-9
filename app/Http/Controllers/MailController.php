<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Jobs\DailyReportJob;

class MailController extends Controller
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index(Request $request)
    {
        //$details = $this->user->find(4);
        //$details = $details->toArray();
        //return $details;
        $details['email'] = 'robertotnoya@gmail.com';
        $details['sales'] = 1832;

        dispatch(new DailyReportJob($details));

        return 'email enviado';
    }
}
