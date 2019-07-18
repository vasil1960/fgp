@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" >
            
            {{-- @if(Session::has('success'))
                <div class="alert alert-info">Thanks for contacting us!</div>
            @endif --}}
            @if(session('success'))
                <div class="alert alert-info">
                    {{ session('success') }}
                </div>  
            @endif

            <div class="card">
                <div class="card-header">
                    <b class="">Title:</b>
                    <p>{{ $manuscript->title }}</p>
                </div>
                
                <div class="card-body">
                    <b class="">Cover Letter:</b>
                    <p>{{ $manuscript->coverletter }}</p>
                     <hr>
                </div>

                <div class="container">
                    <b class="">Apstract:</b>
                    <p>{{ $manuscript->abstract }}</p>
                    <hr>
                </div>

                <div class="container">
                    <b class="">Keywords:</b>
                    <p>{{ $manuscript->keywords }}</p>
                    <hr>
                </div>

                <div class="container">
                    <b class="">Comments:</b>
                    <p>{{ $manuscript->comment }}</p>
                    <hr>
                </div>

                <div class="container">
                    <a class="btn btn-primary" href="{{ asset('storage/docs/'.auth()->user()->id.'/'.$manuscript->docfiles) }}">Download Manuscript</a>

                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection