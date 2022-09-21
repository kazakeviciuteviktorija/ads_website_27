<?php

declare(strict_types=1);

?>

<!DOCTYPE html>
<html>
<body style="max-width: 1200px; margin: auto">
<nav style="background: rgba(152,147,63,0.35); padding: 25px">
    <h2 style="display: flex; justify-content: space-around">
        <a href="/">Best ads website</a>
    </h2>
    <div style="display: flex; justify-content: space-around">
        <div>
            <a href="/">List ads</a>
        </div>
        <div>
            <a href="/">Login</a>
        </div>
        <div>
            <a href="/">Register</a>
        </div>
    </div>
</nav>
<div>
    <p>
    <h3><?php echo 'test'; ?></h3>
    <ul>
        <li>
            <?= 'test without echo' ?>
        </li>
        <li>
            Price: 1eur
        </li>
        <li>
            Kaunas
        </li>
        <li>
            Contact phone: +37013245678
        </li>
        <li>
            Created at: 2022-06-01 01:15
        </li>
    </ul>
    </p>
</div>
</body>
</html>