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
    <form action="<?php echo( $_SERVER['PHP_SELF']; ) ?>" method="post" class="form">
      <select name="tryLetter" class="form__select">
        <?php foreach( $letters as $letter => $status ): ?>
          <?php if( $status ): ?>
            <option value="<?php echo( $letter ); ?>"><?php echo( $letter ); ?></option>
          <?php endif; ?>
        <?php endforeach; ?>
      </select>
      <input type="hidden" name="iWord" value="<?php echo( $iWord ) ?>">
      <input type="hidden" name="try" value="<?php echo( $try ) ?>">
      <input type="hidden" name="wordFind" value="<?php echo( $wordFind ) ?>">
      <input type="hidden" name="tryLetters" value="<?php echo( $tryLetters ) ?>">
      <input type="hidden" name="serializeLetters" value="<?php echo( $serializeLetters ) ?>">
      <input type="hidden" name="chainReplace" value="<?php echo( $chainReplace ) ?>">
      <input type="hidden" name="gameStart" value="<?php echo( $gameStart ) ?>">
      <input type="hidden" name="gameOver" value="<?php echo( $gameOver ) ?>">
      <input type="submit" value="Essayer" class="form__submit">
    </form>
  </section>
  <?php if( !empty( $tryLetters ) ): ?>
    <section class="game--spacing game__uses">
      <h3 class="delta">Lettres déjà utilisées</h3>
        <?php for( $ml = 0; $ml < mb_strlen( $tryLetters ); $ml++ ): ?>
          <span class="game__uses--letter"><?php echo( $tryLetters[ $ml ] ); ?></span>
        <?php endfor; ?>
    </section>
  <?php endif; ?>
</section>
