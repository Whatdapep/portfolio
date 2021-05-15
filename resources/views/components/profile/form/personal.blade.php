<div class="py-3 my-3 bg-white rounded-lg shadow">
    <!-- He who is contented is rich. - Laozi -->
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 gap-2">
            <div class="mt-2 p-1 md:p-3 col-span-12 md:col-span-6">
                <x-profile.form.components.label for="first_name" class="flex">
                    First Name&nbsp;
                    <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
                </x-profile.form.components.label>
                <x-input id="first_name" class="block mt-1 w-full max-w-sm " type="text" name="first_name"
                    :value="$data->first_name" />
            </div>
            <div class="mt-2 p-1 md:p-3 col-span-12 md:col-span-6">
                <x-profile.form.components.label for="last_name" class="flex">
                    Last Name&nbsp;
                    <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
                </x-profile.form.components.label>
                <x-input id="last_name" class="block mt-1 w-full max-w-sm " type="text" name="last_name"
                    :value="$data->last_name" />
            </div>
            <div class="mt-2 p-1 md:p-3 col-span-12 md:col-span-6">
                <x-profile.form.components.label for="phone_no" class="flex">
                    Tel&nbsp;
                    <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
                </x-profile.form.components.label>
                <x-input id="phone_no" class="block mt-1 w-full max-w-sm " type="text" name="phone_no"
                    :value="$data->phone_no" />
            </div>
            <div class="mt-2 p-1 md:p-3 col-span-12 md:col-span-6">
                <x-profile.form.components.label for="date_of_birth" class="flex">
                    Date Of Birth&nbsp;
                    <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
                </x-profile.form.components.label>
                <x-input id="date_of_birth" class="block mt-1 w-full max-w-sm " type="text" name="date_of_birth"
                    :value="$data->date_of_birth" />
            </div>
            <div class="mt-2 p-1 md:p-3 col-span-12 md:col-span-6">
                <x-profile.form.components.label for="sex" class="flex">
                    Sex&nbsp;
                    <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
                </x-profile.form.components.label>
                <div class="flex">
                    <x-profile.form.components.label for="sex" class="flex">
                        Male&nbsp;
                    </x-profile.form.components.label>
                    <x-profile.form.components.input-radio value="m" :sex="$data->sex" />
                    &nbsp;&nbsp;&nbsp;
                    {{-- <input type="radio" name="sex" value="w" {{ $data->sex == 'm' ?? 'checked' }} /> --}}
                    <x-profile.form.components.label for="sex" class="flex">
                        Woman&nbsp;
                    </x-profile.form.components.label>
                    <x-profile.form.components.input-radio value="w" :sex="$data->sex" />
                </div>
            </div>


        </div>
        <div class="col-span-12 md:col-start-8 md:col-end-12">
            <x-profile.form.components.profile-picture-edit />
        </div>

        <div class="mt-2 p-1 md:p-3 col-span-12 md:col-span-12">
            <x-profile.form.components.label for="phone_no" class="flex">
                Personal Summary&nbsp;
                <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
            </x-profile.form.components.label>
            <textarea id="personal_summary" name="personal_summary" rows="12"
                class="rounded-lg border-2 text-gray-600 p-3 my-2">
                @if (!empty($data->personal_summary))
                {!! $data->personal_summary !!}
                @endif
            </textarea>

        </div>

        <div class="mt-2 p-1 md:p-3 col-span-12 ">
            <x-profile.form.components.label for="" class="flex">
                Social&nbsp;(Optional)&nbsp;
                <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
            </x-profile.form.components.label>
            <div class="grid grid-cols-12 gap-2">
                {{-- website --}}
                <div class="md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="flex">
                        <div class="my-auto mx-2">
                            <label for="website" class="">
                                <x-icons.website-globe class="w-8 h-8 text-gray-900" />
                            </label>
                        </div>
                        <x-input id="website" class="block mt-1 w-full max-w-sm" placeholder="link" type="text"
                            name="website" :value="$data->website" />
                    </div>
                </div>
                {{-- facebook --}}
                <div class="md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="flex">
                        <div class="my-auto mx-2">
                            <label for="facebook" class="">
                                <i class="fab fa-facebook fa-2x text-blue-600"></i>
                                {{-- <x-icons.facebook-globe class="w-5 h-5 text-gray-900" /> --}}
                            </label>
                        </div>
                        <x-input id="facebook" class="block mt-1 w-full max-w-sm" placeholder="link" type="text"
                            name="facebook" :value="$data->facebook" />
                    </div>
                </div>
                {{-- twitter --}}
                <div class="md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="flex">
                        <div class="my-auto mx-2">
                            <label for="twitter" class="w-5 h-5 rounded-xl p-1 bg-blue-500">
                                <i class="fab fa-twitter text-base  text-white"></i>
                                {{-- <x-icons.twitter-globe class="w-5 h-5 text-gray-900" /> --}}
                            </label>
                        </div>
                        <x-input id="twitter" class="block mt-1 w-full max-w-sm" placeholder="link" type="text"
                            name="twitter" :value="$data->twitter" />
                    </div>
                </div>
                {{-- instagram --}}
                <div class="md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="flex">
                        <div class="my-auto mx-2">
                            <label for="instagram" class="">
                                <i class="fab fa-instagram fa-2x text-pink-700"></i>
                                {{-- <x-icons.instagram-globe class="w-5 h-5 text-gray-900" /> --}}
                            </label>
                        </div>
                        <x-input id="instagram" class="block mt-1 w-full max-w-sm" placeholder="link" type="text"
                            name="instagram" :value="$data->instagram" />
                    </div>
                </div>
                {{-- github --}}
                <div class="md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="flex">
                        <div class="my-auto mx-2">
                            <label for="github" class="">
                                <i class="fab fa-github fa-2x text-gray-900"></i>
                                {{-- <x-icons.github-globe class="w-5 h-5 text-gray-900" /> --}}
                            </label>
                        </div>
                        <x-input id="github" class="block mt-1 w-full max-w-sm" placeholder="link" type="text"
                            name="github" :value="$data->github" />
                    </div>
                </div>
                {{-- line --}}
                <div class="md:col-span-6 lg:col-span-4 xl:col-span-3">
                    <div class="flex">
                        <div class="my-auto mx-2">
                            <label for="line" class="">
                                <i class="fab fa-line fa-2x text-green-700"></i>
                                {{-- <x-icons.line-globe class="w-5 h-5 text-gray-900" /> --}}
                            </label>
                        </div>
                        <x-input id="line" class="block mt-1 w-full max-w-sm" placeholder="link" type="text" name="line"
                            :value="$data->line" />
                    </div>
                </div>
            </div>

        </div>
    </div>
    @push('css')
        <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet"
            type="text/css" />

    @endpush
    @push('scripts')
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@3.1.0/js/froala_editor.pkgd.min.js">
        </script>

        <script>
            new FroalaEditor('#personal_summary', {
                toolbarBottom: true,
                charCounterCount: true,
                toolbarButtons: {
                    'moreText': {
                        'buttons': ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript',
                            'fontFamily', 'fontSize', 'textColor', 'backgroundColor', 'inlineClass',
                            'inlineStyle',
                            'clearFormatting'
                        ]
                    },
                    'moreParagraph': {
                        'buttons': ['alignLeft', 'alignCenter', 'formatOLSimple', 'alignRight', 'alignJustify',
                            'formatOL', 'formatUL', 'paragraphFormat', 'paragraphStyle', 'lineHeight',
                            'outdent',
                            'indent', 'quote'
                        ]
                    },
                    'moreRich': {
                        'buttons': ['insertLink', 'insertImage', 'insertTable', 'emoticons',
                            'fontAwesome', 'specialCharacters', 'embedly', 'insertFile', 'insertHR'
                        ]
                    },
                    'moreMisc': {
                        'buttons': ['undo', 'redo', 'print', 'getPDF', 'spellChecker', 'selectAll',
                            'html', 'help'
                        ]
                    }
                },

                // Change buttons for XS screen.
                toolbarButtonsXS: [
                    ['undo', 'redo'],
                    ['bold', 'italic', 'underline']
                ]
            });

        </script>
    @endpush
