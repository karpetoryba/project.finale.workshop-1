<?php require_once('./order/view/partials/header.php'); ?>
	
<main class="container mt-5">
    <p class="fs-5">Remplissez l'adresse de livraison :</p>

    <form method="POST" action="http://localhost:8888/esd-oop-php/process-shipping-address">

        <div class="mb-3">
            <label for="shippingCountry" class="form-label">Pays de livraison</label>
            <input type="text" id="shippingCountry" name="shippingCountry" class="form-control" required pattern="^[a-zA-Z0-9\s.-]{5,50}$" title="Le pays doit contenir entre 5 et 50 caractères et des espaces.">
        </div>

        <div class="mb-3">
            <label for="shippingCity" class="form-label">Ville de livraison</label>
            <input type="text" id="shippingCity" name="shippingCity" class="form-control" required pattern="^[a-zA-Z0-9\s.-]{5,50}$" title="La Ville doit contenir entre 5 et 50 caractères.">
        </div>

        <div class="mb-3">
            <label for="shippingAddress" class="form-label">Adresse de livraison</label>
            <input type="text" id="shippingAddress" name="shippingAddress" class="form-control" required pattern="^[a-zA-Z0-9\s.-]{5,50}$" title="L'adresse doit contenir entre 5 et 50 caractères et des espaces.">
        </div>

        <button type="submit" class="btn btn-dark">Ajouter</button>

    </form>
</main>

<?php require_once('./order/view/partials/footer.php'); ?>
