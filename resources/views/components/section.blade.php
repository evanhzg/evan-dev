<section class="generic-section" style="background-image: url('/assets/img/{{ $coverUrl }}');">
    <div class="generic-text-block">
        <h2>{{ $title }}_</h2>
        @if($lightContent)
            <p class="light-p">{{ $content }}</p>
        @else
            <p class="dark-p">{{ $content }}</p>
        @endif
    </div>

    {!! $slot !!}

    @if ($showButton)
        <button>{{ $buttonTitle }}</button>
    @endif
</section>
