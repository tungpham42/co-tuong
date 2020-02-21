<footer>
  <div class="container">
    <div class="row p-5">
      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-3">
        <p>Email liên hệ</p>
        <a class="w-100" href="mailto:tung.42@gmail.com">tung.42@gmail.com</a>
      </div>
      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <ul class="list-unstyled">
          <li>
            <a class="home" href="/">Trang nhất</a>
          </li>
          <li>
            <a class="contact" href="/lien-he/">Liên hệ</a>
          </li>
        </ul>
      </div>
      <div class="col-12 col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <p>Tìm chúng tôi trên mạng xã hội</p>
        <a class="w-50 mr-2" target="_blank" href="https://www.facebook.com/NhipSinhHocBiorhythm/"><img style="border-radius: 24%;" width="48" height="48" src="<?php echo $cdn_url; ?>/static/img/ic-facebook.svg" /></a>
        <a class="w-50" target="_blank" href="https://twitter.com/BiorhythmChart/"><img style="border-radius: 24%;" width="48" height="48" src="<?php echo $cdn_url; ?>/static/img/ic-twitter.svg" /></a>
      </div>
    </div>
  </div>
</footer>
<div class="modal fade" id="AdBlockModal" tabindex="-1" role="dialog" aria-labelledby="AdBlock" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content shadow-lg">
      <div class="modal-header">
        <h5 class="modal-title">Phát hiện AdBlock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Chắc chắn, phần mềm chặn quảng cáo thực hiện công việc tuyệt vời trong việc chặn quảng cáo, nhưng nó cũng chặn một số tính năng hữu ích và quan trọng của trang web của chúng tôi. Để có trải nghiệm trang web tốt nhất có thể, vui lòng dành chút thời gian để tắt AdBlocker của bạn.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$('.menu-toggle').on('click', function(){
  if ($(this).hasClass('open')) {
    $(this).removeClass('open').removeClass('close').addClass('close');
  } else if ($(this).hasClass('close')) {
    $(this).removeClass('close').removeClass('open').addClass('open');
  }
});
// Function called if AdBlock is not detected
function adBlockNotDetected() {
//	alert('AdBlock is not enabled');
}
// Function called if AdBlock is detected
function adBlockDetected() {
	$('#AdBlockModal').modal();
}

// Recommended audit because AdBlock lock the file 'blockadblock.js' 
// If the file is not called, the variable does not exist 'blockAdBlock'
// This means that AdBlock is present
if(typeof blockAdBlock === 'undefined') {
	adBlockDetected();
} else {
	blockAdBlock.onDetected(adBlockDetected);
	blockAdBlock.onNotDetected(adBlockNotDetected);
	// and|or
	blockAdBlock.on(true, adBlockDetected);
	blockAdBlock.on(false, adBlockNotDetected);
	// and|or
	blockAdBlock.on(true, adBlockDetected).onNotDetected(adBlockNotDetected);
}

// Change the options
//blockAdBlock.setOption('checkOnLoad', false);
// and|or
//blockAdBlock.setOption({
//	debug: true,
//	checkOnLoad: false,
//	resetOnEnd: false
//});
</script>
<?php
include template('to-top');
?>