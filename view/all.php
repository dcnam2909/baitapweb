<?php require "./header.php";?>
<title>Tất cả sản phẩm</title>
<div class="container mt-5">
    <a href="../view/home.php" class="all-move-to-home">TRANG CHỦ</a>
    <span>/ TẤT CẢ SẢN PHẨM</span>
</div>
<section class="container my-5" >
    <div class="mr-auto ml-auto row">
    <?php
    $page = $_GET["page"];
    if (isset($page)){
    $num = 1;
    if ($page > 1){
        $num = $page * 10 + ($page-2)*10 +1;
    }
    $query = "SELECT * FROM `hanghoa` WHERE `mshh` >=". $num." LIMIT 20";

    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)){?>
    <div class="col-lg-3 col-md-6 container-item">
    <div href="#" class="item">
        <a href="#"><img src="data:image/jpeg;base64,<?php echo base64_encode($row["hinh"]); ?> " alt="" class="item--img"></a>
        <div class="item__info my-2">
            <div class="item--name"><a href="details.php?id=<?php echo ($row["mshh"]);?>"><?php echo ($row["tenhh"]); ?></a></div>
            <div class="item--price">
                <span class="price price-discount"><?php echo ($row["gia"])-(($row["gia"])*($row["giamgia"]))/100; ?> <u>đ</u></span>
                <strike class="price price-nodiscount"><?php echo ($row["gia"]); ?> <u>đ</u></strike>
            </div>
        </div>
        <div class="item--control">
            <button class="btn btn-info buy-now">Mua ngay</button>
            <button class="btn btn-outline-primary add-to-cart"><i class="fas fa-shopping-cart"></i></button>
        </div>
        <div class="item--discount"><?php echo ($row["giamgia"]); ?>%</div>
    </div>
</div>
    <?php } ?>
</section>
    <ul class="container pagination my-5">
    <?php }
    $queryPagenumb = mysqli_query($conn,"SELECT count(*) AS total FROM `hanghoa`");
    $data = mysqli_fetch_assoc($queryPagenumb);
    
    $pagetotal = round($data["total"]/20) + 1;?>
    <li class="page-item"><a class="page-link" href="all.php?page=<?php
        if ($_GET["page"]-1 === 0)
            echo 1;
        else echo $_GET["page"]-1; ?>">Previous</a></li>
    <?php
        for ($i = 1; $i <= $pagetotal ; $i++){
            echo '<li class="page-item"><a class="page-link" href="all.php?page='.$i.'">'.$i.'</a></li>';
        }
        mysqli_close($conn);
    ?>
        <li class="page-item"><a class="page-link" href="all.php?page=<?php echo $_GET["page"]+1; ?>">Next</a></li>
    </ul>
<?php require "./footer.php";?>