@extends ('layouts.master')


@section ('content')

                    <div id="main">

                        <!-- Featured Post -->
                            <article class="post featured">
                                <header class="major">
                                    <h2>List of Emails</h2>
								</header>

                                	@foreach ($emails as $email)
	                                	@include ('emails.email')
	                                @endforeach
                              
                            </article>

                    </div><!--end of main -->

@endsection