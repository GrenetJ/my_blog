

<?php foreach ($articles as $article): ?>

      <a href="<?= $article->url ?>">
          <h2 class="post-title">
              <?= $article["title"]; ?>
          </h2>
          <h3 class="post-subtitle">
              <?= $article["content"]; ?>
          </h3>
      </a>
      <p class="post-meta">Posted by <a href="#"><?= $article["id_createur"]; ?></a> on <?= $article["date_creation"]; ?></p>
      </div>
      <hr>

<?php endforeach; ?>
