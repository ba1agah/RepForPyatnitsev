<!DOCTYPE html>
<html>
<head>
    <title>Заголовок страницы в браузере</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
            <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
    </header>

</div>

<svg xmlns="http://www.w3.org/2000/svg" width="100" height="30" fill="currentColor" class="bi bi-airplane-engines-fill" viewBox="0 0 16 16">
    <path d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0Z"/>
</svg>

<div class="container">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>
        <form action="index.php" method="post">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Firstname</label>
                <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1" value="<?php echo $_POST['firstname'] ?? '' ?>" placeholder="Имя">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Lastname</label>
                <input type="text" class="form-control" name="lastname" id="exampleFormControlInput2" value="<?php echo $_POST['lastname'] ?? '' ?>" placeholder="Фамилия">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Сохранить">
            </div>
        </form>
        <?php
    }
    ?>
</div>
<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<b>firstname</b> = ' . ($_POST['firstname'] ?? '') . '<br>';
        echo 'lastname = ' . ($_POST['lastname'] ?? '');
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>