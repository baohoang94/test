<html>
<body>
<?php
  if($data==NULL){
    echo "<h2>Dada Empty</h2>";
  }else{
    echo "<table>
    <tr>
    <td>id</td>
    <td>Title</td>
    <td>Des</td>
    </tr>";
    foreach($data as $item){
      echo "<tr>";
      echo "<td>".$item['Book']['id']."</td>";
      echo "<td><a href='' >".$item['Book']['title']."</a></td>";
      echo "<td>".$item['Book']['description']."</td>";echo "</tr>";
    }
  }
  // Ghi chú: về phần view để hiển thị html phân trang chúng ta chỉ cần đoạn sau,
  // muốn hiển thị phân trang ở đâu chỉ cần copy vào chổ đó.
?>
<?php
// Đoạn này là hiển thị html phân trang, muốn hiển thị ở đâu thì copy vào ngay đó
echo $this->Paginator->prev('« Previous ', null, null, array('class' => 'disabled')); //Hiện thj nút Previous
echo " | ".$this->Paginator->numbers()." | "; //Hiển thi các số phân trang
echo $this->Paginator->next(' Next »', null, null, array('class' => 'disabled')); //Hiển thị nút next
echo " Page ".$this->Paginator->counter(); // Hiển thị tổng trang
?>
</body>
</html>
