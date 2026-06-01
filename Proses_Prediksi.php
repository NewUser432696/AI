<th>Label</th>
<th>Jarak</th>

</tr>

<?php

$no = 1;

foreach($tetangga as $t){

?>

<tr>

<td><?= $no++; ?></td>

<td><?= $t['nama']; ?></td>

<td><?= $t['label']; ?></td>

<td><?= round($t['jarak'],2); ?></td>

</tr>

<?php } ?>

</table>

<br>

<a href="input_data.php" class="btn">

Kembali Input

</a>

<a href="hasil_prediksi.php" class="btn">

Lihat Semua Hasil

</a>

</div>

</body>
</html>
