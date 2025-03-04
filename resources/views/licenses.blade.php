<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST LICENSES</title>

    <!-- Tailwind CSS via CDN (untuk pengembangan cepat, gunakan link CSS) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/3.1.2/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mx-auto p-4">

        <table id="export-table" class="min-w-full bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
            <thead>
                <tr>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                        <span class="flex items-center">
                            NO
                            <svg class="w-4 h-4 ms-1 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400"
                        data-type="date" data-format="YYYY/DD/MM">
                        <span class="flex items-center">
                            Nama Klien
                            <svg class="w-4 h-4 ms-1 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                        <span class="flex items-center">
                            Domain
                            <svg class="w-4 h-4 ms-1 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                        <span class="flex items-center">
                            License Key
                            <svg class="w-4 h-4 ms-1 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                        <span class="flex items-center">
                            Status
                            <svg class="w-4 h-4 ms-1 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th
                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-400">
                        <span class="flex items-center">
                            Action
                            <svg class="w-4 h-4 ms-1 text-gray-400 dark:text-gray-500" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($licenses as $license)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-800 cursor-pointer">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $license->client_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $license->domain }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $license->license_key }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $license->status }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/3.1.2/flowbite.min.js"></script>

    <!-- Hapus Material-Tailwind kecuali Anda benar-benar membutuhkannya -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script> -->
</body>

</html>
