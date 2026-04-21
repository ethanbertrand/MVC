<h2>Inscription</h2>

{if isset($error)}
    <p style="color:red;">{$error}</p>
{/if}

<form action="index.php?page=utilisateur&action=register" method="post">
    <input type="email" name="mail" placeholder="Votre email" required>
    <input type="password" name="mdp" placeholder="Votre mot de passe" required>
    <input type="submit" value="Créer mon compte">
</form>