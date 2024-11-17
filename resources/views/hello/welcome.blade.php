{{-- <div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <p>Hello My name is {{$name}} and my email id is: {{$email}}</p>
    <p>I am a {!! $job !!}</p>
   <p>My Hobbies are: {{\Illuminate\Support\Js::from($hobbies)}}</p>
    {{-- <p>{{date('Y')}}</p>
    <p>{{strtoupper($name . " " . $email)}}</p> --}}
{{-- </div> --}}

{{-- @verbatim
{{ name }}
@endverbatim --}}

{{-- Comments in the blade  --}}

{{-- conditional directives in the blade files --}}
{{-- @if (count($cars) > 0)
    <p>There are {{ count($cars) }} cars in the list.</p>
@elseif (count($cars) == 1)
    <p>There are only 1 cars.</p>
@else
    <p>No cars in the list.</p>
@endif

{{-- unless directive --}}
{{-- @unless (false)
    <p>Unless This is not correct.</p>
@endunless --}}

{{-- isset and empty directives --}}

{{-- @isset($record)
    <p>{{$record}}</p>
@endisset

@empty($record)
    <p>{{$record}}</p>
@endempty --}}

{{-- auth and the guest directives --}}
{{--
@auth
    <p>User is authenticated.</p>
@endauth

@guest
    <p>User is not authenticated.</p>
@endguest --}}

{{-- switch directives --}}

{{-- @switch($country)
    @case('ge')
        <p>Germany</p>
        @break
    @case('India')
        <p>India</p>
        @break
    @default
        <p>Unknown Country</p>
@endswitch --}}



{{-- for directives --}}
{{-- @for ($i = 0; $i < 5; $i++)
    <p>{{$i + 1}}</p>
@endfor --}}

{{-- foreach directive --}}
{{-- @foreach ($cars as $car)
    <p>{{$car->model}}</p>
@endforeach --}}

{{-- @forelse ($cars as $car)
    <p>Model : {{$car->model}}</p>
@empty
    <p>There are not any cars.</p>
@endforelse --}}

{{-- while directive --}}

{{-- @while (true)
    <p>Hello World!</p>
@endwhile --}}

{{-- continue and break directives --}}

{{-- @foreach ([1,2,3,4,5] as $item)
    @continue($item == 2)
    <p>{{$item}}</p>
@endforeach --}}


{{-- loop variable in the laravel --}}
{{-- $loop->index -> index of the current item --}}
{{-- $loop->iteration -> the current loop itteration starts at 1 --}}
{{-- $loop->remaining -> the remaining iteration in the loop --}}
{{-- $loop->count -> the total number of items being itterated.--}}
{{-- $loop->first -> whether this is the first iteration through the loop --}}
{{-- $loop->last -> whether this is the last iteration through the loop --}}
{{-- $loop->even -> whether this is the even itteration through the loop --}}
{{-- $loop->odd -> whether this is the odd itteration through the loop --}}
{{-- $loop->depth -> the nesting level of the current loop--}}
{{-- $loop->parent -> when in a nested loop, the parent's loop variable
@foreach ($hobbies as $hobby)
    {{dd($loop)}}
@endforeach --}}


{{-- class and the style directives --}}

{{-- <div @class(['my-special-class',
            // 'my-other-class' => $country === 'ge',
])
    @style(['color:green','background-color:cyan' => $country === 'ge'])
>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores illo magnam nostrum laudantium fugit, deleniti cum, consectetur, magni rerum et inventore exercitationem provident iure at.</p>
</div> --}}
