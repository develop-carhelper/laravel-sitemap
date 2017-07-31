<url>
    @if (! empty($tag->url))
    <loc>{{ $tag->url }}</loc>
    @endif

    @if (! empty($tag->xhtmlLinks))
        @foreach($tag->xhtmlLinks as $xhtmlLinkAttrs)
    @include('laravel-sitemap::xhtml-link', ['xhtmlLinksAttrs' => $xhtmlLinkAttrs])
        @endforeach
    @endif

    @if (! empty($tag->lastModificationDate))
    <lastmod>{{ $tag->lastModificationDate->format(DateTime::ATOM) }}</lastmod>
    @endif

    @if (! empty($tag->changeFrequency))
    <changefreq>{{ $tag->changeFrequency }}</changefreq>
    @endif

    @if (! empty($tag->priority))
    <priority>{{ $tag->priority }}</priority>
    @endif
</url>
