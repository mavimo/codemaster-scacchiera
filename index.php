<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
table, tr, td {
  border-collapse: collapse;
  border: 1px solid blue;
  background-color: green;
  color: white;
}
  </style>
</head>
<body>
  <table>
      <?php for ($i = 0; $i < 8; $i++): ?>
      <tr>
          <?php for ($k = 0; $k < 8; $k++): ?>
              <td><?php print (($i + $k) % 2) ? "X" : ""; ?></td>
          <?php endfor; ?>
      </tr>
      <?php endfor; ?>
  </table>
</body>
</html>
