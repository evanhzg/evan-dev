<section class="generic-section snap-start" style="background-image: url('/assets/img/{{ $coverUrl }}');">
    <div class="generic-text-block" id="text-block-{{ $id }}">
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
