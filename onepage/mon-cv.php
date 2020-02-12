<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <style type="text/css">
        p {
            color: #26b72b;
        }
    </style>
</head>

<body>
    <header>


        <div style="text-align:center">
            <h1>MON CURRICULUM VITAE</h1>
        </div>
        <div>
            <img class="image" src="assets/img/en-tete.jpeg" alt="image">
        </div>
        <nav>

            <a href="/COMPETENCESPRO/">COMPETENCES</a>

            <a href="/COMPÉTENCES TECHNIQUES/">COMPETENCES TECHNIQUES</a>

            <a href="EXPERIENCES/">EXPERIENCES PROFESSIONNELLE</a>

            <a href="/ETUDES/">ETUDES & fORMATIONS</a>

            <a href="/Langues/">LANGUES</a>

            <a href="/DISPONIBILITÉ/">DISPONIBILITÉ</a>

        </nav>

    </header>

    <main>
        <section>
            <?php
            $nomCandidat = "GUEZATI";
            $prenomCandidat = "ISABELLE";
            $adresseCandidat = "94 la grande bastide cazaulx";
            $telCandidat = "0659927349";
            $emailCandidat = "isabelle.gbc@laposte.net";
            ?>


            <article>
                <p><?php echo $nomCandidat ?></p>
                <p><?php echo $prenomCandidat ?></p>
                <p><?php echo $adresseCandidat ?></p>
                <p><?php echo $telCandidat ?></p>
                <?php
                $adresseCandidat = "94 la grande bastide cazaulx";
                $telCandidat = "0659927349";
                $emailCandidat = "isabelle.gbc@laposte.net";
                ?>
            </article>
            <article>
                <p>COMPETENCES PROFESSIONNELLES</p>
                <p><?php echo $emailCandidat ?></p>
            </article>


        </section>
    </main>


    <footer>
        <p>tous droits réservés</p>
    </footer>


</body>

</html>