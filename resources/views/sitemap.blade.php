{{-- Карта сайта для робота --}}
{{ Request::header('Content-Type : text/xml') }}
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
{{--<lastmod>{{ $page->updated_at->tz('GMT')->toAtomString() }}</lastmod>--}}

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($pages as $item)
        <url>
            <loc>{{ url($item->url) }}</loc>
            <lastmod>{{ $item->updated_at }}</lastmod>
            @if ($item->id == 1)
                <changefreq>weekly</changefreq>
                <priority>1</priority>
            @else
                <changefreq>monthly</changefreq>
                <priority>0.9</priority>
            @endif
        </url>
    @endforeach
    @foreach ($equipment as $item)
        <url>
            <loc>{{ url($item->url) }}</loc>
            <lastmod>{{ $item->updated_at }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach
    @foreach ($reviews as $item)
        <url>
            <loc>{{ url('/reviews/'.$item->id.'.html') }}</loc>
            <lastmod>{{ $item->updated_at }}</lastmod>
            <changefreq>yearly</changefreq>
            <priority>0.3</priority>
        </url>
    @endforeach
</urlset>