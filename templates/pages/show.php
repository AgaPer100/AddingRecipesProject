<div class="show">
  <?php $recipe = $params['recipe'] ?? null; ?>
  <?php if ($recipe) : ?>
    <ul>
      <li>Id: <?php echo $recipe['id'] ?></li>
      <li>Tytuł: <?php echo $recipe['title'] ?></li>
      <li>
        <pre><?php echo $recipe['description'] ?></pre>
      </li>
      <li>Zapisano: <?php echo $recipe['created'] ?></li>
    </ul>
  <?php else : ?>
    <div>Brak przepisu do wyświetlenia</div>
  <?php endif; ?>
  <a href="/">
    <button>Powrót do listy przepisów</button>
  </a>
</div>