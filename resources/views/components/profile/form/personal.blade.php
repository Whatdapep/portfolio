<div class="py-3 my-3 bg-white rounded-lg shadow">
    <!-- He who is contented is rich. - Laozi -->
    <div class="grid grid-cols-12 gap-2">
        <div class="col-span-12 md:col-span-6 grid grid-cols-12 gap-2">
            <div class="mt-2 p-1 md:p-3 col-span-12 md:col-span-6">
                {{-- :value="__('First Name ')" --}}
                <x-profile.form.components.label for="first_name" class="flex">
                    First Name&nbsp;
                    <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
                </x-profile.form.components.label>
                <x-input id="first_name" class="block mt-1 w-full max-w-sm " type="text" name="first_name"
                    :value="$data->first_name" required />
            </div>
            <div class="mt-2 p-1 md:p-3 col-span-12 md:col-span-6">
                <x-profile.form.components.label for="last_name" class="flex">
                    Last Name&nbsp;
                    <x-icons.edit-icon class="w-5 h-5 text-gray-700" />
                </x-profile.form.components.label>
                <x-input id="last_name" class="block mt-1 w-full max-w-sm " type="text" name="last_name"
                    :value="$data->last_name" required />
            </div>
        </div>
        <div class="col-span-12 md:col-start-8 md:col-end-12">
              <x-profile.form.components.profile-picture-edit />
        </div>
    </div>
</div>
