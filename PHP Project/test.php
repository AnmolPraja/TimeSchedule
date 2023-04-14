<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Time Table</title>
  </head>
  <body>
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
        <td>2 am</td>
        <td id="2am-Monday"></td>
        <td id="2am-Tuesday"></td>
        <td id="2am-Wednesday"></td>
        <td id="2am-Thursday"></td>
        <td id="2am-Friday"></td>
      </tr>
      <tr>
        <td>4 am</td>
        <td id="4am-Monday"></td>
        <td id="4am-Tuesday"></td>
        <td id="4am-Wednesday"></td>
        <td id="4am-Thursday"></td>
        <td id="4am-Friday"></td>
      </tr>
      <tr>
        <td>6 am</td>
        <td id="6am-Monday"></td>
        <td id="6am-Tuesday"></td>
        <td id="6am-Wednesday"></td>
        <td id="6am-Thursday"></td>
        <td id="6am-Friday"></td>
      </tr>
      <td>8 am</td>
        <td id="8am-Monday"></td>
        <td id="8am-Tuesday"></td>
        <td id="8am-Wednesday"></td>
        <td id="8am-Thursday"></td>
        <td id="8am-Friday"></td>
      </tr>
      <td>10 am</td>
        <td id="10am-Monday"></td>
        <td id="10am-Tuesday"></td>
        <td id="10am-Wednesday"></td>
        <td id="10am-Thursday"></td>
        <td id="10am-Friday"></td>
      </tr>
      <td>12 pm</td>
        <td id="12pm-Monday"></td>
        <td id="12pm-Tuesday"></td>
        <td id="12pm-Wednesday"></td>
        <td id="12pm-Thursday"></td>
        <td id="12pm-Friday"></td>
      </tr>
      <td>2 pm</td>
        <td id="2pm-Monday"></td>
        <td id="2pm-Tuesday"></td>
        <td id="2pm-Wednesday"></td>
        <td id="2pm-Thursday"></td>
        <td id="2pm-Friday"></td>
      </tr>
      <td>4 am</td>
        <td id="4pm-Monday"></td>
        <td id="4pm-Tuesday"></td>
        <td id="4pm-Wednesday"></td>
        <td id="4pm-Thursday"></td>
        <td id="4pm-Friday"></td>
      </tr>
      <td>6 pm</td>
        <td id="6pm-Monday"></td>
        <td id="6pm-Tuesday"></td>
        <td id="6pm-Wednesday"></td>
        <td id="6pm-Thursday"></td>
        <td id="6pm-Friday"></td>
      </tr>
      <td>10 am</td>
        <td id="10pm-Monday"></td>
        <td id="10pm-Tuesday"></td>
        <td id="10pm-Wednesday"></td>
        <td id="10pm-Thursday"></td>
        <td id="10pm-Friday"></td>
      </tr>
      <td>12 am</td>
        <td id="12am-Monday"></td>
        <td id="12am-Tuesday"></td>
        <td id="12am-Wednesday"></td>
        <td id="12am-Thursday"></td>
        <td id="12am-Friday"></td>
      </tr>
    </table>
    
    <script>
      const cells = document.querySelectorAll('#timetable td');
      cells.forEach(cell => {
        cell.addEventListener('click', () => {
          const value = prompt('Enter a value for this cell:');
          cell.textContent = value;
        });
      });
    </script>
  </body>
</html>
