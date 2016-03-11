<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
table, tr, td {
  border-collapse: collapse;
  border: 1px solid gray;
}
  </style>
</head>
<body>
  <table>
      <?php for ($i = 0; $i < 8; $i++): ?>
      <tr>
          <?php for ($j = 0; $j < 8; $j++): ?>
              <td><?php print (($i + $j) % 2) ? "X" : ""; ?></td>
          <?php endfor; ?>
      </tr>
      <?php endfor; ?>
  </table>
</body>
</html>
