<?php require_once('./order/view/partials/header.php'); ?>
<main class="container mt-5">

    <form method="POST" action="http://localhost:8888/esd-oop-php/create-order">

        <div class="mb-3">
            <label for="customerName" class="form-label">Nom du client</label>
            <input type="text" class="form-control" id="customerName" name="customerName" required>
        </div>

        <div class="mb-3">
            <label for="product" class="form-label">Produit</label>
            <select id="product" name="products[]" class="form-select" multiple>
                <?php foreach ($products as $product) : ?>
                    <option value="<?php echo $product->getId(); ?>"><?php echo $product->getTitle(); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Ajouter</button>

    </form>

</main>

<?php require_once('./order/view/partials/footer.php'); ?>

