<section class="clearfix game">
  <h2 class="hidden">Le jeu du pendu</h2>
  <section class="game--spacing game__word">
    <h3 class="delta">Trouvez le mot secret&nbsp;!</h3>
    <div class="game__word--center"><span class="game__word--align">-</span><span class="game__word--align">-</span><span class="game__word--align">-</span><span class="game__word--align">-</span><span class="game__word--align">-</span>
    </div>
  </section>
  <section class="game--spacing game__play">
    <h3 class="delta">Choisissez une lettre</h3>
    <form action="index.php" method="post" class="form">
      <select name="lettreEssayee" class="form__select">
        <option value="a">a</option>
        <option value="b">b</option>
        <option value="c">c</option>
        <option value="d">d</option>
        <option value="e">e</option>
      </select>
      <input type="hidden" value="something">
      <input type="submit" value="Essayer" class="form__submit">
    </form>
  </section>
  <section class="game--spacing game__uses">
    <h3 class="delta">Lettres déjà utilisées    </h3><span class="game__uses--letter">a</span><span class="game__uses--letter">a</span><span class="game__uses--letter">a</span><span class="game__uses--letter">a</span><span class="game__uses--letter">a</span><span class="game__uses--letter">a</span><span class="game__uses--letter">a</span>
  </section>
</section>
