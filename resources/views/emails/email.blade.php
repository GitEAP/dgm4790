<hr>

<div class="emailPost">

	<h2><a href="/emails/{{ $email->id }}">{{ $email->name }}</a></h2> | <h2>{{ $email->email }}</h2>

	<span>{{ $email->created_at->toFormattedDateString() }}</span>

	<p><strong>Message:</strong> {{ $email->message }}</p>


</div>

