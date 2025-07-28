{{-- Button details found here: https://fluxui.dev/components/button --}}
{{-- Color only visible on variant=primary (default in Button controller) --}}
{{-- Variant other than primary will override color options --}}
{{-- Wrap button component in div with fixed width to adjust size --}}

<flux:button class="w-full cursor-pointer"
variant="{{ $variant }}"
color="{{ $color }}"
>
{{ $text }}
</flux:button>
