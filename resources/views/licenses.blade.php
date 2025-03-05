<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST LICENSES</title>

    <!-- Tailwind CSS via CDN (untuk pengembangan cepat, gunakan link CSS) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/3.1.2/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container mx-auto p-4">
        <div>
            <h2>LIST LISENSI WEB KLIEN</h2>
        </div>
        <div>
            <table id="export-table"
                class="min-w-full bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
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
                                <a href="javascript:void(0)"
                                    onclick="edit('<?= $license->id ?>','<?= $license->status ?>')"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    data-bs-toggle="modal" data-bs-target="#EditModal">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <form method="post" action="<?= url('licenses-view/ubah-status') ?>">
            @csrf
            <div class="modal fade" id="EditModal" tabindex="-1" aria-labelledby="EditModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="EditModalLabel">Ubah Status Domain {{ $license->domain }}
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" name="id" value="{{ $license->id }}" id="editCategoryId">
                            <select class="form-select" aria-label="Default select example" name="status"
                                id="editCategoryStatus" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                                <option value="expired">Expired</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/3.1.2/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <!-- Hapus Material-Tailwind kecuali Anda benar-benar membutuhkannya -->
    <!-- <link rel="stylesheet" href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css" />
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script> -->

    <script>
        function edit(id, status) {
            $("#editCategoryId").val(id)
            $("#editCategoryStatus").val(status)
        }
    </script>
    </script>
</body>

</html>
