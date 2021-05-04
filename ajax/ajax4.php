<?php
// Initialize the session
session_start();
 require '../config.php';
// Check if the user is already logged in, if yes then redirect him to welcome page
 
$query = "SELECT * FROM voting" ;
$hasil = query($query);
$hasil = carii($_SESSION["username"]);

header("Content-type: text/x-json");
json_encode($hasil);

 ?>

<div class="table100 ver4 m-b-110" >

          <div class="table100-head">

            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">ID</th>
                  <th class="cell100 column2">USERNAME</th>
                  <th class="cell100 column3">SELECTION 1</th>
                  <th class="cell100 column4">SELECTION 2</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="table100-body js-pscroll">

            <table>
                
              <tbody>
            

<?php foreach($hasil as $mhs):?>
   
                <tr class="row100 body">
                  <td class="cell100 column1"><?=$mhs["id"] ?></td>
                  <td class="cell100 column2"><?=$mhs["username"] ?></td>
                  <td class="cell100 column3">
                    <br><?=$mhs["pilihan"] ?></br>
                     <br><img src="img/<?=$mhs["gambar"] ?>" width="120"></br>
                     <br> <?=$mhs["jumlah"] ?></br>
                     <br><a href="update.php?id=<?=$mhs["id"] ?>" style="color: black">VOTE</a></br>
                  </td>
                  <td class="cell100 column4">
                    <br><?=$mhs["pilihann"] ?></br>
                    <br><img src="img/<?=$mhs["gambarr"] ?>" width="120"></br>
                     <br> <?=$mhs["jumlahh"] ?></br>
                    <br> <a href="updatee.php?type=article&id=<?=$mhs["id"];?>" style="color: black">VOTE</a></br>
                
                  </td>
               
                </tr>
        
<?php endforeach; ?>
 </tbody>
              
</table>
</div>
</div>
}