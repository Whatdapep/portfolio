<div class="mx-auto text-center ">
    <div class="w-28 h-28 md:w-36 md:h-36 lg:w-72 lg:h-72 xl:w-72 xl:h-72 rounded-full border-2 border-gray-400 bg-cover bg-center bg-no-repeat
    flex justify-center mx-auto
    "
        style="background-image: url(https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png)">
    </div>

    <div class="my-2 py-2 text-center mx-auto flex justify-center">
        <label class="cursor-pointer text-gray-700 font-medium text-sm md:text-base lg:text-lg text-center flex p-2 border-4 border-blue-300 hover:bg-blue-300
            group shadow outline-none hover:outline-none
             rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8  text-gray-700" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
            </svg>&nbsp;
            Change Profile Image
            <input type='file' onchange="OnchangeUpdateProfileImage(event)" class="hidden" name="personal_pictures"
                id="personal_pictures" />
        </label>
        {{-- onchange="document.getElementById('showpicturepath').innerHTML=this.value" --}}
        <div class="" id="showpicturepath">

        </div>
    </div>
</div>



<script>
    let OnchangeUpdateProfileImage = async (data) => {
        data.preventDefault();
        // console.log(data.target.files[0]);
        let file = data.target.files[0];
        const isImage = file.type.match("image.*"),
            objectURL = URL.createObjectURL(file);

        console.log(isImage)

    }
    // document.getElementById("showpicturepath").innerHTML = document.getElementById("personal_pictures").value;

</script>
