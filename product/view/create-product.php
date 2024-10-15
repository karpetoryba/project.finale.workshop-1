<?php require_once('./order/view/partials/header.php'); ?>

<main class="container mt-5">
    <h1 class="mb-4">Ajouter un produit</h1>
    
    <form method="POST" action="http://localhost:8888/esd-oop-php/create-product-process">
        <div class="mb-3">
            <label for="title" class="form-label">Titre :</label>
            <input type="text" class="form-control" id="title" name="title" pattern="^[a-zA-Z0-9\s.-]{3,100}$" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prix :</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description :</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>

        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="status" name="status">
            <label class="form-check-label" for="status">Actif</label>
        </div>

        <button type="submit" name="ajouter" class="btn btn-dark">Ajouter le produit</button>
    </form>
</main>

<?php require_once('./order/view/partials/footer.php'); ?>

