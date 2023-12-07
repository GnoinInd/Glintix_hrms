<div>
  <h2>All Users</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">first_name </th>
        <th class="text-center">Last_name </th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">no_of_emp</th>
        <th class="text-center">state</th>
        <th class="text-center">designation</th>
        <th class="text-center">function</th>
      </tr>
    </thead>
    <?php
    include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';
    $sql = "SELECT * from demo_table";
    $result = $con->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
          <td>
            <?= $count ?>
          </td>
          <td>
            <?= $row["fname"] ?>
          </td>
          <td>
            <?= $row["lname"] ?>
          </td>
          <td>
            <?= $row["email"] ?>
          </td>
          <td>
            <?= $row["number"] ?>
          </td>
          <td>
            <?= $row["no_of_emp"] ?>
          </td>
          <td>
            <?= $row["state"] ?>
          </td>
          <td>
            <?= $row["designation"] ?>
          </td>
          <td>
            <?= $row["function"] ?>
          </td>
        </tr>
        <?php
        $count = $count + 1;

      }
    }
    ?>
  </table>