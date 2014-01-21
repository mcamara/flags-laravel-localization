<ul class="language_bar_chooser">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        @if($localeCode == LaravelLocalization::getCurrentLocale())
            <li class="active">
            	<img class="flag flag-{{$localeCode}}"/>
            </li>
        @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
            <li>
            	<a rel="alternate" hreflang="{{$localeCode}}" href="{{$url}}">
            		<img class="flag flag-{{$localeCode}}"/>
            	</a>
            </li>
        @endif
    @endforeach
</ul>
