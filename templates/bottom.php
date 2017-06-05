
</div>

			<div class="col-md-2 ">
				<div class="right-col">
					<ul>
						<li>Инструмент</li>
						<li>Инструмент</li>
						<li>Инструмент</li>
						<li>Инструмент</li>
					</ul>
				</div>
			</div>

			<div class="footer">
<?php
$query="SELECT*FROM maintexts WHERE showhide='show'";
$adr=mysqli_query($db_con, $query);
while ($result=mysqli_fetch_array($adr)){
    echo "<a href='index.php ?url=".$result['url']."'>";
    echo $result[name];
    }
?>
				    <p>Мтс +372(29)666-66-66</p>
				    <p>Вел +372(33)666-66-66</p>
			</div>
		</div>


		
	</body>
</html>