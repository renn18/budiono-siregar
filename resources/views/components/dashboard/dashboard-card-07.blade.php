<?php 
  
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $databasename = "datakapal"; 
  
  $conn = mysqli_connect($servername,  
    $username, $password, $databasename); 
  
  if (!$conn) { 
      die("Connection failed: " . mysqli_connect_error()); 
  } 
  
  $query = "select * from schedules";
  $result = mysqli_query($conn, $query);
  $count=1;
?>

<div class="col-span-full xl:col-span-8 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Penjadwalan Terkini</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full dark:text-slate-300">


            

                <!-- Table header -->
                <thead class="text-xs uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50 rounded-sm">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">No.</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Nama Kapal</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Tanggal Tiba</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Tiba Dari</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Tujuan</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-left">Tanggal Rencana Berangkat</div>
                        </th>
                    </tr>
                    <tr>
                    </thead>
                    <?php while($data = mysqli_fetch_assoc($result))
                    {
                    ?>
                        <td class="p-2">
                            <div class="flex items-center">
                                <div class="text-slate-800 dark:text-slate-100"><?php  echo $count++; ?></div>
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="flex items-center">
                                <div class="text-slate-800 dark:text-slate-100"><?php echo $data['nama_kapal']; ?></div>
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="text-left text-emerald-500"><?php echo $data['tanggal_tiba']; ?></div>
                        </td>
                        <td class="p-2">
                            <div class="text-left"><?php echo $data['tiba_dari']; ?></div>
                        </td>
                        <td class="p-2">
                            <div class="text-left"><?php echo $data['tujuan']; ?></div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-sky-500"><?php echo $data['tanggal_rencana_berangkat']; ?></div>
                        </td>
                    </tr>
                    <?php 
                }
                $conn->close();
                ?>
                    
                </tbody>
                
                

            </table>

        </div>
    </div>
</div>

<?php

?>