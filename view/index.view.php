<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!--  Bootstrap override-->
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <title><?=SITE_NAME?></title>
</head>
  <body>
    <table class="table">
      <thead class="thead-dark">
      <tr>
        <th scope="col">Class</th>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Exams Average</th>
        <th scope="col">Data formation date</th>
      </tr>
      </thead>
      <tbody>
      <?php foreach ($pupilsData["classes"] as $class => $pupilData):?>
      <tr>
        <th scope="row"><?=ucfirst($class)?></th>
        <?php foreach ($pupilData as $pupil => $data):?>
            <?php foreach ($data as $dataItem => $dataValue):?>
              <?php if ($dataItem != "exams"):?>
                <td><?=$dataValue?></td>
              <?php endif;?>
            <?php endforeach; ?>
        <?php endforeach;?>
      </tr>
      <?php endforeach;?>
      </tbody>
    </table>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
          crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
          integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
          integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
          crossorigin="anonymous"></script>

  </body>
</html>