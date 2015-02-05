<div id="map-canvas"></div>
<?php foreach($battles as $battle):?>
  <div>
   <h2><?php echo $battle['name']; ?></h2>
   <p><?php echo $battle['location']; ?></p>
   <p><?php echo $battle['outcome']; ?></p>
  </div>
<?php endforeach; ?>