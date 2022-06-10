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
          crossorigin="anonymous">

    <title>PHP веб-сайт</title>
</head>


<body>
    
    <!--Header begin-->
    <?php require "blocks/header.php" ?>
    <!--Header end-->

    <!--Main body begin-->
    <div class="container mt-5">
        <h3 class="mb-5">Наші статьї</h3>

        <div class="d-flex flex-wrap">
            <?php for($i; $i < 5; ++$i):?>
                <div class="card mb-4 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Text Hear</h4>
                    </div>
                    <img src="img/<?=$i+1?>.jpg" class="img-thumbnail" />
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>10 users included</li>
                            <li>2 GB of storage</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                        </ul>
                    <button type="button" 
                            class="w-100 btn btn-lg btn-outline-primary">
                        Подробиці
                    </button>
                </div>
            </div>
            <?php endfor; ?>
        </div>

    </div>
    <!--Main body end-->


    <!--Footer begin-->
    <?php require "blocks/footer.php" ?>
    <!--Footer end-->

</body>

</html>
