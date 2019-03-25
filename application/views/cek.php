<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cek</title>
  </head>
  <body>
    cek
    <table>

    <tr>
      <td>Nama Admin</td>
      <td>No Telp</td>
      <td>Username</td>

    </tr>
    <?php foreach ($show as $d) {?>
    <tr>
      <td>$d->nama_admin</td>
      <td>$d->no_telp_admin</td>
      <td>$d->username_admin</td>
    </tr>
  <?php } ?>
</table>
  </body>
</html>
