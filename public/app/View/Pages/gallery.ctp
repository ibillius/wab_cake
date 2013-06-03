<!-- Gallery -->


<p class="description">
  Have a look at some of the happy memories we have shared!
  Click the thumbnail to view a large version of the picture.
  You can navigate the gallery by hovering your mouse cursor to
  the left or right and clicking the arrows or by using the arrow
  keys.  Press ESC or click outside of the picture area to close 
  the gallery.
</p>

<?php /*
<table style="margin-left: auto; margin-right: auto">
<tr>
<?php 
$dirf    = getcwd().'/img/gallery/thumbs';
$dir = scandir($dirf);
$count = 0;
foreach($dir as $file) {
   if(preg_match('/.*\.(jpg)/', $file) === 1) {
      $image = $this->Html->image("/img/gallery/thumbs/$file");
      $link = $this->Html->link($image, "/img/gallery/$file", array('rel'=>"lightbox[wab]", 'escape'=>FALSE));
      echo "<td>$link</td>";
      $count++;
      if($count%5 == 0)
        echo "</tr><tr>";
   }
}
?>
</table>
*/

?>
<table class="photo_gallery">
    <tbody>
      <tr>
        <td><a rel="lightbox[wab]" href=
        "/img/gallery/back_from_germany.jpg"
        title="Our first kiss after Will got back from Germany!" class="thumbnail"><img alt="" src=
        "/img/gallery/thumbs/back_from_germany.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/buzz_lightyear.jpg"
        title="Space Ranger training at Disneyland."><img alt="" src=
        "/img/gallery/thumbs/buzz_lightyear.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/cheesy_smile.jpg"
        title="Brenna looking stunning, Will looking goofy."><img alt="" src=
        "/img/gallery/thumbs/cheesy_smile.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/chocolate_affair.jpg"
        title="Out visit to the Cerreta's Chocolate in Will's hometown of Glendale during a chocolate festival."><img alt="" src=
        "/img/gallery/thumbs/chocolate_affair.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/creepy_face.jpg"
        title="Gwaaarrrgghhlllgh!"><img alt="" src=
        "/img/gallery/thumbs/creepy_face.jpg" /></a></td>
      </tr>

      <tr>
        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/cthulhu_deutschland.jpg"
        title="Us in Will's student housing in Germany with baby Cthulhu."><img alt="" src=
        "/img/gallery/thumbs/cthulhu_deutschland.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/dancing.jpg"
        title="Dancing the night away at a wedding."><img alt="" src=
        "/img/gallery/thumbs/dancing.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/dress_up.jpg"
        title="Playing dressup at the wedding."><img alt="" src=
        "/img/gallery/thumbs/dress_up.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/dress_up_2.jpg"
        title="&quot;Oh my!&quot; and &quot;Beware the eyebrow!&quot;"><img alt="" src=
        "/img/gallery/thumbs/dress_up_2.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/desert.jpg"
        title="Visiting the Desert Museum in Tucson"><img alt="" src=
        "/img/gallery/thumbs/desert.jpg" /></a></td>

      </tr>

      <tr>
        <td><a class="thumbnail" rel="lightbox[wab]" href="/img/gallery/fdr.jpg"
        title="Visiting FDR in DC."><img alt=
        "" src="/img/gallery/thumbs/fdr.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/green.jpg"
        title="Us at David and Holly's wedding!"><img alt="" src=
        "/img/gallery/thumbs/green.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/je_taime.jpg"
        title="A photobooth picture from Paris.  Unfortunately we didn't run into Amelie."><img alt="" src=
        "/img/gallery/thumbs/je_taime.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/louvre.jpg"
        title="Just hitting up the Louvre, no big deal."><img alt="" src=
        "/img/gallery/thumbs/louvre.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/milkshakes.jpg"
        title="Enjoying Silver Diner milkshakes in DC."><img alt="" src=
        "/img/gallery/thumbs/milkshakes.jpg" /></a></td>
      </tr>

      <tr>
        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/new_years.jpg"
        title="Our New Year's kiss!"><img alt="" src=
        "/img/gallery/thumbs/new_years.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/piper.jpg"
        title="Hanging out with our good friend Piper Lee."><img alt="" src=
        "/img/gallery/thumbs/piper.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/potomac.jpg"
        title="Us by the Potomac River."><img alt="" src=
        "/img/gallery/thumbs/potomac.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href="/img/gallery/tj.jpg"
        title="Us with our good friend TJ in DC."><img alt=""
        src="/img/gallery/thumbs/tj.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/wills_bday.jpg"
        title="Us together for Will's birthday."><img alt="" src=
        "/img/gallery/thumbs/wills_bday.jpg" /></a></td>

      </tr>

      <tr>
        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/ren_fair.jpg"
        title="The Maryland Renaissance Fair(e).  Boy, the dirndl is a good look for Will!">
        <img alt="" src="/img/gallery/thumbs/ren_fair.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/sleepy_time.jpg"
        title="Us having sleepy time with one of our cats, Carlotta."><img alt="" src=
        "/img/gallery/thumbs/sleepy_time.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/stalker.jpg"
        title="Brenna taking a picture of the hotel in Paris and Will being a stalker."><img alt="" src=
        "/img/gallery/thumbs/stalker.jpg" /></a></td>

                
        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/proposal_1.jpg"
        title="Will's proposal to Brenna via a Scrabble puzzle."><img alt="" src=
        "/img/gallery/thumbs/proposal_1.jpg" /></a></td>

        <td><a class="thumbnail" rel="lightbox[wab]" href=
        "/img/gallery/proposal_2.jpg"
        title="Will gave Brenna a box with the engagement ring and the letters needed to play either &quot;yes&quot; or &quot;no&quot;
        and was ever so glad when she played &quot;yes&quot;.">
        <img alt="" src="/img/gallery/thumbs/proposal_2.jpg" /></a></td>

      </tr>

      <tr>
        <td></td>
      </tr>
    </tbody>
  </table>
