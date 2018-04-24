@if (count($errors))
    <div class="alert-error" style="margin-top: 15px; margin-left: 5%; padding: .5em; background-color: #b23737; color: #fff;">
        <ul class="alt">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif