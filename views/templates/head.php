<html lang="en">
  <head>
    <title>Civil War Map</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
  <div class='wrapper'>
    <nav class='navbar navbar-default'>
      <ul class='nav navbar-nav'>
        <?php foreach($battles as $battle): ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> 
              <?php echo $battle['name']; ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a <?php echo 'href="battle'. $battle['id'] . '" alt="' . $battle['name'] . '"';?>>
                  <?php echo $battle['name']; ?> webpage
                </a>
              </li>
              <li>
                <a <?php echo 'href="./rss/battle'. $battle['id'] . '" alt="' . $battle['name'] . '"';?>>
                  <?php echo $battle['name']; ?> RSS feed
                </a>
              </li>
              <li>
                <a <?php echo 'href="./'. str_replace(' ', '_', $battle['name']) . '" alt="' . $battle['name'] . '"';?>>
                  Battle data as JSON REST Service
                </a>
              </li>
              <li>
                <a <?php echo 'href="./battle'. $battle['id'] . '/people" alt="' . $battle['name'] . '"';?>>
                  Factions and People data as JSON REST Service
                </a>
              </li>
            </ul>
          </li>
        <?php endforeach; ?>
      </ul> 
    </nav>