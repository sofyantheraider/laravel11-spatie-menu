<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
   /* li .active a{ */
   .active a{
        font-weight: bold;
        color: red ;
    }
</style>
<body>
    <div class="container mt-4">
        {!! \App\Menus\MainMenu::build() !!}
        <h1>Halaman Contact</h1>
    </div>
</body>
</html>
