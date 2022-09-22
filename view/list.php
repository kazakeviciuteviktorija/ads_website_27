<?php /** @var array $ads */
foreach ($ads as $ad): ?>
    <p>
    <h3><?= $ad['title'] ?></h3>
    <ul>
        <li>
            <?= $ad['description'] ?>
        </li>
        <li>
            Price: <?= $ad['price'] / 100 ?> eur
        </li>
        <li>
            City: <?= $ad['city'] ?>
        </li>
        <li>
            Contact phone: <?= $ad['phone_number'] ?>
        </li>
        <li>
            Created at: <?= $ad['created_at'] ?>
        </li>
        <li>
            Updated at: <?= $ad['updated_at'] ?>
        </li>
    </ul>
    </p>
<?php endforeach;?>