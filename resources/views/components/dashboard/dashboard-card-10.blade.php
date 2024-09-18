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
  
  $query = "select * from users";
  $result = mysqli_query($conn, $query);
  
?>
  
  <div class="col-span-full xl:col-span-6 bg-white dark:bg-slate-800 shadow-lg rounded-sm border border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Daftar Pengguna</h2>
    </header>
    <div class="p-3">
        
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <!-- Table header -->
                <thead class="text-xs font-semibold uppercase text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50">
                    <tr>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Avatar</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Nama</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Email</div>
                        </th>
                        <th class="p-2 whitespace-nowrap">
                            <div class="font-semibold text-left">Waktu Bergabung</div>
                        </th>
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm divide-y divide-slate-100 dark:divide-slate-700">
                    <tr>
                    <?php while($data = mysqli_fetch_assoc($result))
                    {
                        // $ndata = $data['profile_photo_path'];
                        // echo $ndata;
                    ?>
                        <td class="p-2 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3">
                                    <img class="rounded-full" src="{{ asset('images/'.Auth::user()->profile_photo_path)}}" width="40" height="40" alt="Alex Shatov" />
                                </div>
                                <!-- profile_photo_path -->
                            </div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500"><?= $data['name']; ?></div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left"><?php echo $data['email']; ?></div>
                        </td>
                        <td class="p-2 whitespace-nowrap">
                            <div class="text-left font-medium text-green-500"><?php echo $data['created_at']; ?></div>
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