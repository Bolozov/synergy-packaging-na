@component('mail::message')
## Nouveau message !

Bonjour, Vous avez reçu un nouveau message de {{ $message['prenom'] ?? '' }} {{ $message['nom'] ?? '' }}. <br>

*Email* : {{ $message['email'] }} <br>
@if ($message['entreprise'] != null)
*Entreprise* : {{ $message['entreprise'] }} <br>
@endif
*Sujet* : {{ $message['sujet'] ?? '' }} <br>
*Téléphone* : {{ $message['tel'] ?? '' }} <br>
*Corps du message* :

{{ $message['message'] ?? '' }} <br>

*Date* : {{ now()->format('d/m/Y') }}

Cordialement,<br>
{{ config('app.name') }}
@endcomponent
