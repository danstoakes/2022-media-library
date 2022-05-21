<div class="[ h-full flex flex-col overflow-hidden ]">
    <div class="[ flex justify-between items-center flex-row h-full w-full overflow-hidden ]">
        <div class="[ flex w-full h-full pt-4 flex-col ]">
            {{-- <h2 class="text-sm text-gray-600 font-regular pb-1">{{ $subtitle }}</h2> --}}
            <form class="flex flex-col" method="post" action="" enctype="multipart/form-data">
                <div class="flex justify-center items-center w-full">
                    <label for="dropzone-file" class="flex flex-col justify-center items-center w-full h-64 bg-gray-50 rounded-lg border-2 border-gray-300 border-dashed cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col justify-center items-center pt-5 pb-6">
                            <svg class="mb-3 w-10 h-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" />
                    </label>
                </div>
                <button class="pt-4 font-bold text-sm text-blue-500 hover:text-blue-800 inherit ml-auto justify-right" href="#">
                    Upload
                </button>
            </form>
    </div>
</div>