<?php
/*******************************
 *  07.07.2019 Sofia
 *  v.tsigov@gmail.com
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUs;
use Mail;
use App\Mail\ContactForm;
use Session;
use App\User;

class PagesController extends Controller
{
    /**************************
     *  Protect pages
     */
    public function __construct()
    {
        // Protect to unregistered users exclud ContactUs form
        $this->middleware('auth')->except(['contactUs', 'contactUsPost']);
    }

    /***************************
     *  Home
     */
    public function home()
    {
        // open and view Home page
        return view('layouts.pages.home');
    }
    
    /**************************
     *  Users
     */
    public function users()
    {  
        
        $users =  User::paginate(15);
    
        // open and view Users page
        return view('layouts.pages.users', compact('users'));
    }

    /**************************
     *  Manuscript
     */
    public function manuscripts()
    {
        // open and view Manuscripts page
        return view('layouts.pages.manuscripts');
    }

    /**************************
     *  Instructions
     */
    public function instructions()
    {
        // open and view Instructions page
        return view('layouts.pages.instructions');
    }

    /**************************
     *  Contact Us
     */
    public function contactUs()
    {
        // open and view Contact Us page
        return view('layouts.pages.contacts');
    }

    /**************************
     *  Save and send mail
     */
    public function ContactUsPost(Request $request)
    {
        // Get and validate data from Contact Form.
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        // Save data into database - contact_us table
        ContactUs::create($request->all());

        // Mail massage to admin
        Mail::to(['v.tsigov@gmail.com'])
            ->send( new ContactForm( $request ) );
        
        // Prepaire flash message
        Session::flash('success');

        return back();
    }
}
