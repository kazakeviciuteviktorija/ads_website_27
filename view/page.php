<!DOCTYPE html>
<html>
<body style="max-width: 1200px; margin: auto">
<nav style="background: rgba(152,147,63,0.35); padding: 25px">
    <h2 style="display: flex; justify-content: space-around">
        <a href="/">Best ads website</a>
    </h2>
    <div style="display: flex; justify-content: space-around">
        <div>
            <a href="/list">List ads</a>
        </div>
        <div>
            <a href="/">Login</a>
        </div>
        <div>
            <a href="/registration">Register</a>
        </div>
    </div>
</nav>
<div>
    <?php if (isset($inner)): ?>
        <?php /** @var string $inner */
        require $inner; ?>
    <?php endif; ?>
</div>
</body>
</html>
