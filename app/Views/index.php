<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPNV - Portes Ouvertes 2024 - SI-T1a</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center text-4xl text-bold mt-10">Bienvenue cher utilisateur !</h1>
    <div class="w-1/2 mx-auto text-center mt-10">
        Ici, vous serez menés à régler un problème dans le déroulement de cette plateforme.<br><br>
        Naviguez entre les pages, vous pourrez voir par vous même...<br><br>
        Ci-dessous, certaines informations peuvent vous aider. Attention, lisez bien les erreurs, elles comportent des informations importantes !<br><br>
        <span class="text-xl text-blue-500">Bonne chance !</span>
    </div>

    <div class="infos grid grid-cols-6 grid-rows-12 mt-12 gap-2">
        <div class="links col-start-2 col-span-2 border border-black p-4 rounded-lg space-y-4">
            <h1><span class="px-3 py-2 rounded-full bg-blue-500 text-white mr-2">1</span> Les différentes pages</h1>
            <a href="/users" class="block w-full py-3 text-center bg-blue-500 text-white rounded-lg">Liste des utilisateurs</a>
            <a href="/users/create" class="block w-full py-3 text-center bg-blue-500 text-white rounded-lg">Formulaire création d'un utilisateur</a>
        </div>

        <div class="links col-start-4 col-span-2 row-span-2 border border-black p-4 rounded-lg space-y-4">
            <h1><span class="px-3 py-2 rounded-full bg-blue-500 text-white mr-2">2</span> Structure des dossiers</h1>
            <pre class="bg-gray-200 p-2 rounded-md">
Projet/
├── app/
│   ├── Controllers/
│   │   └── UsersController.php
│   ├── Models/
│   │   ├── Model.php
│   │   └── User.php
│   └── Views/
│       ├── users/
│       │   ├── index.php
│       │   └── create.php
│       └── index.php
└── public/
    ├── css/
    │   └── style.css
    └── index.php       <--- Point d'entrée !
            </pre>
        </div>

        <div class="links col-start-2 col-span-2 row-start-2 border border-black p-4 rounded-lg space-y-4">
            <h1><span class="px-3 py-2 rounded-full bg-blue-500 text-white mr-2">3</span> Fonctionnement</h1>
            <pre class="bg-gray-200 p-2 rounded-md text-center">
1. index.php
↓
2. Controllers
↓
3. Models
↓
4. Controllers
↓
5. Views
            </pre>
        </div>
    </div>
</body>
</html>