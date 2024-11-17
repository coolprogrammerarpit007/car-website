{{-- <div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    {{-- <h1>
        {{-- Hello From India, This is Arpit --}}
    {{-- </h1> --}}

    {{-- <p> --}}
        {{-- My name is {{$name}} and my email id is: {{$email}} and I am working on backend skills in {{$year}} --}}
    {{-- </p> --}}
{{-- </div> --}}

{{-- to includ button --}}

{{-- include subviews --}}
{{-- @include('shared.button',['color' => 'yellow','text' => 'Submit']) --}}

{{-- conditonally include subviews --}}
{{-- if view exist render it or not --}}
{{-- @includeIf('shared.search_from', ['year' => 2019]) --}}

{{-- includes view file if search keyword exist --}}
{{-- @includeWhen($searchKeyword, 'shared.search_button', ['year' => 2016]) --}}
{{-- @includeUnless(!$searchKeyword, 'shared.search_button', ['year' => 2016]) --}}
{{-- @includeFirst(['admin.button', 'button'], ['year' => '2016']) --}}

{{-- sub views inside loop --}}

{{-- @php
    $cars = ['Toyota', 'Honda', 'Ford'];
@endphp

@foreach ($cars as $car)
    @include('car',['car' => $car])

@endforeach

@each('car', $cars, 'car', 'car.empty') --}}

{{-- Raw PHP Inside blade files --}}

@php
    @use('Illuminate\Support\Str')
@endphp
