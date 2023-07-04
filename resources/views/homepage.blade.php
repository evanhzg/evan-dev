@extends('layout')
@section('content')

    <x-section
        title="je suis Evan"
        id="section1"
        content="Lorem ipsum lorem ipsum dolor sit amet, consectetuer adipis- cing elit, sed diam nonummy. Ipsum dolor sit amet, consecte- tuer adipiscing elit, sed diam nonummy. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinci"
        button-title="mon CV"
        coverUrl="section1.jpg"
        show-button
    />

    <x-section
        title="mon blog"
        id="section2"
        content="Lorem ipsum lorem ipsum dolor sit amet, consectetuer adipis- cing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrent luptatufeugait nulla facilisi"
        button-title="portfolio"
        coverUrl="section2.jpg"
        light-content
        show-button
    />

    <x-section
        id="section3"
        title="mes services"
        content="Lorem ipsum lorem ipsum dolor sit amet, consectetuer adipis- cing elit, sed diam nonummy.Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy."
        button-title="portfolio"
        coverUrl="section3.jpg">

        <div class="bubbles-group">
            <div class="bubble">
                <div class="bubble-icon"></div>
                <h3 class="bubble-label">rédaction</h3>
            </div>
            <div class="bubble">
                <div class="bubble-icon"></div>
                <h3 class="bubble-label">création</h3>
            </div>
            <div class="bubble">
                <div class="bubble-icon"></div>
                <h3 class="bubble-label">adaptation</h3>
            </div>
        </div>
    </x-section>

    <x-section
        title="contactez-moi"
        id="section4"
        content="Lorem ipsum lorem ipsum dolor sit amet, consectetuer adipis- cing elit, sed diam nonummy."
        button-title="par ici"
        coverUrl="section4.jpg"
        light-content
        show-button
    >

        <x-contact-form />
    </x-section>
@endsection
