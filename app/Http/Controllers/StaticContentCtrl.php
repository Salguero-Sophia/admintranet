<?php

namespace App\Http\Controllers;

use App\Models\Careers;
use Illuminate\Http\Request;

class StaticContentCtrl extends Controller
{
    public function CostumerRegistration()
    {
        return view('frontend.user.registration');
    }

    public function CostumerLogin()
    {
        return view('frontend.user.loginUser');
    }

    public function Promotions()
    {

        return view('frontend.products.promotions');
    }

    public function Catering()
    {

        return view('frontend.products.catering');
    }

    public function Nationwide()
    {

        return view('frontend.products.nationwide');
    }

    public function Careers()
    {
        $listCareers = [
            [
                "id" => 1,
                "title" => 'Team Member',
                "image" => 'static_files/careers/apply/team-member.jpg',
            ],
            [
                "id" => 2,
                "title" => 'Restaurant Manager',
                "image" => 'static_files/careers/apply/manager.jpg',
            ],
            [
                "id" => 3,
                "title" => 'Corporate',
                "image" => 'static_files/careers/apply/corporate.jpg',
            ],
        ];

        return view('frontend.careers.careers',
            [
                'listCareers' => $listCareers
            ]
        );
    }

    public function CareersApply($careerId)
    {
        $career = Careers::find($careerId);

        return view('frontend.careers.careersForm',
            [
                'career' => $career,
            ]
        );
    }
}
