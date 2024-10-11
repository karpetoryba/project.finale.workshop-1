<?php require_once('./order/view/partials/header.php'); ?>

<main>
    <h1>Laisser votre avis sur nous :()</h1>
    <form method="POST" action="http://localhost:8888/esd-oop-php/create-review">
        <label for="username">username :</label>
        <input type="text" id="username" name="username" pattern="^[a-zA-Z0-9\s.-]{3,100}$" required><br><br>


        <label for="message">Message :</label>
        <textarea id="message" name="message"></textarea><br><br>


        <button type="submit" name="ajouter">Ajouter mon avis</button>
    </form>
</main>

<?php require_once('./order/view/partials/footer.php'); ?>