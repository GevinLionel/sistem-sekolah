<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header start -->
     <header class="bg-blue-500 text-white p-4">
        <div class="flex items-center justify-between container mx-auto px-4">
        <a class="font-bold" href="/students" class="text-2xl font-bold">Daftar Siswa</a>
        <a class="py-2 px-4  bg-white text-blue-500 px-3 py-1 rounded-lg" href="/students/create" class="ml-4 bg-white text-blue-500 px-3 py-1 rounded">Tambah Siswa</a>
        </div>
    <!-- <! -- Header end -->

    <!-- Main  start -->
        <main class="flex-grow container mx-auto px-4 py-8">
            <Div class="mt-8>
                <!-- card header start -->
                 <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                    <h1 class="font-bold text-2xl">Daftar Siswa</h1>
                 </div>
                 <!-- card header end -->
                    <!-- card content start -->
                        <div class="bg-white shadow-md rounded-lg shadow-md p-6">
                            <table class="w-full bg-white shadow-md rounded-lg">
                                <thead class="bg-gray-200">
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Kelas</th>
                                        <th>NIS</th>
                                        <th>No telp</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Andi</td>
                                        <td>XI TKJ 1</td>
                                        <td>1234567890</td>
                                        <td>081234567890</td>
                                        <td>
                                            <div class="flex justify-center items-center">
                                            <a href="/students/1" class="text-Green-500">Detail</a>
                                            <a href="/students/1/edit" class="text-yellow-500 ml-2">Edit</a>
                                            <a href="/students/1/delete" class="text-red-500 ml-2">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    <!-- card content end -->
            </Div>
        </main>

    <!-- Main end -->

    <!-- Footer start -->
        <footer class="bg-gray-800 text-white text-center p-4 text-center">
            2026 - SMK Kristen Immanuel Pontianak - Sistem - Seoklah
        </footer>
    <!-- Footer end -->

   
    </header>
</body>
</html>