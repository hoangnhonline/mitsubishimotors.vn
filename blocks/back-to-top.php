<style type='text/css'>
#bttop{border:1px solid #4adcff;background:#000000;text-align:center;padding:5px;position:fixed;bottom:35px;right:10px;cursor:pointer;display:none;color:#fff;font-size:11px;font-weight:900;}
#bttop:hover{border:1px solid #ffa789;background:#dc003e;}
</style>
<div id='bttop' style="display: block; z-index: 9999;">TOP</div>

<script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>