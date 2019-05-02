@component('mail::message')
# Introduction

There is a new Query from <strong>{{$name}}</strong>
<br>
<strong>Message:</strong>
{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
