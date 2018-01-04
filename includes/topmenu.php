<?php 
if($vModule=='logout') {
	include_once("includes/dangnhap.php");
	abc();
}
?>
<div id="dangnhap">
<div id="top">
	<div id="bg-menu">
		<ul>	
		<?php
			if(isset($_SESSION['tendangnhap']) ? $_SESSION['tendangnhap']:'')
			{
		?>
				<li colspan="2" align="center"> <strong>Xin chào: </strong><?php echo $_SESSION['tendangnhap'];?> &nbsp<a href="?mod=thongtintaikhoan"><strong>Thông Tin Tài Khoản</strong></a>	<a href="?mod=logout">&nbsp&nbsp<strong>Đăng xuất</strong></a></li>
				
		<?php }
			else{
		?>
				<li align="center"><strong><a href="?mod=dangnhap">Đăng nhập </a></strong></li>-
				<li align="center"><strong><a href="?mod=dangky">Đăng ký</a></strong></li>
		<?php
			}
		?>
		</ul>	
	</div>
</div>
</div>
<div class="clear"></div>

