// JScript File
function startclock()
	{
		var curTime=new Date();
		var nhours=curTime.getHours();
		var nmins=curTime.getMinutes();
		var nsecn=curTime.getSeconds();
		var nday=curTime.getDay();
		var nmonth=curTime.getMonth();
		var ntoday=curTime.getDate();
		var nyear=curTime.getYear();

		
		    if (nday == 0)
		        nday = "CHỦ NHẬT";
		    if (nday == 1)
		        nday = "THỨ HAI";
		    if (nday == 2)
		        nday = "THỨ BA";
		    if (nday == 3)
		        nday = "THỨ TƯ";
		    if (nday == 4)
		        nday = "THỨ NĂM";
		    if (nday == 5)
		        nday = "THỨ SÁU";
		    if (nday == 6)
		        nday = "THỨ BẢY";
		

		nmonth+=1;

		if (nyear<=99)
			nyear= "19"+nyear;

		if ((nyear>99) && (nyear<2000))
			nyear+=1900;
		var d;
		d= document.getElementById("theClock");
		
		d.innerHTML=nday+", " + ntoday +"/" + nmonth +"/"+nyear;

		setTimeout('startclock()',1000);

}
// JScript File
function startclock_en() {
    var curTime = new Date();
    var nhours = curTime.getHours();
    var nmins = curTime.getMinutes();
    var nsecn = curTime.getSeconds();
    var nday = curTime.getDay();
    var nmonth = curTime.getMonth();
    var ntoday = curTime.getDate();
    var nyear = curTime.getYear();

    
        if (nday == 0)
            nday = "SUNDAY";
        if (nday == 1)
            nday = "MONDAY";
        if (nday == 2)
            nday = "TUESDAY";
        if (nday == 3)
            nday = "WEDNESDAY";
        if (nday == 4)
            nday = "THURSDAY";
        if (nday == 5)
            nday = "FRIDAY";
        if (nday == 6)
            nday = "SATUSDAY";
    


    nmonth += 1;

    if (nyear <= 99)
        nyear = "19" + nyear;

    if ((nyear > 99) && (nyear < 2000))
        nyear += 1900;
    var d;
    d = document.getElementById("theClock");

    d.innerHTML = nday + ", " + ntoday + "/" + nmonth + "/" + nyear;

    setTimeout('startclock_en()', 1000);

} 

