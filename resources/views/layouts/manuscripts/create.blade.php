@extends('layouts.app')

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12" >
            
            @if(Session::has('success'))
                <div class="alert alert-info">Thanks for contacting us!</div>
            @endif
           
            <div class="card">

                <div class="card-header"><h3>Submit Manuscripts</h3></div>
                
                <div class="card-body">

                    <form action="{{ route('manuscripts.store') }}" method="POST" enctype="multipart/form-data" >
                       
                        @csrf
                        
                        {{-- input coverletter --}}
                        <div class="form-group row pb-1  pt-5">
                            <label for="coverletter" class="col-md-2 col-form-label text-md-left offset-md-1"><h5>{{ __('Cover Letter') }}:</h5></label>

                            <div class="col-md-10 offset-md-1">
                                <textarea  rows="5" id="coverletter" type="text"  class="form-control @error('coverletter') is-invalid @enderror" name="coverletter"   autocomplete="coverletter" autofocus>{{ old('coverletter') }}</textarea>

                                @error('coverletter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                        </div>

                        {{-- input title --}}
                        <div class="form-group row pb-1 ">
                            <label for="title" class="col-md-2 col-form-label text-md-left offset-md-1"><h5>{{ __('Title') }}:</h5></label>

                            <div class="col-md-10 offset-md-1">
                                <textarea rows="5" id="title" type="text"  class="form-control @error('title') is-invalid @enderror" name="title"   autocomplete="title" autofocus>{{ old('title') }}</textarea>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- input abstract --}}
                        <div class="form-group row pb-1 ">
                            <label for="abstract" class="col-md-2 col-form-label text-md-left offset-md-1"><h5>{{ __('Abstract') }}:</h5></label>

                            <div class="col-md-10 offset-md-1">
                                <textarea rows="5" id="abstract" type="text"  class="form-control @error('abstract') is-invalid @enderror" name="abstract"   autocomplete="abstract" autofocus>{{ old('abstract') }}</textarea>

                                @error('abstract')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- input keywords --}}
                        <div class="form-group row pb-1 ">
                            <label for="keywords"  class="col-md-2 col-form-label text-md-left offset-md-1"><h5>{{ __('Keywords') }}:</h5></label>

                            <div class="col-md-10 offset-md-1">
                                <textarea rows="5" id="keywords" type="text"  class="form-control @error('keywords') is-invalid @enderror" name="keywords"   autocomplete="keywords" autofocus>{{ old('keywords') }}</textarea>

                                @error('keywords')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- input comment --}}
                        <div class="form-group row pb-1 ">
                            <label for="comment" class="col-md-2 col-form-label text-md-left offset-md-1"><h5>{{ __('Comments') }}:</h5></label>

                            <div class="col-md-10 offset-md-1">
                                <textarea  rows="5" id="comment" type="text" class="form-control @error('comment') is-invalid @enderror" name="comment"   autocomplete="comment" autofocus>{{ old('comment') }}</textarea>

                                @error('comment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- input upload files --}}
                        <div class="form-group row pb-1 ">
                            <label for="docfiles" class="col-md-3 col-form-label text-md-left offset-md-1"><h5>{{ __('Select files for upload') }}:</h5></label>

                            <div class="col-md-10 offset-md-1">
                                <input id="docfiles" type="file"  class="form-control @error('docfiles') is-invalid @enderror" name="docfiles"   autocomplete="docfiles" autofocus>

                                @error('docfiles')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- submit button --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-1">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit Manuscript') }}
                                </button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


