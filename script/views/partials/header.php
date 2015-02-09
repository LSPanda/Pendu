<h1 class="hidden">Application écrite dans le cadre de mon cours de Programmation Web Côté Serveur</h1>
<header class="header">
  <section class="header__title">
    <h2 class="alpha"><?php echo( HEADING ); ?></h2>
  </section>
  <section class="header__img">
    <h2 class="hidden">Ou en êtes-vous dans le jeux&nbsp;?</h2>
    <div>
        <?php if( $wordFind === true ): ?>
          <img src="css/images/win.gif" alt="Ètape d'avancement dans le jeux du pendu" class="header__img--center">
          <?php else: ?>
            <img src="css/images/loose.gif" alt="Ètape d'avancement dans le jeux du pendu" class="header__img--center">
        <?php endif; ?>
    </div>
  </section>
</header>
