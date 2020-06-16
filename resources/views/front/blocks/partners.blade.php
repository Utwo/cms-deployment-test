@php
    switch ($block->input('columns')) {
        case 2:
            $columns = 'sm:grid-cols-2';
            break;

        case 3:
            $columns = 'sm:grid-cols-2 lg:grid-cols-3';
            break;

        case 4:
            $columns = 'sm:grid-cols-2 lg:grid-cols-4';
            break;

        default:
            $columns = null;
            break;
    }
@endphp

<section class="container leading-relaxed grid gap-10 {{ $columns }}">
    @foreach ($block->present()->partnersListPublished as $partner)
        @include('front.partners.card', [
            'partner' => $partner,
        ])
    @endforeach
</section>
