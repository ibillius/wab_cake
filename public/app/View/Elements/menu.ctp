<?php $action = $this->params['pass'][0]; ?>
<ul class="menu">
  <li><a <?php $action === 'home' ? print 'class="selected"' : print "";?> href="home">Home</a></li>
  <li><a <?php $action === 'venue' ? print 'class="selected"' : print "";?> href="venue">Venue</a></li>
  <li><a <?php $action === 'registry' ? print 'class="selected"' : print "";?>  href="registry">Registry</a></li>
  <li><a <?php $action === 'accomodations' ? print 'class="selected"' : print "";?>  href="accomodations">Accomodations</a></li>
  <li><a <?php $action === 'gallery' ? print 'class="selected"' : print "";?> href="gallery">Gallery</a></li>
</ul>

