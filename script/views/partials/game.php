c<section class="clearfix game">
  <h2 class="hidden">Le jeu du pendu</h2>
  <section class="game--spacing game__word">
    <h3 class="delta">Trouvez le mot secret, encore <?php echo( $stillTry ); ?>coups à jouer&nbsp;!</h3>
    <div class="game__word--center">
      <?php for( $l = 0; $l < mb_strlen( $chainReplace ); $l++ ): ?>
        <span class="game__word--align"><?php echo( $chainReplace[ $l ] ); ?></span>
      <?php endfor; ?>
    </div>
  </section>
  <section class="game--spacing game__play">
    <h3 class="delta">Choisissez une lettre</h3>
    <form action="index.php" method="post" class="form">
      <select name="lettreEssayee" class="form__select">
        <?php foreach( $letters as $letter => $status ): ?>
          <?php if( $status ): ?>
            <option value="<?php echo( $letter ); ?>"><?php echo( $letter ); ?></option>
          <?php endif; ?>
        <?php endforeach; ?>
      </select>
      <input type="hidden" name="chainReplace" value="<?php echo( $chainReplace ) ?>">
      <input type="submit" value="Essayer" class="form__submit">
    </form>
  </section>
  <?php if( !empty( $tryLetters ) ): ?>
    <section class="game--spacing game__uses">
      <h3 class="delta">Lettres déjà utilisées</h3>
        <?php foreach( $tryLetters as $letter ): ?>
          <span class="game__uses--letter"><?php echo( $letter ); ?></span>
        <?php endforeach; ?>
    </section>
  <?php endif; ?>
</section>
