<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
    <link rel="stylesheet" href="/css/output.css">
</head>
<body class="flex flex-col min-h-screen bg-gray-100">
    <!-- Header start -->
     <header class="bg-blue-500 text-white p-4">
        <div class="flex items-center justify-between container mx-auto px-4">
        <a class="font-bold" href="/students" class="text-2xl font-bold">Edit Siswa</a>
        <a class="py-2 px-4  bg-white text-blue-500 px-3 py-1 rounded-lg" href="/students/create" class="ml-4 bg-white text-blue-500 px-3 py-1 rounded">Tambah Siswa</a>
        </div>
    <!-- <! -- Header end -->

    <!-- Main  start -->
        <main class="flex-grow container mx-auto px-4 py-8">
            <Div class="mt-8 space-y-4">
                <!-- card header start -->
                 <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                    <h1 class="font-bold text-2xl">Edit Siswa</h1>
                    <P>Memperbarui informasi siswa</P>
                 </div>
                 <!-- card header end -->
                    <!-- card content start -->
                        <div class="bg-white shadow-md rounded-lg shadow-md p-6" action="">
                           <form action="/students" method="POST" class="space-y-4 grid grid-cols-2 gap-4">
                                <div>
                                    <label for="name" class="block text-sm font-Bold">Nama</label>
                                    <input type="text" name="name" id="name" class=" block w-full border border rounded-lg shadow-sm px-4 py-2" placeholder="Masukkan nama siswa">
                                </div>
                                <div>
                                    <label for="class" class="block text-sm font-Bold">Kelas</label>
                                    <input type="text" name="class" id="class" class=" block w-full border border rounded-lg shadow-sm px-4 py-2" placeholder="Masukkan kelas siswa">
                                </div>
                                <div>
                                    <label for="nis" class="block text-sm font-Bold">NIS</label>
                                    <input type="text" name="nis" id="nis" class=" block w-full border border rounded-lg shadow-sm px-4 py-2" placeholder="Masukkan NIS siswa">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-Bold">No Telp</label>
                                    <input type="text" name="phone" id="phone" class=" block w-full border border rounded-lg shadow-sm px-4 py-2" placeholder="Masukkan no telp siswa">
                                </div>
                                <div class="flex justify-end items-center gap-2">
                                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Simpan</button>
                                    <a href="/students" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Kembali</a>
                                </div>
                            
                            </form>
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