<?php

namespace App\Http\Controllers;

use App\Http\Requests\CareersRequest;
use App\Models\Careers;
use App\Models\Stores;
use App\Models\TypeOfCareers;

class CareersCtrl extends Controller
{
    public function CareersList($typeId)
    {
        $careersAvailable = Careers::where('is_active', true)
            ->where('type_id', $typeId)
            ->paginate(10);

        return view(
            'frontend.careers.careersList',
            [
                'careers' => $careersAvailable
            ]
        );
    }

    public function ShowCareers()
    {
        $careersCount = Careers::all()->count();
        $careers = Careers::paginate(10);

        return view(
            'backend.Careers.showCareers',
            [
                'careers' => $careers,
                'careersCount' => $careersCount,
            ]
        );
    }

    public function CareerCreate()
    {
        $stores = Stores::all();

        $typeOfCareers = TypeOfCareers::all();

        return view(
            'backend.Careers.careerCreate',
            [
                'stores'        => $stores,
                'typeOfCareers' => $typeOfCareers,
            ]
        );
    }

    public function CareerAdd(CareersRequest $request)
    {
        Careers::create([
            'title'        => $request->title,
            'description'  => $request->description,
            'we_offer'     => $request->we_offer,
            'requirements' => $request->requirements,
            'salary_range' => $request->salary_range,
            'store_id'     => $request->store_id,
            'type_id'      => $request->type_id,
        ]);

        return redirect()->route('showCareers');
    }

    public function CareerEdit($id)
    {
        $career = Careers::find($id);
        $stores = Stores::all();
        $typeOfCareers = TypeOfCareers::all();

        return view('backend.Careers.careerEdit', [
            'career'        => $career,
            'stores'        => $stores,
            'typeOfCareers' => $typeOfCareers,
        ]);
    }

    public function CareerUpdate(CareersRequest $request, $id)
    {

        $career = Careers::find($id);

        $career->title        = $request->title;
        $career->description  = $request->description;
        $career->we_offer     = $request->we_offer;
        $career->requirements = $request->requirements;
        $career->salary_range = $request->salary_range;
        $career->store_id     = $request->store_id;
        $career->type_id      = $request->type_id;
        $career->is_active    = $request->is_active;

        $career->save();

        return redirect()->route('showCareers');
    }

    public function CareerDelete($id)
    {
        $career = Careers::find($id);
        $career->delete();

        return redirect()->route('showCareers');
    }
}
