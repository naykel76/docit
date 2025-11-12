@php
    $code = $slot->toHtml();
@endphp

<pre><x-torchlight-code language="{{ $language }}">
    {!! $code !!}
</x-torchlight-code></pre>
