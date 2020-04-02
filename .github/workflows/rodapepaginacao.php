<center> <a href='javascript::' onclick="load_page('<?php  echo $primeiropg ?>')"; class='btn btn-primary'> << </a>

<?php if ($pc>1) { ?>
<a href='javascript::' onclick="load_page('<?php echo $anteriorpg ?>')"; class='btn btn-primary'> Anterior </a>
<?php } 
echo " | ";
if ($pc<$tp) { ?>
<a href='javascript::' onclick="load_page('<?php echo $proximopg ?>')";  class='btn btn-primary'> Próximo </a>
<?php } ?>
<a href='javascript::' onclick="load_page('<?php echo $ultimopg ?>')";   class='btn btn-primary'> >> </a></center>

</table></div> 

