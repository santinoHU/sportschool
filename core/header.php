<!-- navigation -->
<div class="nav-side-menu">
    <div class="brand"><img class="logo" src="assets/img/logo.jpg" alt="sportschool benno"/> </div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="?page=home">Home</a>
                </li>
            </ul>
            <ul id="menu-content" class="menu-content collapse out">

                <!-- Checks if user has a guest role -->
                <?php if($_SESSION['role'] == "guest") { ?>
    			<li>
    				<a href="?page=login">Inloggen</a>
    			</li>
    			<li>
    				<a href="?page=register">Registreren</a>
    			</li>
                <?php } else { ?>

                <!-- Checks if user has a user role -->
                <?php if($_SESSION['role'] == "user") { ?>
                <li>
    				<a href="?page=send-mail">Vraag om advies</a>
    			</li>
                <li>
    				<a href="?page=sportSessions">Sportstracking</a>
    			</li>
    			<?php } ?>

                <!-- Checks if user has an admin role -->
                <?php if($_SESSION['role'] == "admin") { ?>
                <li>
    				<a href="?page=allDevices">Overzicht apparaten</a>
    			</li>
    			<li>
    				<a href="?page=newLocation">Nieuwe locatie</a>
    			</li>
                <li>
    				<a href="?page=allLocations">Overzicht locaties</a>
    			</li>
                <li>
    				<a href="?page=allSportSessions">Overzicht sportsessies</a>
    			</li>
                <li>
    				<a href="?page=allAccounts">Overzicht klanten</a>
    			</li>
    			<?php } ?>

                <!-- Displays if not a guest -->
    			<li>
    				<a href="?page=account">Account</a>
    			</li>
                <?php $user = App::getUser();
                ?>
    			<li>
    				<a href="?page=logout">Bent u niet <?php echo ucfirst($user->getUsername());?>?<br>Klik <b>hier</b> om uit te loggen</a>
    			</li>
                <?php } ?>

            </ul>
     </div>
</div>
