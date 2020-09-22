{{ Request::header('Content-Type : text/xml') }}
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
{{--<lastmod>{{ $page->updated_at->tz('GMT')->toAtomString() }}</lastmod>--}}

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($pages as $page)
        <url>
            <loc>{{ url($page->url) }}</loc>
            <lastmod>{{ $page->updated_at }}</lastmod>
            @if ($page->id == 1)
                <changefreq>weekly</changefreq>
                <priority>1</priority>
            @else
                <changefreq>monthly</changefreq>
                <priority>0.9</priority>
            @endif
        </url>
    @endforeach
</urlset>