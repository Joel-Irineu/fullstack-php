<article
    style="
        padding: 5px 20px;
        background: #eee;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4xp;
    "
>

    <h1>
        <?= $profile->name; ?>
    </h1>
    <p>
        Trabalha na <?= $profile->company; ?> <br>
        <a href="mailto:<?= $profile->email; ?>">Enviar email</a>
    </p>
</article>