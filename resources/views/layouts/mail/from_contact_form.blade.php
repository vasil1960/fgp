@component('mail::message')
# Introduction

{{ $request->message }}

@component('mail::button', ['url' => config('app.url') . '/pages/home', 'color' => 'green'])
Back
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
