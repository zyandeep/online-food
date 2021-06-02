<!DOCTYPE html>
<html lang="en">

<head>

  <title>My Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
    body {
      background-image: url(<?= base_url('assets/img/food/pexels-photo-315755.jpeg') ?>);
      background-repeat: no-repeat;
      background-size: cover;
    }

    table,
    th,
    td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    .center tr:hover {
      background-color: #ddd;
    }

    .center th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #04AA6D;
      color: white;
    }

    .center {
      margin-left: auto;
      margin-right: auto;
    }

    .update {
      margin-left: 58rem;
    }
  </style>
</head>

<body>
  <h2 style="text-align: center;color:darkslategrey">Welcome to FoodPark <b><?= $this->session->userdata('name'); ?></b></h2>

  <table class="center">
    <tr>
      <th>Your Name </th>
      <td> <?= $this->session->userdata('name'); ?></td>


    </tr>

    <tr>
      <th>Your Customer ID </th>
      <td> <?= $this->session->userdata('customer_id'); ?></td>


    </tr>

    <tr>

      <th>Your Mobile No. </th>
      <td><?= $this->session->userdata('mobile'); ?></td>
    </tr>


    <th>Your Email </th>


    <td><?php foreach ($info as $infos) : ?>

        <?= $infos->email ?>

      <?php endforeach; ?></td>
    </tr>
    <th>Your Password </th>


    <td><?php foreach ($info as $infos) : ?>

        <?= $infos->password ?>

      <?php endforeach; ?></td>
    </tr>
    <th>Your Address </th>


    <td><?php foreach ($info as $infos) : ?>

        <?= $infos->address ?>

      <?php endforeach; ?></td>
    </tr>
  </table>
  <br>
  <a href="<?= base_url('update'); ?>" class="update">Update Details</a>
</body>

</html>