---
layout: page
title: "Kapcsolat"
meta_title: "Kapcsolat"
subheadline: 
teaser: "Írj nekünk bátran!"
permalink: "/contact/"
---

<!-- <div class="container">  
  <form id="contact" action="email-script.php" method="post" enctype="text/plain">   
    <fieldset>
      <input placeholder="Név" type="text" tabindex="1"  name="email" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="E-mail" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Üzenet" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Elküld</button>
    </fieldset>
    <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
  </form>
</div> -->

<form method="POST" action="email-script.php">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email" />
    <input type="submit" value="Ok" />
</form>