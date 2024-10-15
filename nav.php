<?php if (isset($_SESSION["user"])): ?>
    <nav>
        <div class="nav_row">
            <a href="index.php">Main page</a>
        </div>
        <div class="nav_row">
            <h4>Card index</h4>
            <?php if ($_SESSION["position"] === "moder" || $_SESSION["position"] === "admin"): ?>
                <a href="add_card_patient.php">Add patient</a>
            <?php endif; ?>
            <a href="patient_list.php">Patient list</a>
        </div>
        <?php if ($_SESSION["position"] === "moder" || $_SESSION["position"] === "admin"): ?>
            <div class="nav_row">
                <h4>Workers</h4>
                <a href="add_card_doctor.php">Add worker</a>
                <a href="doctor_list.php">Worker list</a>
                <?php if ($_SESSION["position"] === "admin"): ?>
                    <a href="moderator_list.php">Moderator list</a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <div class="nav_row">
            <h4>Appointments</h4>
            <?php if ($_SESSION["position"] === "moder" || $_SESSION["position"] === "admin"): ?>
                <a href="">Make appointment</a>
            <?php endif; ?>
            <a href="">Appointment list</a>
        </div>
        <?php if ($_SESSION["position"] === "admin"): ?>
            <div class="nav_row">
                <h4>Settings</h4>
                    <a href="doctor_positions.php">Doctor positions</a>
            </div>
        <?php endif; ?>
    </nav>
<?php endif; ?>

