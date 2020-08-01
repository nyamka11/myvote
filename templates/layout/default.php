<!DOCTYPE html>
<html lang="mn">
  <head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Small Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <?= $this->Html->css('../vendor/bootstrap/css/bootstrap.min') ?>

    <!-- Custom styles for this template -->
    <?= $this->Html->css('small-business') ?>

    <?= $this->fetch('script') ?>
    <script>
    var rootData = {
      activeElection : <?= $activeElection ?>,
      rootPath : "<?= $this->Url->build("/", ['fullBase' => true]) ?>",
    }
    </script>
  </head>

  <body>
    <?= $this->element('navi') ?>
    <!-- Page Content -->
    <div class="container">
      <?= $this->fetch('content') ?>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <?= $this->Html->script('../vendor/jquery/jquery.min') ?>
    <?= $this->Html->script('../vendor/bootstrap/js/bootstrap.bundle.min') ?>
  </body>

</html>
