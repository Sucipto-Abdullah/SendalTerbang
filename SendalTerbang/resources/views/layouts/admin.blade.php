<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="adminPage">

    <nav class="side-navbar">
        @include("layouts.adminnav")
    </nav>
    
    <main>
        @include("admin.$part")
    </main>


</html>
</body>