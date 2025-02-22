<?php
#reda-prefo-php\view\expositionView.php
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
include "inc/metaIncView.php";
    ?>
    <title>Exposition</title>
  </head>
  <body>
    <nav>
    <?php
include "inc/navIncView.php";
  ?>
    </nav>
    <div class="header">
      <div class="top-content">
        <img
          src="./assets/wallpaperflare.com_wallpaper (2).jpg"
          class="img-bx"
        />
        <div class="text-content">
          <h2>Bienvenue à Bruxelles</h2>
        </div>
      </div>
      <div class="container">
        <div class="text-box" id="txt-left">
          <p>
            Nous avons été invités à participer à une exposition à
            <strong>Bruxelles</strong>.
            <br />
            <br />
            L'accueil a été chaleureux, et nous avons eu l'occasion de
            participer à un jeu de piste autour de la culture de
            <strong>Bruxelles</strong>.
            <br />
            Répartis en équipes de trois, nous devions répondre à différentes
            questions autour de <strong>Bruxelles</strong>. <br />
            <br />
            Dès le début de l’activité, cela m’a rappelé des moments passés lors
            de compétitions que j’ai eu la chance de vivre (ou pas) . Ces
            expériences ont marqué mon parcours et sont même devenues une source
            d’inspiration. Oui, une véritable source d’inspiration. Pour une
            fois, je ressentais que j’avais un rôle à jouer, que je pouvais être
            “<em>utile</em>”.
          </p>
        </div>
        <div class="text-box" id="txt-right">
          <p>
            Quand j’étais plus jeune, l’école n’était pas un endroit où je me
            sentais à ma place. J’avais du mal à m’intégrer socialement, et je
            passais beaucoup de temps seul. La première fois que j’ai toucher un
            pc je devais avoir 4 ans. <br />
            <br />
            J’ai découvert les jeux vidéo en regardant mon père jouer sur son
            ordinateur. Fasciné, je lui ai demandé de m’apprendre. C’est là que
            tout a commencé, avec un jeu en particulier :”<em>
              Counter-Strike: Source</em
            >
            ”.
          </p>
        </div>
      </div>
    </div>
    <div class="year">
      <div class="years">2008</div>
      <div class="years">2009</div>
      <div class="years">2010</div>
      <div class="years">2011</div>
    </div>
    <div class="containers">
      <div class="text-box" id="txt-year">
        <p>
          <span>Quelques années plus tard</span><span class="dot">..</span>
          <!-- Oui je sais c'est pas fou mais j'ai plus le temps la. -->
          <br />
          <br />
          <br />
          <br />
          <br />
          <br />
        </p>
      </div>
      <div class="text-box" id="txt-year-right">
        <p>
          J'ai reçu ma première console, une PS3. Je suis immédiatement tombé
          amoureux des jeux de type FPS (<em>First-Person Shooter</em>). En
          jouant, je me sentais enfin à l’aise, libre d’être moi-même. <br />
        </p>
      </div>
      <div class="text-box" id="txt-year">
        <p>
          Pourtant, cela n’a pas forcément amélioré ma vie sociale. <br />
          À l’extérieur, je restais isolé, mais dans ma chambre, avec ma
          console, j’étais une autre personne. J’avais l’impression d’avoir
          quelque chose de différent, une manière de penser unique, même si cela
          me rendait parfois incompris. Tandis que d’autres se faisaient des
          amis « <em>réels</em> », mes amitiés étaient virtuelles, mais elles me
          suffisaient.
        </p>
      </div>
    </div>
    <div class="year">
      <div class="years">2017</div>
      <div class="years">2018</div>
      <div class="years">2019</div>
      <div class="years">2020</div>
    </div>
    <div class="text-box" id="txt-bottom">
      <p>
        <span>J'ai alors 18 ans maintenant.</span>
        <br /><br /><br />
        j'ai monté mon premier PC. J'ai alors continué sur le jeu : ”
        <em>Rainbow Six Siege</em>”. Très rapidement, je me suis fait remarquer
        dans la communauté. <br />
        <br />
        Mon niveau était bon pour une personne qui venait d’arriver sur pc,
        malgré les heures de jeu bien inférieures aux autres. J’ai eu le droit à
        différentes réactions variées : certains m’accusaient de tricher,
        d’autres, même des joueurs professionnels, m’insultaient. Ou alors même
        j’ai été accusé de me faire passer pour une autre personne et que
        j’avais en fait déjà de l’expérience dans le domaine. <br />
        <br />
        Mais au-delà de ça j’ai toujours voulu prouver que j’avais bien ma
        place. Des personnes m’ont conseillé de faire de la compétition. Je
        n’avait jamais pensé ça possible, en plus pour ma famille c’était
        impensable de m’investir dans '<em> un jeu vidéo</em>'…
      </p>
    </div>

    <div class="the-card">
      <div class="game-content">
        <div class="blurr"></div>
        <div class="all-game">
          <img
            class="game"
            id="siege"
            src="./assets/rainbow-six-siege-logo.png"
            alt=""
            height="200px"
          />
          <img
            class="game"
            id="cod"
            src="./assets/Call_of_Duty_Modern_Warfare_Logo.png"
            alt=""
            height="100px"
          />
          <img
            class="game"
            id="apex"
            src="./assets/[CITYPNG.COM]HD Apex Legends Logo With Sign PNG - 4000x4000.png"
            alt=""
            height="200px"
          />
          <img
            class="game"
            id="cs"
            src="./assets/csgo.png"
            alt=""
            height="140px"
          />
        </div>
      </div>
      <div class="stats">
        <div class="stat-label">
          <div class="stat-title"><p>Temps de jeu :</p></div>
        </div>
        <p class="innerText"></p>
        <div class="progress-bar">
          <div class="progress-fill">
            <span class="progress-percentage">0%</span>
          </div>
        </div>
        <div class="stat-title"><p>Statistique :</p></div>
        <div class="circular-progress">
          <span class="circular-value">0 K/D</span>
          <svg>
            <circle cx="50" cy="50" r="45"></circle>
            <circle cx="50" cy="50" r="45" class="progress"></circle>
          </svg>
        </div>
        <div class="circular-progress">
          <span class="circular-value">0 W/L</span>
          <svg>
            <circle cx="50" cy="50" r="45"></circle>
            <circle
              cx="50"
              cy="50"
              r="45"
              class="progress wl-progress"
            ></circle>
          </svg>
        </div>
        <div class="stat-title"><p>Clips :</p></div>
        <div class="video-container">
          <video id="game-video" width="400" autoplay loop muted>
            <source src="" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
    <div class="text-box" id="txt-bottom">
      <p>
        Je me suis alors écouté et me suis dit : "<em
          ><span class="clr">pourquoi ne pas essayer</span></em
        >",<br />
        juste pour voir ? J’ai trouvé ma première équipe, et c’est à ce
        moment-là que j’ai compris que c’était vraiment sérieux. On ne joue plus
        seulement pour soi, mais aussi pour une équipe et une structure. C’était
        la première fois que j’avais autant de responsabilités.
      </p>
    </div>

    <div class="slider">
      <div class="slider-item">
        <img class="slider-img" src="./assets/groupe.jpeg" alt="" />
        <img class="slider-img" src="./assets/lan-drapeau.jpeg" alt="" />
        <img class="slider-img" src="./assets/lan-groupe.jpeg" alt="" />
        <img class="slider-img" src="./assets/groupe.jpeg" alt="" />
        <img class="slider-img" src="./assets/lan-drapeau.jpeg" alt="" />
        <img class="slider-img" src="./assets/lan-groupe.jpeg" alt="" />
        <img class="slider-img" src="./assets/groupe.jpeg" alt="" />
        <img class="slider-img" src="./assets/lan-drapeau.jpeg" alt="" />
        <img class="slider-img" src="./assets/lan-groupe.jpeg" alt="" />
      </div>
    </div>
    <div class="text-box" id="txt-bottom" style="text-align: center">
      <p>
        J’ai continué à intégrer des équipes de plus en plus importantes,
        jusqu’à rejoindre cette fameuse équipe avec laquelle j’allais jouer ma
        première ligue nationale, la “<span style="color: rgb(53, 52, 52)"
          >Be</span
        ><span style="color: yellow">ne</span
        ><span style="color: red">lux</span>”. Les enjeux n’étaient plus les
        mêmes : nous étions suivis par un coach, un analyste et un manager.
        C’est également à ce moment-là que l’idée de contrats rémunérés a
        commencé à se concrétiser, à condition que nous nous qualifiions.
      </p>
    </div>

    <div class="three-txt">
      <div class="train-txt" id="txt-1">
        <p>
          Nous nous sommes entraînés pendant un an, tous les jours, avec des
          sessions intensives le week-end de 13h à 23h. Je n’avais plus de vie
          sociale, même avec ma famille. Je refusais toutes les sorties qu’on me
          proposait pour me consacrer à l’entraînement.
        </p>
      </div>
      <div class="train-txt" id="txt-2">
        <p>
          Finalement, nous avons réussi à nous qualifier, ce qui a changé le
          regard des autres sur moi. J’avais enfin prouvé que j’avais ma place.
        </p>
      </div>
      <div class="train-txt" id="txt-3">
        <p>
          C’est à partir de ce moment-là que j’ai commencé à construire mon nom.
          J’ai ensuite joué à l’international, cette fois-ci dans une équipe
          allemande ou même mixte avec des joueurs Hongrois, Suédois,
          Autrichiens, etc.
        </p>
      </div>
    </div>
    <div class="year">
      <div class="years">2021</div>
      <div class="years">2022</div>
      <div class="years">2023</div>
      <div class="years">2024</div>
    </div>

    <div class="text-box" id="txt-bottom">
      <p>
        Mais malgré toute cette aventure, j’ai dû me rendre à l’évidence : les
        salaires, quand il y en avait, n’étaient pas suffisants pour vivre. J’ai
        donc pris la décision d’arrêter complètement la compétition. Cependant,
        j’ai toujours la même ambition envers moi-même : <br />
        <br />
        <span> je veux être le meilleur dans tout ce que j’entreprends</span>.
      </p>
    </div>

    <div class="top">
      <a href="#top">Haut de la page.</a>
    </div>

    <footer><?php
include "inc/footerIncView.php";
       ?></footer>
    <script src="./script/script.js"></script>
  </body>
</html>
