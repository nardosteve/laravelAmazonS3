<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Amazon S3 Upload</title>

    {{-- Tailwind CSS --}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

        <div class="w-full max-w-xs" style="margin:  15% 39%;">
            <form action="{{ route('image.store') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                
                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                    File
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="file" placeholder="Upload File">
                </div>

                <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Upload
                </button>
    
                </div>
            </form>

                <p class="text-center text-gray-500 text-xs">&copy;2021 Nardosteve. All rights reserved.</p>
        </div>

</body>
</html>