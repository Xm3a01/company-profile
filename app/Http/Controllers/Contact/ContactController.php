<?php

namespace App\Http\Controllers\Contact;

use Mail;
use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
 public $request;

 public function __construct()
 {
  $request = new Request();
    $this->request = $request;
 }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request , [
            'name'=>'required',
            'email'=>'required|email',
            'msg'=>'required',
          ]); 

    $contact = [];

    $contact['name'] = $request->get('name');
    $contact['email'] = $request->get('email');
    $contact['subj'] = $request->get('subj');
    $contact['msg'] = $request->get('msg');

     Mail::send(new ContactEmail($contact));
     Session::flash('success','Send succefull');
    return redirect('/en-contact');

    }

    public function storeAr(Request $request)
    {
         $message = array(
            'name.required'=>'يجب ملأ خانت لاسم',
            'email.required'=>'يجب ملأ خانت البريد اللاكتروني',
            'email.email'=>'البريد اللاكتروني غير صحيح',
            'msg.required'=>'لابدا من وجود رساله',
        );

        $this->validate($request , [
          'name'=>'required',
          'email'=>'required|email',
          'msg'=>'required',
        ],$message);

    $contact = [];

    $contact['name'] = $request->get('name');
    $contact['email'] = $request->get('email');
    $contact['subj'] = $request->get('subj');
    $contact['msg'] = $request->get('msg');
    
     Mail::send(new ContactEmail($contact));
     Session::flash('success','تم ارسال  بنجاح');
    return redirect('/ar-contact');
    }


}
