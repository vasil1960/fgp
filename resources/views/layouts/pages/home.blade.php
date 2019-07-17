@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>Home</h3></div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <blockquote>
                            <p>Welcome  to the Online Manuscript Submission, Review and Tracking System for the Journal Propagation of  Ornamental Plants.<br />
                    We beleive that you will find this System very user friendly. To make your start  even easier, please find below a few instructions: <br />
                    <br />
                    <strong>New </strong><strong>a</strong><strong>uthors:</strong> Please click the 'Register'  button from the menu above and enter the requested information. Upon successful  registration you will be sent an e-mail with instructions to verify your  registration. <br />
                    <u>Note:</u> When you have received an  e-mail from us with an assigned e-mail as user ID and password, DO NOT REGISTER AGAIN. Just log in to the system and you will be automaticly loged as  'Author'. After  that you could submit your manuscript.<br />
                    <br />
                    <strong>Returning </strong><strong>a</strong><strong>uthors:</strong> Please use the provided  username and password and log in to track your manuscript or to submit a NEW  manuscript. (Do not register again as you will then be unable to track your  manuscript). <br />
                    <u>Note</u>: Please upload your  manuscript only ONCE on to the system. After uploading your manuscript, you will  be sent an e-mail requesting that you approve your submission. Please return to  the main menu and APPROVE your submission accordingly. </p>
                            <p><strong>To all  authors:</strong> The following  submission file formats is supported, including: Word, TIFF, JPEG, and Excel. PDF is not an  acceptable file format. <br />
                              <br />
                              <strong>Reviewers: </strong>Please click the 'Login'  button from the menu above and log in to the system. You may view and/or  download manuscripts assigned to you for review, submit your comments for the  editors and the authors, and track the progress of your manuscripts through the  system. <br />
                              <u>Note:</u> Please click the 'Accept' or  'Decline' button as soon as possible after receipt of the e-mail asking you to  review a manuscript. To change your username and password: Log in to the system  and select 'Update My Information' from the menu above. At the top of the  Update My Information screen, click the 'Change Password' button and follow the  directions. <br />
                              After you are logged as reviewer you may also submit  your own manuscript through &ldquo;Submit manuscript&rdquo; menu.</p>
                            <p><strong>Forgot your password? </strong>If you have  forgot your password, click the 'Login' button and click 'Forgot Your  Password?' at the bottom of the Login screen and follow the instructions. <br />
                              Please expect information in your e-mail after each  your action with the system. </p>
                          </blockquote>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection