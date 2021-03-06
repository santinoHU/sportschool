<div class="jumbotron page_layout">
    <div class="container">
        <h1>Overzicht locaties</h1>
        <table class="table">
            <!-- Creates the tableheaders -->
            <tr>
                <th width="20%">Naam</th>
                <th width="40%">Straat</th>
                <th width="20%">Postcode</th>
                <th width="20%">Huisnummer</th>
            </tr>
            <?php
            // Retreives data from database
            $locations = Location::find();

            // Displays all sessions
            foreach($locations as $location)
            {
                echo '<tr><td>'.$location->getName().'</td>';
                echo '<td>'.$location->getStreet().'</td>';
                echo '<td>'.$location->getPostal_code().'</td>';
                echo '<td>'.$location->getHouse_number().'</td></tr>';
            } ?>
        </table>
    </div>
</div>
