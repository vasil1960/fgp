@component('mail::message')
# Introduction {{ $request->title }}

{{ $request->abstract }}

@component('mail::button', ['url' => '/manuscripts' ] )
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
