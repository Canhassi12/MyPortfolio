@props([
    'content',
    'icon',
    'color',
    'link'
])

<a href="{{ $link ?? '#' }}" target="{{ $link ? '_blank' : '' }}">
    <button class="bg-gradient-to-tr {{$color}}-gradient p-0.5 rounded">
        <div class="flex justify-center items-center contact-button text-base lg:w-[12.5rem] lg:h-[55px] md:w-44 md:h-[55px] w-[12.5rem] h-[55px] bg-main border-black rounded gap-2">
            <x-dynamic-component :component="'icons.' . $icon" />
            <li>{{ $content }}</li>
        </div>
    </button>
</a>