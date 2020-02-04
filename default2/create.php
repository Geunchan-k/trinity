<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>INSERT - Mom</title>
  </head>
  <body>
    <h1>INSERT - Mom's Properties</h1>
    <form action="process_create.php" method="POST">
      <table>
        <colgroup>
          <col width="50px">
          <col width="50px">
        </colgroup>
        <tr>
          <td>WHAT</td><td>INPUT</td>
        </tr>
        <tr>
          <td>name</td><td><input type="text" name="name" required></td>
        </tr>
        <tr>
          <td>phone</td><td><input type="text" name="phone" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}" required></td>
        </tr>
        <tr>
          <td>age</td><td><input type="date" name="birth" required></td>
        </tr>
        <tr>
          <td>hospitalized</td><td><input type="date" name="hospitalized"></td>
        </tr>
        <tr>
          <td>discharged</td><td><input type="date" name="discharged"></td>
        </tr>
      </table>
      <input type="submit" value="Create">
    </form>
  </body>
</html>
