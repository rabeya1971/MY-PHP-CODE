<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <style>
      table{
         border-collapse: collapse;
      }
      td{
         border: 1px solid #ddd;
         padding: 12px;
      }
   </style>
</head>
<body style="margin-left:10px;font-size:40px">

<!-- <table>
   <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
   </tr>
   <tr>
      <td>4</td>
      <td>5</td>
      <td>6</td>
   </tr>
   <tr>
      <td>7</td>
      <td>8</td>
      <td>9</td>
   </tr>
</table> -->
<!-- 
<table>
   <?php for( $i = 1 ; $i <=5 ; $i++ ): ?>
      <tr>
         <?php for( $j = 1; $j <= 5 ; $j++ ): ?>
         <td> <?php echo $i * $j ?> </td>
         <?php endfor; ?>
      </tr>
   <?php endfor; ?>
   
</table> -->

<!-- 
<table>
   <?php for( $i = 1 ; $i <=10 ; $i++ ): ?>
      <tr>
         <?php for( $j = 1; $j <= 10 ; $j++ ): ?>
         <td> <?php echo $i * $j ?> </td>
         <?php endfor; ?>
      </tr>
   <?php endfor; ?>
   
</table> -->


<table>
   <?php for( $i = 1 ; $i <=15 ; $i++ ): ?>
      <tr>
         <?php for( $j = 1; $j <= 15 ; $j++ ): ?>
         <td> <?php echo $i * $j ?> </td>
         <?php endfor; ?>
      </tr>
   <?php endfor; ?>
   
</table>

<!-- <ul>
   <li>Apple</li>
   <li>Banana</li>
   <li>Orange</li>
</ul> -->
   
<?php $fruits = ["Apple", "Banana", "Orange", "Jackfruit" ];?>
<ul>
   <?php foreach ( $fruits as $fruit ): ?>
   <li> <?php echo $fruit; ?> </li>
   <?php endforeach; ?>
   
</ul>
</body>
</html>
