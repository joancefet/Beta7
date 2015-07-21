{block name="title" prepend}
{$LNG.siteTitleIndex}{/block}
{block name="content"}
<link rel="stylesheet" type="text/css" href="/styles/css/fb-traffic-pop.css">


<div id="content">
  <div id="right_side">
    <div class="right_menu">
      <h3>
        Categories
      </h3>
      <ul>
        <li>
          <a href="index.php?page=news&mode=notif">
            Notifications
          </a>
        </li>
        <li>
          <a href="index.php?page=news&mode=contest">
            Contests
          </a>
        </li>
        <li>
          <a href="index.php?page=news&mode=stock">
            Stock
          </a>
        </li>
        <li>
          <a href="index.php?page=news&mode=update">
            Updates
          </a>
        </li>
        <li>
          <a href="index.php?page=news&mode=all">
            All
          </a>
        </li>
      </ul>
    </div>
    <div class="related_articles">
      <h3>
        Latest News
      </h3>
      <div class="hr">
      </div>
      {foreach $newsList as $newsRow}
      <a href="index.php?page=news&id={$newsRow.id}">
        {$newsRow.title}
      </a>
      <div class="clear">
      </div>
      {foreachelse}
      <h1>
        {$LNG.news_does_not_exist}
      </h1>
      {/foreach}
    </div>
    <div class="forums">
      <h3>
        Latest Topics
      </h3>
      <div class="hr">
      </div>
      <a title="" href="forum" class="more" target="_blank">
        Go to the forum ...
      </a>
    </div>
  </div>
  <div class="conteiner">
    <div class="article">
      <div id="news">
        <h2>
          About {$gameName}
        </h2>
        <br/>
        <p align="justify">
          <span>
            Welcome to the {$gameName} game. Game speed will relax and enjoy the gameplay, and not long to wait for new developments in the gaming world. Fight with hundreds, or even thousands of players in the universe at the same time to get the title of Emperor and become the most experienced players in order to play this exciting and entertaining strategy you need to have an Internet browser. Try all the efforts to create a unique economic and military structure built on this and win new research Suck. Fight against other players and alliances. Create alliances and make alliances with other alliances.
          </span>
        </p>
        <p align="justify">
          &nbsp;
        </p>
        <p align="justify">
          The game begins with one small planet, which in the future will be the capital of the whole empire. For the development of the empire at your disposal will open new technology, new buildings, new ships and defense. In the game, there are several ways to develop Empire. The first way you can become a miner, send resources to all my friends. The second way to be a professional fighter, which produces resources with the help of its powerful fleet. The third way to be hired spy who has intelligence probes and undertakes any work.
        </p>
        <p align="justify">
          &nbsp;
        </p>
        <p align="justify">
          To survive in 
          <span>
            {$gameName}
          </span>
          have to simultaneously monitor the many things: develop construction empire build defense, constantly update the fleet, and all this under the supervision of aggressive neighbors. One to survive 
          <span>
            {$gameName}
          </span>
          &nbsp;extremely difficult. Not to die game you will have to join in alliances. Alliance has many of its advantages. for example, just so you can participate in interesting and top battles involving thousands and even millions of 
          <span>
            units
          </span>
          <span>
            &nbsp;
          </span>
          fleet.
        </p>
        <p align="justify">
          &nbsp;
        </p>
      </div>
    </div>
  </div>
  <div class="clear">
  </div>
</div>
{/block}
