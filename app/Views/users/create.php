<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<a href="/">< Revenir à l'accueil</a>

<form class="form-container" action="/users" method="post">
    <div class="form-row">
        <div class="form-col">
            <label for="firstname">Prénom</label>
            <input id="firstname" name="firstname" type="text" placeholder="Jane" />
        </div>
        <div class="form-col">
            <label for="lastname">Nom</label>
            <input id="lastname" name="lastname" type="text" placeholder="Doe" />
        </div>
    </div>

    <div class="form-row">
        <div class="form-col-full">
            <label for="email">Mail</label>
            <input id="email" name="email" type="email" placeholder="nom.prénom@gmail.com" />
        </div>
    </div>

    <div class="form-row">
        <div class="form-col">
            <label for="city">Ville</label>
            <input id="city" name="city" type="text" placeholder="Lausanne" />
        </div>
        <div class="form-col">
            <label for="canton">Canton</label>
            <div class="select-wrapper">
                <select id="canton" name="canton">
                    <option value="Vaud">Vaud</option>
                    <option value="Valais">Valais</option>
                    <option value="Genève">Genève</option>
                </select>
                <div class="select-arrow"></div>
            </div>
        </div>
        <div class="form-col">
            <label for="zip">code postal</label>
            <input id="zip" name="zip" type="text" placeholder="1400" />
        </div>
    </div>
    <div class="form-row">
        <input type="submit" value="Créer">
    </div>
</form>


</body>
</html>