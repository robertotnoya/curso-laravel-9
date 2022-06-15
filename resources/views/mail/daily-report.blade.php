@component('mail::message')
# Introduction

O total de dendas foi <strong>{{ $sales }}</strong>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

