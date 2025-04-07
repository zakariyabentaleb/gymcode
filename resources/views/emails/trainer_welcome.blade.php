<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur GymTracker</title>
</head>
<body>
    <h1>Bienvenue {{ $trainer->name }} !</h1>
    <p>Un compte a été créé pour vous sur notre plateforme.</p>
    <p><strong>Email :</strong> {{ $trainer->email }}</p>
    <p><strong>Mot de passe :</strong> {{ $trainer->password }} </p>
    <p>Vous pouvez maintenant vous connecter et gérer vos programmes.</p>
    <p>Merci !</p>
</body>
</html>
