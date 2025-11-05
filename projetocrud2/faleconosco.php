<?php

    echo "<h1>Fale conosco</h1>";
?>
<form action="/action_page.php">
    <div class="mb-3">
        <label for="pwd" class="form-label">Nome:</label>
        <input type="text" class="form-control" id="pwd" placeholder="Seu nome" name="pswd">
    </div>
    <div class="mb-3 mt-3">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-check mb-3">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
