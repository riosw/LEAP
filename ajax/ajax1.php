<?php 
require '../config.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM users WHERE
 id LIKE '$keyword' OR
 username LIKE '%$keyword%' OR
 poin LIKE '$keyword'
 " ;
$hasil = query($query);

 ?>

 <div class="table100 ver3 m-b-110">

          <div class="table100-head">
            <table>
              <thead>
                <tr class="row100 head">
                  <th class="cell100 column1">ID</th>
                  <th class="cell100 column2">USERNAME</th>
                  <th class="cell100 column3">PASSWORD</th>
                  <th class="cell100 column4">POIN</th>
                  <th class="cell100 column5">PIC</th>
                  <th class="cell100 column6">ACTION</th>
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
                  <td class="cell100 column3"><?=$mhs["password"] ?></td>
                  <td class="cell100 column4"><?=$mhs["Poin"] ?></td>
                  <td class="cell100 column5"><img src="img/<?=$mhs["photo"] ?>" width="50"></td>
                  <td class="cell100 column6"><a href="hapus.php?id=<?=$mhs["id"] ?>" style="color: white">DELETE</a></td>
                </tr>
<?php endforeach; ?>
                            </tbody>
              
            </table>
          
                
          </div>
        </div>