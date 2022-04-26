@component('mail::message')
## Nouveau message !

Bonjour, Vous avez reçu un nouveau message de {{ $message['firstname'] ?? '' }} {{ $message['lastname'] ?? '' }}. <br>

*Email* : {{ $message['email'] }} <br>
*Sujet* : {{ $message['projectype'] ?? '' }} <br>
*Téléphone* : {{ $message['phone'] ?? '' }} <br>
*Corps du message* :

{{ $message['projectdetails'] ?? '' }} <br>

*Date* : {{ now()->format('d/m/Y') }}

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
