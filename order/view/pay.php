<?php require_once('./order/view/partials/header.php'); ?>
	
<main class="container mt-5">
    <p class="fs-5 text-muted">Payer la commande (c'est même pas débité sur votre compte. Ou peut être que si. Mais faites confiance)</p>

    <form method="POST" action="http://localhost:8888/esd-oop-php/process-payment">
        <button type="submit" class="btn btn-dark btn-lg">Payer</button>
    </form>
</main>

<?php require_once('./order/view/partials/footer.php'); ?>
