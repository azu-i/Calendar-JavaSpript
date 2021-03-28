<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <div class="list-plans">
      <div class="row">
        <table class="table">
            <tr>
              <th>予定名</th>
              <th>日程</th>
              <th>時間</th>
              <th></th>
            </tr>
          <tbody>
            <?php foreach ($plans as $plan) { var_dump($plan);?>
            <tr>
              <th><?php echo $plan['plan_name']?></th>
              <th><?php echo $plan['date'] ?></th>
              <th><?php echo $plan['time']  ?></th>
            </tr>
            <?php }; ?>
          </tbody>
        </table>
      </div>

  </body>

</html>