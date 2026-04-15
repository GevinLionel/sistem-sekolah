<Div class="mt-8 space-y-4">
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
                                    <?php foreach ($students as $index => $student): ?>
                                        <tr>
                                        <td>
                                            <?php echo $index + 1; ?>
                                        </td>
                                        <td>
                                            <?php echo $student['name']; ?>
                                        </td>
                                        <td>
                                            <?php echo $student['class']; ?>
                                        </td>
                                        <td>
                                            <?php echo $student['nis']; ?>
                                        </td>
                                        <td>
                                            <?php echo $student['phone_number']; ?>
                                        </td>
                                        <td>
                                            <div class="flex justify-center items-center gap-2">
                                            <a href="/students/<?php echo $student['id']; ?>" class="text-Green-500">Detail</a>
                                            <a href="/students/<?php echo $student['id']; ?>/edit" class="text-yellow-500 ml-2">Edit</a>
                                            <a href="/students/<?php echo $student['id']; ?>/delete" class="text-red-500 ml-2">Hapus</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td>1</td>
                                        <td>Andi</td>
                                        <td>XI TKJ 1</td>
                                        <td>1234567890</td>
                                        <td>081234567890</td>
                                        <td>
                                            <div class="flex justify-center items-center gap-2">
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