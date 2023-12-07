<div>
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">username </th>
        <th class="text-center">phone_num </th>
        <th class="text-center">Email</th>
        <th class="text-center">usertype</th>

      </tr>
    </thead>
    <?php
    include 'C:\xampp\htdocs\Glintix_hrms\Registration (D)\connection1.php';
    $sql = "SELECT * FROM registration";
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
            <?= $row["username"] ?>
          </td>
          <td>
            <?= $row["phone_num"] ?>
          </td>
          <td>
            <?= $row["email"] ?>
          </td>
          <td>
            <?= $row["usertype"] ?>
          </td>

        </tr>
        <?php
        $count = $count + 1;

      }
    }
    ?>
  </table>