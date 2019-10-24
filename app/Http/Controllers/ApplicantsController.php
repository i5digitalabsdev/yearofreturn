<?php

namespace App\Http\Controllers;

use App\application;
use App\Events\PartTwoLinkSent;
use App\Events\PaymentLinkSent;
use App\Helpers\Settings;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    protected $helpers;

    /**
     * ApplicantsController constructor.
     * @param $helpers
     */
    public function __construct(Settings $helpers)
    {
        $this->helpers = $helpers;
    }

    public function index()
    {
        $applicants = application::select('id','reg_no','first_name','last_name', 'middle_name','application_status')->get();
//        dump($applicants);
        foreach ($applicants as $applicant){
            $applicant['fullname'] = $applicant['first_name'].' '.$applicant['middle_name']. ' '. $applicant['last_name'];
        }
        return view('admin.applicants.index', compact('applicants'));
    }

    public function show($id)
    {
        $applicant = application::find($id);
        $applicant['parent1'] = unserialize($applicant->parent1);
        $applicant['parent2'] = unserialize($applicant->parent2);
        $applicant['kid_status'] = unserialize($applicant->kid_status);
        $applicant['proficiency_in'] = unserialize($applicant->proficiency_in);
        $applicant['interviewDates'] = unserialize($applicant->interviewDates);
        return view('admin.applicants.show', compact('applicant'));
    }

    public function sendPaymentLink(Request $request)
    {
        //get paymentToken
        $applicant = application::where('reg_no', $request['reg_no'])->first();
        $data = [
            'email' => $applicant->email,
            'message_body' => $this->helpers->sendPaymentEmail(),
            'payment_link' => url('DTISecurePayment/'.$applicant->payment_token)
        ];
        $send = event(new PaymentLinkSent($data));
        if($send){
            //TODO store steps to track process

            return redirect('admin/applicants/'.$applicant->id)->with('message', 'Payment link sent to applicant successfully');
        } else {
            return redirect('admin/applicants/'.$applicant->id)->withErrors('Unable to send payment link to applicant');
        }
    }

    public function sendPart2Link(Request $request)
    {
        $applicant = application::where('reg_no', $request['reg_no'])->first();
        $data = [
            'email' => $applicant->email,
            'message_body' => $this->helpers->sendPartTwoEmail(),
            'part_two_link' => url('onlineapplicationsecondpart?applicant_token='.$applicant->application_token)
        ];
        $send = event(new PartTwoLinkSent($data));
        if($send){
            //TODO store steps to track process

            return redirect('admin/applicants/'.$applicant->id)->with('message', 'Part two link sent to applicant successfully');
        } else {
            return redirect('admin/applicants/'.$applicant->id)->withErrors('Unable to send part two link to applicant');
        }


    }
}
