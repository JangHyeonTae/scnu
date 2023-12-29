<!DOCTYPE html>
<head>
<meta charset="utf-8">
<style>
h3 {
   padding-left: 5px;
   border-left: solid 5px #edbf07;
}
#close {
   margin:20px 0 0 80px;
   cursor:pointer;
}
</style>
</head>
<body>
<h3>캐릭터생성</h3>
<p>
<?php
   $id = $_GET["id"];

   if(!$id) 
   {
      echo("<li>캐릭터생성를 해주세요</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "user1", "1234", "sample");

 
      $result = mysqli_query($con, $sql);

      $num_record = mysqli_num_rows($result);

      if ($result)
      {
         echo "<li>".$id." 캐릭터를 생성 하시겠습니까?</li>";
      }
      
      mysqli_close($con);
   }
?>
</p>
<div id="close">
   <img src="./img/close.png" onclick="javascript:self.close()">
</div>
</body>
</html>