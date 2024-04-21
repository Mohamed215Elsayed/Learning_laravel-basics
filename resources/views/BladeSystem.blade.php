{{-- <P>HI Ya {{ $name }} </p>
The current UNIX timestamp is {{ time()/60/60/24/356 }}.
<br> --}}
{{-- Hello, {!! $name !!}. --}}
{{-- If you do not want your data to be escaped --}}
{{-- <h1>Laravel</h1> --}}

{{-- Hello, @{{ name }}. --}}
{{-- you may use the @ symbol to inform the Blade rendering engine an expression should remain untouched --}}
{{-- <script>
    var app = {{ Js::from($array) }};
</script> --}}
{{-- <script>
    var app = {{ Illuminate\Support\Js::from($array) }};
</script> --}}

{{-- @verbatim
    <div class="container">
        Hello, {{ name }}.
    </div>
@endverbatim --}}
{{--
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif --}}

{{-- @unless (Auth::check())
    You are not signed in.
@endunless --}}

{{-- @isset($records)
    // $records is defined and is not null...
@endisset

@empty($records)
    // $records is "empty"...
@endempty --}}


{{-- @auth
    // The user is authenticated...
@endauth

@guest
    // The user is not authenticated...
@endguest --}}


{{-- @auth('admin')
    // The user is authenticated...
@endauth

@guest('admin')
    // The user is not authenticated...
@endguest --}}
{{--
@production
    // Production specific content...
@endproduction --}}



{{-- @env('staging')
    // The application is running in "staging"...
@endenv

@env(['staging', 'production'])
    // The application is running in "staging" or "production"...
@endenv --}}

{{-- @hasSection('navigation')
    <div class="pull-right">
        @yield('navigation')
    </div>

    <div class="clearfix"></div>
@endif --}}

{{-- @sectionMissing('navigation')
    <div class="pull-right">
        @include('default-navigation')
    </div>
@endif --}}

{{-- @session('status')
    <div class="p-4 bg-green-100">
        {{ $value }}
    </div>
@endsession --}}
{{-- @switch($i)
    @case(1)
        First case...
        @break

    @case(2)
        Second case...
        @break

    @default
        Default case...
@endswitch --}}

{{-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br>
@endfor
  --}}
{{-- @foreach ($users as $user)
    <p>This is user {{ $user->id }}</p>
@endforeach

@forelse ($users as $user)
    <li>{{ $user->name }}</li>
@empty
    <p>No users</p>
@endforelse

@while (true)
    <p>I'm looping forever.</p>
@endwhile --}}
