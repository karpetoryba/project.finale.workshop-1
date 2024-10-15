<?php 
require_once('./order/view/partials/header.php'); ?>

<main class="container mt-5">
    <ul class="list-group">
        <?php foreach ($products as $product) : ?>
            <li class="list-group-item mb-3">
                <h2>Titre : <?php echo $product->getTitle(); ?></h2>
                <h3>Prix : <?php echo $product->getPrice(); ?> €</h3>
                <h4>Description : <?php echo $product->getDescription(); ?></h4>
                <h4>Status : <?php echo $product->getStatus() ? 'Actif' : 'Inactif'; ?></h4>
                <form method="post" action="http://localhost:8888/esd-oop-php/delete-product" class="d-inline">
                    <input type="hidden" name="productId" value="<?php echo $product->getId(); ?>">
                    <button type="submit" class="btn btn-danger" >
        <i class="fa-solid fa-trash"></i> Suprimer
    </button>
                </form>

            </li>
        <?php endforeach; ?>
    </ul>
</main>

<?php require_once('./order/view/partials/footer.php'); ?>

