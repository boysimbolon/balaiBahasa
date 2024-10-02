{{--@props(['value'])--}}

{{--<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>--}}
{{--    {{ $value ?? $slot }}--}}
{{--</label>--}}

@props(['for', 'value'])

<label for="{{ $for }}" class="block font-medium text-sm text-gray-700">
    {{ $value }}<span class="text-red-500">*</span>
</label>
