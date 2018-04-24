@extends ('layouts.master')


@section ('content')

                    <div id="main">

                        <header class="major">

                        	<div class="emailPost">

	                            <h2>{{ $email->name }}</h2> | <h2>{{ $email->email }}</h2>

                            	<span>{{ $email->created_at->toFormattedDateString() }}</span>

	                            <p><strong>Message:</strong> {{ $email->message }}</p>
	    

	                            	<ul class="actions">
										<li><a href="#" class="button special">Edit</a></li>
										<li><a href="#" class="button special">Send Email</a></li>
										<li><a href="#" class="button">Delete</a></li>
									</ul>
							

	                        </div>

						</header>
             

                    </div><!--end of main -->

@endsection