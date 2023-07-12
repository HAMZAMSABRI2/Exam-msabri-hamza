<x-app-layout>


    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col" class="px-6 py-3">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        author
                    </th>
                    <th scope="col" class="px-6 py-3">
                        published date
                    </th>

                    <th scope="col" class="px-6 py-3">
                        description
                    </th>

                    <th scope="col" class="px-6 py-3">
                        cover
                    </th>

                    <th scope="col" class="px-6 py-3">
                        date de création
                    </th>

                    <th scope="col" class="px-6 py-3">
                        date de modification
                    </th>

                    <th scope="col" class="px-6 py-3">
                        user
                    </th>
                    <th>
                    modifier
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $item)
                    
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->id}}
                    </th>
                    <td class="px-6 py-4">
                        {{$item->title}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->author}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->published_date}}
                    </td>
                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$item->description}}
                        
                    </td>
                    <td class="px-6 py-4">
                        <img src={{ asset($item->cover_image) }} class="w-20" alt="">
                    </td>
                    <td class="px-6 py-4">
                        {{$item->created_at->diffforhumans()}}
                    </td>
                    <td class="px-6 py-4">
                        {{$item->updated_at->diffforhumans()}}
                    </td>
                    
                    <td class="px-6 py-4">
                        {{$item->user->name}}
                    </td>
                    <td>
                        <a href="{{ route('book.edit',$item->id) }}">modify</a> 
                        <a href="{{ route('book.destroy',$item->id) }}">delete</a>
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
    

</x-app-layout>