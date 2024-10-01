<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "datakapal";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $databasename
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "select * from schedules where posisi_tambat = 'Pel Selayar'";
$result = mysqli_query($conn, $query);

?>

<div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Lalu Lintas Kapal</h2>
    </header>
    <div class="p-3">

        <!-- Card content -->
        <!-- "Today" group -->
        <div>
            <header class="text-lg uppercase text-slate-400 dark:text-slate-300 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm font-semibold p-2 text-center">Pelabuhan Selayar</header>
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="table-auto w-full">
                    <!-- Table header -->
                    <thead class="text-xs font-semibold uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50">
                        <tr>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-left">Nama Kapal</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Tanggal Tiba</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-center">Rencana Berangkat</div>
                            </th>
                            <th class="p-2 whitespace-nowrap">
                                <div class="font-semibold text-right">Tujuan</div>
                            </th>
                        </tr>
                    </thead>
                    <!-- Table body -->
                    <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                        <tr>
                            <?php while ($data = mysqli_fetch_assoc($result)) {
                            ?>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500"><?= $data['nama_kapal']; ?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center"><?php echo $data['tanggal_tiba']; ?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-center font-medium "><?php echo $data['tanggal_rencana_berangkat']; ?></div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-right text-green-500"><?php echo $data['tujuan']; ?></div>
                                </td>
                        </tr>
                    <?php }
                            $conn->close();
                    ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>