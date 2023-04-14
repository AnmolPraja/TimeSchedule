<style>
  table {
    border-collapse: collapse;
    width: 100%;
  } 
  th, td {
    text-align: center;
    padding: 8px;
    border: 1px solid #ddd;
  } 
  th {
    background-color: #f2f2f2;
  }  
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Time Table</title>
  </head>
  <body>
    <form method="post" action="save_data.php">
      <table border="1px" cellspacing="0px" cellpadding="10px" align="center" id="timetable">
        <tr>
          <th></th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
          <th>Thursday</th>
          <th>Friday</th>
        </tr>
        <tr>
          <td>12 am</td>
          <td><input type="text" name="table[0]"></td>
          <td><input type="text" name="table[1]"></td>
          <td><input type="text" name="table[2]"></td>
          <td><input type="text" name="table[3]"></td>
          <td><input type="text" name="table[4]"></td>
        </tr>
        <tr>
          <td>2 am</td>
          <td><input type="text" name="table[5]"></td>
          <td><input type="text" name="table[6]"></td>
          <td><input type="text" name="table[7]"></td>
          <td><input type="text" name="table[8]"></td>
          <td><input type="text" name="table[9]"></td>
        </tr>
        <tr>
          <td>4 am</td>
          <td><input type="text" name="table[10]"></td>
          <td><input type="text" name="table[11]"></td>
          <td><input type="text" name="table[12]"></td>
          <td><input type="text" name="table[13]"></td>
          <td><input type="text" name="table[14]"></td>
        <tr>
          <td>6 am</td>
          <td><input type="text" name="table[15]"></td>
          <td><input type="text" name="table[16]"></td>
          <td><input type="text" name="table[17]"></td>
          <td><input type="text" name="table[18]"></td>
          <td><input type="text" name="table[19]"></td>
        </tr>
        <tr>
          <td>8 am</td>
          <td><input type="text" name="table[20]"></td>
          <td><input type="text" name="table[21]"></td>
          <td><input type="text" name="table[22]"></td>
          <td><input type="text" name="table[23]"></td>
          <td><input type="text" name="table[24]"></td>
        </tr>
        <tr>
          <td>10 am</td>
          <td><input type="text" name="table[25]"></td>
          <td><input type="text" name="table[26]"></td>
          <td><input type="text" name="table[27]"></td>
          <td><input type="text" name="table[28]"></td>
          <td><input type="text" name="table[29]"></td>
        </tr>
        <tr>
          <td>12 pm</td>
          <td><input type="text" name="table[30]"></td>
          <td><input type="text" name="table[31]"></td>
          <td><input type="text" name="table[32]"></td>
          <td><input type="text" name="table[33]"></td>
          <td><input type="text" name="table[34]"></td>
        </tr>
        <tr>
          <td>2 pm</td>
          <td><input type="text" name="table[35]"></td>
          <td><input type="text" name="table[36]"></td>
          <td><input type="text" name="table[37]"></td>
          <td><input type="text" name="table[38]"></td>
          <td><input type="text" name="table[39]"></td>
        </tr>
        <tr>
          <td>4 pm</td>
          <td><input type="text" name="table[40]"></td>
          <td><input type="text" name="table[41]"></td>
          <td><input type="text" name="table[42]"></td>
          <td><input type="text" name="table[43]"></td>
          <td><input type="text" name="table[44]"></td>
        </tr>
        <tr>
          <td>6 pm</td>
          <td><input type="text" name="table[45]"></td>
          <td><input type="text" name="table[46]"></td>
          <td><input type="text" name="table[47]"></td>
          <td><input type="text" name="table[48]"></td>
          <td><input type="text" name="table[49]"></td>
        </tr>
        <tr>
          <td>8 pm</td>
          <td><input type="text" name="table[50]"></td>
          <td><input type="text" name="table[51]"></td>
          <td><input type="text" name="table[52]"></td>
          <td><input type="text" name="table[53]"></td>
          <td><input type="text" name="table[54]"></td>
        </tr>
        <tr>
          <td>10 pm</td>
          <td><input type="text" name="table[55]"></td>
          <td><input type="text" name="table[56]"></td>
          <td><input type="text" name="table[57]"></td>
          <td><input type="text" name="table[58]"></td>
          <td><input type="text" name="table[59]"></td>
        </tr>
      </table>
    <input type="submit">
  </body>
</html>