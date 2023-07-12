<x-app-layout>

    <div
        class="w-full m-auto mt-4 max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <form class="space-y-6" action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h5 class="text-xl font-medium text-gray-900 dark:text-white">voici le formulaire pour ajouter des livres
            </h5>
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    Title</label>
                <input type="text" name="title" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="la boite à merveilles">

                @error('title')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    author</label>
                <input type="text" name="author" id="author"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="Ahmed Sefrioui">

                @error('author')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="published_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Date de sortie
                </label>
                <input type="date" name="published_date" id="published_date"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">

                @error('published_date')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>


            <div>
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    description</label>
                <input type="text" name="description" id="description"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="">

                @error('description')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="cover_image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    cover image</label>
                <input type="file" name="cover_image" id="cover_image"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                    placeholder="la boite à merveilles" value="{{old('cover_image')}}">

                @error('cover_image')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit"
                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">

                AJouter votre article
            </button>

        </form>
    </div>

</x-app-layout>
