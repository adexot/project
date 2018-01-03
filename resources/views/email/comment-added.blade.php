@component('mail::message')

Dear, {{ $owner->name }}<br>
A comment has been added to your ticket with id: {{ $ticket->unique_id }}.
Click the button below to see the ticket:

Here is the comment:<br/>
{{ $comment->message }}

@component('mail::button', ['url' => config('app.url') . '/ticket/' . $ticket->unique_id])
View Ticket
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
