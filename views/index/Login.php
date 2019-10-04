<section class="container">
    <h1>Login</h1>
    <?php if(isset($_SESSION['flash']['message'])) echo $_SESSION['flash']['message']; ?>
    <form action="?controller=security&method=login" method="POST">
        <section class="form-group">
            <label for="Identificacion">Identificacion</label>
            <input type="text" name="Identificacion" id="Identificacion" required class="form-control">
        </section>
        <section class="form-group">
            <label for="password">Password</label>
            <input type="password" name="Password" id="Password" required class="form-control">
        </section>
        <section class="form-group">
            <input type="submit" value="Registar" class="btn btn-green">
        </section>
    </form>
</section>