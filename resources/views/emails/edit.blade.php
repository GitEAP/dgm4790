@extends ('layouts.master')


@section ('content')

                    <div id="main">

                        <h2>Edit Email</h2>
                      
                            <form method="post" action="/thanks" name="contact" id="contactForm">
                                {{ csrf_field() }}
                                <div class="field">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" value="{{ $email->name }}" required />
                                </div>
                                <div class="field">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" value="{{ $email->email }}"  required/>
                                </div>
                                <div class="field">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" rows="3" required>{{ $email->message }}</textarea>
                                </div>
                                <ul class="actions">
                                    <li><input type="submit" value="Send Message" /></li>
                                </ul>

                                @include ('layouts.errors')
                            </form>

                    </div><!--end of main -->

@endsection