@component('mail::message')
Thanks! {{$user['name']}}

{{$user['message']}}

@component('mail::button', ['url' => 'https://postbahamas.xyz/'])
Browse
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
