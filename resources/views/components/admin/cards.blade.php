{{-- <div class="card">
    <h3>Admin Card Component</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia distinctio odit numquam pariatur quasi porro, consequatur voluptatum exercitationem placeat iste eos. Nesciunt odio provident nostrum ullam quo. Amet minima harum rerum voluptatem quidem sed excepturi consectetur eos reprehenderit? Ipsa dolor et vel laboriosam reprehenderit enim.</p>
</div> --}}

@props(['color'.'bgColor'])

 <div class="card">
     <h3>{{ $title }}</h3>
     @if ($slot->isEmpty())
         <p>Please add content to the slot.</p>
     @else
        {{ $slot }}
     @endif
     <h3>{{ $footer }}</h3>
</div>
