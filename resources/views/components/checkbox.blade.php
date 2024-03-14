@props([
    'id',
    'label',
    'checked',
])

<div class="flex items-center">
    <input id="{{ $id }}" type="checkbox" {{ $checked ? 'checked' : '' }} {{ $attributes->merge(['class' => 'w-4 h-4 text-indigo-600 bg-gray-100 border-gray-300 rounded focus:ring-indigo-500 focus:ring-2']) }}>
    <label for="{{ $id }}" class="ml-2 text-sm font-medium text-gray-900">{{ $label }}</label>
</div>