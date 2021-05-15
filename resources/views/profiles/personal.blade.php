<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Personal Infomation') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h2 class="p-6 bg-white border-b border-gray-200 font-bold">
                    Edit Personal Information.
                </h2>
            </div>
            {{-- <x-head-label for="name" :value="__('Display Name')" /> --}}
            {{-- @dd($personal->id) --}}
            <form class="" action="{{ route('personal.update', ['personal' => $personal->id]) }}"
                enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                {{-- Components form  Personal Information --}}
                <x-profile.form.personal></x-profile.form.personal>
                <div class="my-2 py-2 text-center">
                    <button type="submit"
                        class="p-3 bg-blue-300 shadow rounded-lg text-blue-800 border-2 border-blue-300 hover:bg-white hover:shadow-lg hover:rounded-xl">
                        Update
                    </button>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
