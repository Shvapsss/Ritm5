<?php die("Access Denied"); ?>#x#a:2:{s:6:"output";s:0:"";s:6:"result";s:3131:"/* Just for the example. Fee free to delete these three lines */
body{font-family:Helvetica, sans-serif;}
a{color:#428bca;}
.pikachoose { margin: 0 auto;  }

/* Style the thumbnails */
.pika-thumbs{ padding: 0 16px; height: 75px; }
	.pika-thumbs li{ width: 200px; height:54px; margin: 10px 0 0 17px; padding: 0; overflow: hidden;
		float: left; list-style-type: none;padding: 3px; margin: 0 5px; background: #fafafa; border: 1px solid #e5e5e5; cursor: pointer;}
	.pika-thumbs li .clip {position:relative;height:100%;text-align: center; vertical-align: middle; overflow: hidden;}
	
/* The stage is the wrapper. The image fills 100% the height of the stage */
.pika-stage, .pika-textnav {/*width: 1140px;*/}
.pikachoose img {
width: 100%;
}
.pika-stage {position: relative; /*background: #fafafa; border: 1px solid #e5e5e5;*/ padding: 10px 0px 10px 0px; text-align:center; /*height:270px !important;*/}
.pika-stage img{height:100%;}
.pika-stage .caption {position: absolute; background: #000; background: rgba(0,0,0,0.75);  border: 1px solid #141414; font-size: 11px; 
			color: #fafafa; padding: 10px; text-align: right; bottom: 50px; right: 10px;}
	.pika-stage .caption p {padding: 0; margin: 0; line-height: 14px;}

/* Ths play, pause, prev and next buttons */
.pika-imgnav a {position: absolute; text-indent: -5000px; display: block;z-index:3;}
	.pika-imgnav a.previous {background: url(/templates/yoo_master2/css/galery/css/prev.png) no-repeat left 45%; height: 100%; width: 50px; top: 10px; left: 0px;cursor:pointer;}
	.pika-imgnav a.next {background: url(/templates/yoo_master2/css/galery/css/next.png) no-repeat right 45%; height: 100%; width: 50px; top: 10px; right: 0px;cursor:pointer;}
	.pika-imgnav a.play {background: url(/templates/yoo_master2/css/galery/css/play.png) no-repeat 0% 50%; height: 100px; width: 44px;top:0;left:50%;display: none;cursor:pointer;}
	.pika-imgnav a.pause {background: url(/templates/yoo_master2/css/galery/css/pause.png) no-repeat 0% 50%; height: 100px; width: 44px;top:0;left:50%;display:none;cursor:pointer;}

/* The previous and next textual buttons */
.pika-textnav {overflow: hidden; margin: 10px 0 0 0;bottom:10px; position:absolute;display: none;}
.pika-textnav a {font-size: 12px; text-decoration: none; color: #333; padding: 4px;}
	.pika-textnav a.previous {float: left; width: auto; display: block;}
	.pika-textnav a.next {float: right; width: auto; display: block;}

/*for the tool tips*/
.pika-tooltip{font-size:12px;position:absolute;color:white;padding:3px; background-color: rgba(0,0,0,0.7);border:3px solid black;}
.pika-counter{position: absolute;bottom: 45px;left:15px;color:white;background:rgba(0,0,0,0.7);font-size:11px;padding:3px;-moz-border-radius: 5px;border-radius:5px;}

/* If using user thumbnails there's a pause well the new large image loads. This is the loader for that */		
.pika-loader{ background:url(/templates/yoo_master2/css/galery/css/loading.gif) 3px 3px no-repeat #000; background-color:rgba(0,0,0,0.9); color:white; width:60px; font-size:11px; padding:5px 3px; 
	text-align:right; position:absolute; top:15px; right:15px; }
.clip img {
width: auto;
}";}