<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous" />

    <title>Контактна форма</title>
</head>


<body>

    <!--Header begin-->
    <?php require "blocks/header.php" ?>
    <!--Header end-->


    <!--Main body begin-->
    <div class="container mt-5">
    <h3>Контактна форма</h3>
    <form action="check.php" method="post">
        <input type="email" 
               name="email" 
               placeholder="main@mail.com"
               class="form-control"/><br /> 
        <textarea name="message" 
                  class="form-control" 
                  placeholder="Введіть ваше повідомлення"></textarea> <br />
        <button type="submit" 
                name="send"
                class="btn btn-success">Відправити</button>
    </form>
    </div>
    <!--Main body end-->


    <!--Footer begin-->
    <?php require "blocks/footer.php" ?>
    <!--Footer end-->

</body>

</html>
