<?php 
    echo "exceptions";
    function divide($a,$b){
        if(!$b){
            throw new Exception("Cannot");
        }
        return $a / $b;
    }
    try{
        echo divide(10,2);
        echo divide(5,0);
        echo "no errors";
    }catch(Exception $e){
        echo "bắt ngoại lệ:".$e->getMessage()."\n";
    }finally{
        //co loi hay khong dieu chay o day, don dep, giai phong cac bien
        echo "ket thuc cuoc tinh nay cham het";
    }
    echo "chay oday roi"; 
?>