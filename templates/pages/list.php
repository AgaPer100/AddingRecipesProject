<div>
  <div class="message">
    <?php
    if (!empty($params['before'])) {
      switch ($params['before']) {
        case 'created':
          echo 'Przepis został utworzony !!!';
          break;
      }
    }
    ?>
  </div>

  <h4>lista przepisów</h4>
  <b><?php echo $params['resultList'] ?? "" ?></b>
</div>