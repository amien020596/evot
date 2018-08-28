<div class="container-fluid">
	<div class="text-center">
		<div class="col-md-8 col-thanks">
		<br>
			<h2 class="uppercase">terimakasih</h2>
			<h1 class="uppercase"><?php echo "$nama ($nim)"; ?></h1>
			<h3>Atas partisipasi untuk turut mensukseskan Pemiltas FKM Undip 2017</h3>

			<p>Silahkan klik tombol di bawah ini untuk melanjutkan</p>
			<br>
			<a id="mybtn" class="btn buttonload" onclick="countdown();">Lanjutkan</a>

			<div class="text-center">
				<div id="countdown"></div>
			</div>

			<img class="footer-img t" src="<?php echo base_url();?>assets/img/footerlogo.png">
		</div>
	</div>
</div>

<script type="text/javascript">
	var x = 6;
    var r = 0;
    function countdown() {
        if (x > 0) {
            x--;
            document.getElementById("countdown").innerHTML = x;
            r = setTimeout("countdown()",1000);

            document.getElementById("mybtn").setAttribute('disabled', 'disabled');
            document.getElementById("countdown").style.visibility = "visible";
            document.getElementById("mybtn").innerHTML = "Mohon Tunggu ...";
        }
        else {
            clearTimeout(r);
            document.getElementById("countdown").innerHTML = "";
            document.getElementById("countdown").style.visibility = "hidden";
        }

        setTimeout(function(){
	        window.location.href = "<?php echo base_url('logout'); ?>";
	    }, x*1000);
    }
</script>