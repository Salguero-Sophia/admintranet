<?php

namespace App\Http\Controllers;

use App\Mail\ApplicantInformation;
use App\Models\Applicants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ApplicantsCtrl extends Controller
{

    // FrontEnd 

    public function ApplicantAdd(Request $request)
    {
        $request->validate([
            'first_name'      => ['required'],
            'last_name'       => ['required'],
            'email'           => ['required'],
            'street_address'  => ['required'],
            'city'            => ['required'],
            'state_province'  => ['required'],
            'phone_number'    => ['required'],
            'zip_postal_code' => ['required'],
            'about'           => ['required'],
            'attachment_info' => ['required'],
            'career_id'       => ['required'],
        ], [
            'first_name'      => "First_name is required",
            'last_name'       => "Last_name is required",
            'email'           => "Email is required",
            'street_address'  => "Street_address is required",
            'city'            => "City is required",
            'state_province'  => "State_province is required",
            'zip_postal_code' => "Zip_postal_code is required",
            'about'           => "About is required",
            'attachment_info' => "Attachment_info is required",
            'career_id'       => "Career_id is required",
        ]);


        if ($request->hasFile('attachment_info')) {

            $archivo = $request->file('attachment_info');

            $nombreArchivo = 'pruebas-hr/' . time() . '_' . $archivo->getClientOriginalName();

            Storage::disk('s3')->put($nombreArchivo, file_get_contents($archivo));

            $url = Storage::disk('s3')->url($nombreArchivo);

            $filename = basename($url);
        }


        $applicant = Applicants::create([
            'first_name'      => $request->first_name,
            'last_name'       => $request->last_name,
            'email'           => $request->email,
            'street_address'  => $request->street_address,
            'city'            => $request->city,
            'phone_number'    => $request->phone_number,
            'state_province'  => $request->state_province,
            'zip_postal_code' => $request->zip_postal_code,
            'about'           => $request->about,
            'attachment_info' => $filename,
            'career_id'       => $request->career_id,
        ]);

        $this->SendApplicantPostulation($applicant->id);

        return redirect()->route('careersApply', $request->career_id)->with('success', 'Application submitted successfully!');
    }

    public function SendApplicantPostulation($applicantId)
    {

        $applicant = Applicants::find($applicantId);

        if (filter_var($applicant->email, FILTER_VALIDATE_EMAIL)) {

            Mail::to('jobs@sanmartinbakery.com')->queue(new ApplicantInformation($applicant));

            return true;
        }

        return false;
    }

    // Backend

    public function ApplicantsList()
    {

        $applicantsCount = Applicants::all()->count();
        $applicants = Applicants::paginate(10);

        return view(
            'backend.Applicants.applicants-list',
            [
                'applicantsCount' => $applicantsCount,
                'applicants'      => $applicants
            ]
        );
    }

    public function ApplicantShow($applicantId)
    {
        $applicant = Applicants::find($applicantId);

        return view(
            'backend.Applicants.applicant-view',
            [
                'applicant' => $applicant,
            ]
        );
    }

    public function ApplicantDelete($applicantId)
    {
        $applicant = Applicants::find($applicantId);
        $applicant->delete();

        return redirect()->route('applicantsList');
    }

    public function DownloadFile($filename)
    {
        $fileUrl = 'pruebas-hr/' . $filename;

        if (Storage::disk('s3')->exists($fileUrl)) {
            $content = Storage::disk('s3')->get($fileUrl);
            return response($content)
                ->withHeaders([
                    'Content-Type' => Storage::disk('s3')->mimeType($fileUrl),
                    'Content-Disposition' => 'attachment; filename="' . $fileUrl . '"',
                ]);
        } else {
            return "Archivo no encontrado.";
        }
    }
}
