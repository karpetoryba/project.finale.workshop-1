<?php require_once('./order/view/partials/header.php'); ?>

<main class="container mt-5">
    <p class="fs-5">Choisissez la méthode de livraison :</p>

    <form method="POST" action="http://localhost:8888/esd-oop-php/process-shipping-method">

        <div class="mb-3">
            <label for="shippingMethod" class="form-label">Méthode de livraison</label>
            <select id="shippingMethod" name="shippingMethod" class="form-select">
                <option value="Chronopost Express">Chronopost Express</option>
                <option value="Point relais">Point relais</option>
                <option value="Domicile">Domicile</option>
            </select>
        </div>

        <button type="submit" class="btn btn-dark">Envoyer</button>

    </form>
</main>

<?php require_once('./order/view/partials/footer.php'); ?>
