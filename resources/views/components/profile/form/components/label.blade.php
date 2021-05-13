@props(['value'])

<label
    {{ $attributes->merge(['class' => 'block font-semibold text-sm md:text-base lg:text-lg xl:text-xl text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
