{{-- @dump($sex,$value) --}}
<input type="radio" name="sex" {!! $attributes->merge(['class' => 'w-6 h-6 text-blue-600 rounded-full cursor-pointer']) !!} {{ $sex == $value ? 'checked' : '' }} />
