@component('mail::message')
# Introduction {{ $request->title }}

<h3>Title:</h3>
<p>{{ $request->title }}</p>
<br>
<h3>Abstract:</h3>
<p>{{ $request->abstract }}</p>

@component('mail::button', ['url' => 'http://fgp.klaro-bg.com/manuscripts' ] )
Manuscript
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
