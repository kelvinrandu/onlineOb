@component('mail::message')
# Assigned Detective



@component('mail::panel')
Name: {{$detective[0]->Fname}} {{$detective[0]->lname}}<br>
Phone number: {{$detective[0]->phone}}<br>
Email: {{$detective[0]->email}}

Please feel free to contact me with regards to your case

@endcomponent

<!-- @component('mail::button', ['url' => ''])

@endcomponent -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
