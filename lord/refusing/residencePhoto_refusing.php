<?php
    require_once($_SERVER['DOCUMENT_ROOT'].'/root/files/class/db.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/root/files/class/CleanForm.php');

    require_once($_SERVER['DOCUMENT_ROOT'].'/root/files/class/LordResidence.php');

    $CleanForm=new CleanForm();
    $product["page"]=$CleanForm->number($_GET["page"]);
    $LordResidence = new LordResidence($db);
?>
<!DOCTYPE html>
<html lang="ru">
<head><?php require_once($_SERVER['DOCUMENT_ROOT'].'/root/blocks/head.php');?></head>
<body>
<div class="page page-lord">
    <div class="wrap">
        <?php include_once($_SERVER['DOCUMENT_ROOT'].'/root/blocks/header_lord.php');?>
        <div class="container">
            <div class="content">
                <div class="left-bar">
                    <ul>
                        <li><a href="/lord/refusing/residenceProduct_refusing.php">Объявления</a></li>
                        <li><a href="/lord/refusing/residencePhoto_refusing.php">Фотографии</a></li>
                    </ul>
                </div>
                <main class="main">
                    <h1 class="title">Отклонённые фотографии</h1>
                    <section>
                        <div class="photo-block"><?php  $LordResidence->getPhoto_refusing();?></div>
                    </section>
                </main>
            </div>
        </div>
    </div>
</div>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/root/blocks/footer.php');?>
</body>
</html>