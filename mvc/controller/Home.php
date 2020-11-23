<?php
class Home extends controller{
    function show(){
        $sanpham = $this->model("SanPhamModel");
        $this->view("main",  [
            "page"=> "Home",
            "item"=> $sanpham->homeCategory(),
        ]);
    }

    function AllCategory($pagenum) {
        $sanpham = $this->model("SanPhamModel");
        $this->view("main",[
            "page"=> "Allcate",
            "item"=> $sanpham->getItem($pagenum),
            "pagenumb" => $sanpham->pageNumb()
        ]);
    }

    function Details($idhh){
        $sanpham = $this->model("SanPhamModel");
        $this->view("main",[
            "page"=> "CategoryDetails",
            "item"=>$sanpham->getOneItem($idhh)
        ]);
    }
}

?>