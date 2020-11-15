<?php
class Home extends controller{
    function show(){
        $sanpham = $this->model("SanPhamModel");
        $this->view("Main",  [
            "page"=> "Home",
            "item"=> $sanpham->homeCategory(),
        ]);
    }

    function AllCategory($pagenum) {
        $sanpham = $this->model("SanPhamModel");
        $this->view("Main",[
            "page"=> "Allcate",
            "item"=> $sanpham->getItem($pagenum),
            "pagenumb" => $sanpham->pageNumb()
        ]);
    }
}
?>