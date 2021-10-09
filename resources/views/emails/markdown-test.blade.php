@component('mail::message')

Votre message a bien été envoyé.
@component('mail::panel')

<h2>{{  $contenuMail["name"]  }}</h2>    
<h2>{{  $contenuMail["email"]  }}</h2>
<h2>{{  $contenuMail["phone"]  }}</h2>
<h2>{{  $contenuMail["message"]  }}</h2>
@endcomponent
@component('mail::table')
|Nom            |Age            |Argent    |Commune    |
|:--------------|:--------------|:---------|:----------|
| Stan          | 24 ans        | $10      | Bruxelles |
| Ali           | 35 ans        | $20      | Schaerbeek|
| Adil          | 24 ans        | $5       | Molenbeek |
@endcomponent
@component('mail::button', ['url' => '$url'])
Cliquez ici
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
