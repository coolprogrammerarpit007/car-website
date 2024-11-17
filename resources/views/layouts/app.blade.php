

    @extends('layouts.clean')

    @section('childContent')
        @include('layouts.partials.header')
        @yield('content')
        <footer>
            {{-- to check if the section exist,if it is then render it or not --}}
            @hasSection ('footerLinks')

                @yield('footerLinks')
            @else
                <p>NO FOOTER LINKS</p>
            @endif
            {{-- @section('footerLinks')
                <a href="#" target="_blank" rel="noopener noreferrer">Link 1</a>
                <a href="#" target="_blank" rel="noopener noreferrer">Link 2</a>
            @endsection --}}
        </footer>
    @endsection



