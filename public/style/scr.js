var kichthuoc =document.getElementsByClassName('slider')[0].clientWidth;
var slider = document.getElementsByClassName('products')[0];
var max = document.getElementsByClassName('products')[0].clientWidth;
max -= kichthuoc +30;
var chuyen =0;
function next() {
	if (chuyen < max) chuyen += kichthuoc -10;
	else chuyen = 0;
	slider.style.marginLeft = '-' + chuyen + 'px';
}
function back() {
	if (chuyen == 0) chuyen = max + 10;
	else chuyen -= kichthuoc -10;
	slider.style.marginLeft = '-' + chuyen + 'px';
}