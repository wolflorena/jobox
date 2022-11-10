const logo = document.querySelectorAll("#logo path");
for(let i=0 ; i<logo.length;i++)
{
	console.log (logo[i].getTotalLength() ) ;
}


$("#button-index").click(function () {
  		$("html, body").animate({
    		scrollTop: $("#child2").offset().top }, 'slow');
    return true;
});

var textWrapper = document.querySelector('.subtitle2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.subtitle2 .letter',
    opacity: [0,1],
    easing: "easeInOutQuad",
    duration: 1250,
    delay: (el, i) => 50 * (i+1)
  }).add({
    targets: '.subtitle2',
    opacity: 0,
    duration: 800,
    easing: "easeOutExpo",
    delay: 800
  });

	var textWrapper = document.querySelector('.subtitle4 .letter');
textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.subtitle4 .line',
    scaleY: [0,1],
    opacity: [0.5,1],
    easing: "easeOutExpo",
    duration: 700
  })
  .add({
    targets: '.subtitle4 .line',
    translateX: [0, document.querySelector('.subtitle4 .letter').getBoundingClientRect().width+ 420 ],
    easing: "easeOutExpo",
    duration: 900,
    delay: 100
  }).add({
    targets: '.subtitle4 .letter',
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=775',
    delay: (el, i) => 34 * (i+1)
  }).add({
    targets: '.subtitle4',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
