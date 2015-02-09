<section class="game">
  <h2 class="hidden">Le jeu du pendu</h2>
  <section class="game__reset">
    <h3 class="delta">Partie terminée&nbsp;!</h3>
    <?php if( $wordFind === true ): ?>
      <p>Félicitation, il s'agissait bien de <span class="hightlight"><?php echo( $word ) ?></span></p>
      <?php else: ?>
        <p>Désolé, mais le mot que vous cherchiez était <span class="hightlight"><?php echo( $word ) ?></span></p>
    <?php endif; ?>
    <a href="index.php" class="removeLink game__reset--button">Recommencez&nbsp;!</a>
  </section>
</section>
