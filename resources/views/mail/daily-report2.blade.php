@component('mail::message')
# Introduction

O total de vendas foi <strong>{{ $details['sales'] }}</strong>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
