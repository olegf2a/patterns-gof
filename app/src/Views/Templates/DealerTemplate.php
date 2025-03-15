<?php
/** @var \App\Views\DealerView $this */
/** @var \App\Factories\Prototype\Car $car */
?>
<h2>Dealer</h2>

<h3>Available cars:</h3>
<table>
    <tr>
        <th>Type</th>
        <th>Color</th>
        <th>Licence Plate</th>
    </tr>
    <?php foreach ($this->availableCars as $car): ?>
        <tr>
            <td><?= $car->getCarType() ?></td>
            <td><?= $car->getColor() ?></td>
            <td><?= $car->getLicencePlate() ?></td>
        </tr>
    <?php endforeach; ?>
</table>
