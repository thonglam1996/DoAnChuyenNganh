var i = 1;
function changeBanner(){
	if(i == 9)
		i = 1;
	document.getElementById("banner-img").src="images/banner/" + i + ".png";
    setTimeout(changeBanner,8000);
	i++;
}
function initChangeBanner()
{
	changeBanner();
}