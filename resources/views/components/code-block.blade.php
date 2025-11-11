 @php
     $code = $slot->toHtml();
 @endphp

 {!! $renderCodeBlock($code, $language, true) !!}
