<?php
/** @var \App\Views\PizzaView $this */
/** @var \App\Factories\Builder\PizzaInterface $pizza */
?>
<h2>Pizza Order</h2>

<form method="post" action="/pizza"
    <div>
        <table>
            <tr>
                <th>Ingredient</th>
                <th>Amount</th>
            </tr>
            <?php foreach ($this->ingredients as $ingredient): ?>
                <tr>
                    <td><?= $ingredient ?></td>
                    <td>
                        <label for="<?= $ingredient ?>">Quantity:</label>
                        <input type="number" id="<?= $ingredient ?>" name="ingredients[<?= $ingredient ?>]" min="1" max="5">
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <input type="submit" value="Order Pizza">
</form>


<?php if ($this->pizza): ?>
<div>
    <h3>Ordered pizza:</h3>
    <?= $this->pizza->represent(); ?>
</div>
<?php endif;?>

<?php if ($this->error): ?>
<div>
    <h3>Your order is declined:</h3>
    <?= $this->error; ?>
</div>
<?php endif;?>
