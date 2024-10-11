<?php require_once('./order/view/partials/header.php'); ?>

<main>
    <h1>Ajouter un produit</h1>
    <form method="POST" action="http://localhost:8888/esd-oop-php/create-product-process">
        <label for="title">Titre :</label>
        <input type="text" id="title" name="title" pattern="^[a-zA-Z0-9\s.-]{3,100}$" required><br><br>

        <label for="price">Prix :</label>
        <input type="number" id="price" name="price" step="0.01"><br><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description"></textarea><br><br>

        <label for="status">Actif :</label>
        <input type="checkbox" id="status" name="status"><br><br>

        <button type="submit" name="ajouter">Ajouter le produit</button>
    </form>
    
</main>

<?php require_once('./order/view/partials/footer.php'); ?>

