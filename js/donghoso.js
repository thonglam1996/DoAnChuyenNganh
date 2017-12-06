function displayDateTime()
{
	d = new Date;
	document.getElementById("user-time").innerHTML = d.getDate() + "/" + (d.getMonth() + 1) + "/" + d.getFullYear() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
	setTimeout(displayDateTime, 1000);
}