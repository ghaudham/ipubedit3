<?php
$divheight = (int) $_POST["divheight"];
$divheight1 = $divheight - 240;
$HOSTNAME = $_POST["HOSTNAME"];
?>
<html>

<head>
    <script src="<?php echo $HOSTNAME; ?>/Integra/EditPlus/ce_editor/Support/js/jquery.min.js"></script>
    <script src="<?php echo $HOSTNAME; ?>/Integra/EditPlus/ce_editor/Support/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo $HOSTNAME; ?>/Integra/EditPlus/ce_editor/assets/bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $HOSTNAME; ?>/Integra/EditPlus/ce_editor/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $HOSTNAME; ?>/Integra/EditPlus/ce_editor/Support/css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">

    <style>
        .figh {
            font-size: 1.2em;
            text-align: center;
            color: red !important;
            font-family: Philosopher;
            font-weight: 600;
        }

        .figb {
            text-align: justify;
        }

		.tab {
			overflow: hidden;
			/* border: 1px solid #ccc;
			background-color: #f1f1f1; */
			width: 100%;
			margin-bottom: -1px;
		}

		/* Style the buttons inside the tab */
		.tab button {
			background-color: inherit;
			float: left;
			border: none;
			outline: none;
			cursor: pointer;
			padding: 14px 12px;
			transition: 0.3s;
			font-size: 12px;
			border-radius: 3px 3px 0 0;
		}

		/* Change background color of buttons on hover */
		.tab button:hover {
			background-color: #ddd;
		}

		/* Create an active/current tablink class */
		.tab button.active {
			border: 1px solid #ddd;
			border-bottom: none;
			background: #fff;
		}

		/* Style the tab content */
		.tabcontent {
			display: none;
			padding: 10px;
			border: 1px solid #ddd;
			/* border-top: none; */
			width: 97%;
			/*height: 410px;
			height: 100%; */
			border-radius: 3px;
			max-height: 390px;
			overflow-y: scroll;
		}

        #qryMain{
            counter-reset: my-sec-counter;
        }

		 #commentMain{
            counter-reset: my-sec-counter;
        }
        .qry {
            font-size: 13px;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
            white-space: pre-line;
            line-height: 22px;
            vertical-align: sub;
			display: inline-block;
			width:90%;
        }

		.comnt{
			 font-size: 13px;
            font-weight: 400;
            font-family: 'Montserrat', sans-serif;
            white-space: pre-line;
            line-height: 22px;
            vertical-align: sub;
			display: inline-block;
			width:95%;
		}
        .qry::before {
           counter-increment: my-sec-counter;
            content: "AQ"counter(my-sec-counter)" : ";
            font-weight: bold;
            color: #0f60efcc;			
        }

		 .commentInneruserHeader::before {
           counter-increment: my-sec-counter;
            content: "C"counter(my-sec-counter)" : ";
            font-weight: bold;
            color: #0f60efcc;	
			font-size: 14px;
        }
        #qry_text {
            width: 96%;
            height: 70px;
            white-space: initial;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #b3c7b1;
            position: relative;
            font-weight: bold;
            font-size: 13px;
            line-height: 20px;
            margin-top: 20px;
            overflow-y: scroll;
            overflow-x: hidden;
        }
		#comnt_text {
            width: 96%;
            height: 70px;
            white-space: initial;
            margin-bottom: 15px;
            padding: 10px;
            background-color: #b3c7b1;
            position: relative;
            font-weight: bold;
            font-size: 13px;
            line-height: 20px;
            margin-top: 20px;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        .RightSidePanel {
            width: 29% !important;
            overflow: hidden;
            top: 122px;
            height: auto;
            background: #fff;
        }

        #pstyleslist {
            width: 100% !important;
        }

        .RightSidePanel {
            overflow: auto !important;
            padding: 0px;
        }

        .bin-pad {
            text-align: center;
            padding: 10px 0px;
            background-color: #f5f5f5;
            color: #333;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 1px;
            border-radius: 3px;
            border: 3px solid #e1e1e1;
        }

        .qryinsert {
            background: #648c60;
            border-radius: 5px;
            color: white;
            position: relative;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 13px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            display: inline-block;
        }

		.comntinsert {
            background: #648c60;
            border-radius: 5px;
            color: white;
            position: relative;
            cursor: pointer;
            padding: 10px 20px;
            font-size: 13px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            display: inline-block;
        }
        .tx-cnt {
            text-align: center;
        }

        .query {
            padding: 10px;
            width: 100%;
            height: auto;
            margin: 0px 0px 8px 0px;
            border-radius: 8px;
            /*border: 1px solid #e1e1e1;*/
			border: 1px solid rgb(0, 124, 195);
            box-sizing: border-box;
            cursor: pointer;
            color: #000 !important;
        }

		.query:hover {
		  background:#f5fdff;
		}

		.comment {
            padding: 10px;
            width: 100%;
            height: auto;
            margin: 0px 0px 8px 0px;
            border-radius: 8px;
            /*border: 1px solid #e1e1e1;*/
			border: 1px solid rgb(0, 124, 195);
            box-sizing: border-box;
            cursor: pointer;
            color: #000 !important;
        }

		.comment:hover {
		  background:#f5fdff;
		}
        .qryinsert {
            padding: 4px 18px;
        }
		.comntinsert {
            padding: 4px 18px;
        }
        .del-btn {            
            color: red;
            padding: 3px 3px;
            border-radius: 3px;
            cursor: pointer;
        }

        .reply-btn {            
            color: green;
            padding: 3px 3px;  
            border-radius: 3px;
			cursor: pointer;
        }

		.commentreply-btn {            
            color: green;
            padding: 3px 3px;  
            border-radius: 3px;
			cursor: pointer;
        }
		.edit-btn {
			 color: blue;
            padding: 3px 3px;  
            border-radius: 3px;
			cursor: pointer;
		}
		.reply-del {
			 color: red;
            padding: 3px 3px;
            border-radius: 3px;
            cursor: pointer;
		}

        .reply-query {
            padding: 10px;
            border-radius: 4px;
            background: #ffb3ff;
            margin: 0px 0px 10px 30px;
        }
		.reply-comment {
            padding: 10px;
            border-radius: 4px;
            background: #ffb3ff;
            margin: 0px 0px 10px 30px;
        }
        #reply-qry {
            cursor: pointer;
            padding: 3px;
            font-size: 13px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
            list-style-type: none;
            white-space: pre-line;
            line-height: 20px;
        }
		#reply-comnt {
            cursor: pointer;
            padding: 3px;
            font-size: 13px;
            font-weight: 500;
            font-family: 'Montserrat', sans-serif;
            list-style-type: none;
            white-space: pre-line;
            line-height: 20px;
        }



        .panel-heading {
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
            font-weight: 600;
        }
		.queryInnerbutton {
			text-align: end;	
			margin: 5px;
		}
		.queryInnerHeader {
			display: flex;
			 border-bottom: 1px solid #ddd;
			padding: 4px;
			background: #fbfbfb;
		}
		.queryInnerHeader span.material-icons {
			font-size: 18px;
			color: #5c8da2;
		}
		.queryInnerHeader p {
			margin: 0px;
			width: calc(100% - 112px);
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			padding: 2px 0 2px 4px;
			cursor: default;
		}
		.queryInnerHeader label {
			font-size: 10px;
			margin-top: 4px;
			color: #0f1010;
			font-weight: 600;
		}
		.queryTxtEditor {    
			border-radius: 3px;
			padding: 3px;
			display: none;
			margin-bottom: 3px;
			margin-top: 3px;
		}
		.queryTxt {
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;			
			-webkit-box-orient: vertical;
			font-size: 12px;
			padding: 3px;
			overflow-wrap: break-word;
			white-space: pre-line;
			line-height: 22px;
			vertical-align: sub;
			width:98%;
			font-weight: 400;
		}
		.queryTxt[contenteditable="true"] {
    background-color: #f9f9f9;
    border: 1px solid #97b9f0;
    box-shadow: 0px 0px 4px 0px #97b9f0;
}

    .queryTxt[contenteditable="true"] p {
        margin: 0
    }
		.queryTxtEditor ul, .queryTxtReply ul {
			padding: 0px;
			margin: 0px;
			float: right;
		}
		.queryTxtEditor button, .queryTxtReply button {
			border: 0px;
			background-color: transparent;
			font-size: 11px;
			cursor: pointer;
		}
		.queryTxtEditor li button, .queryTxtReply li button {
			background-color: transparent;
			border: 0px;
			height: 16px;
			padding: 0;
			cursor: pointer;
		}

		.commentInnerbutton {
			text-align: end;	
			margin: 5px;
		}
		.commentInnerHeader {
			display: flex;
			 border-bottom: 1px solid #ddd;
			padding: 4px;
			background: #fbfbfb;
		}
		.commentInnerHeader span.material-icons {
			font-size: 18px;
			color: #5c8da2;
		}
		.commentInnerHeader p {
			margin: 0px;
			width: calc(100% - 112px);
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			padding: 2px 0 2px 4px;
			cursor: default;
		}
		.commentInnerHeader label {
			font-size: 10px;
			margin-top: 4px;
			color: #0f1010;
			font-weight: 600;
		}
		.commentTxtEditor {    
			border-radius: 3px;
			padding: 3px;
			display: none;
			margin-bottom: 3px;
			margin-top: 3px;
		}
		.commentTxt {
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;			
			-webkit-box-orient: vertical;
			font-size: 12px;
			padding: 3px;
			overflow-wrap: break-word;
			white-space: pre-line;
			line-height: 22px;
			vertical-align: sub;
			width:98%;
			font-weight: 400;
		}
		.commentTxt[contenteditable="true"] {
    background-color: #f9f9f9;
    border: 1px solid #97b9f0;
    box-shadow: 0px 0px 4px 0px #97b9f0;
}

    .commentTxt[contenteditable="true"] p {
        margin: 0
    }
		.commentTxtEditor ul, .commentTxtReply ul {
			padding: 0px;
			margin: 0px;
			float: right;
		}
		.commentTxtEditor button, .commentTxtReply button {
			border: 0px;
			background-color: transparent;
			font-size: 11px;
			cursor: pointer;
		}
		.commentTxtEditor li button, .commentTxtReply li button {
			background-color: transparent;
			border: 0px;
			height: 16px;
			padding: 0;
			cursor: pointer;
		}
		svg[class$="-16"] {
			width: 16px;
			height: 16px;
		}

		.queryTxtEditor ul li, .queryTxtReply ul li {
		list-style: none;
		display: inline;
		float: left;
		margin-bottom: 0px;
		padding: 0;
		border: 0;
		height: 16px;
	}
		.queryInner{
			background-color: #fff !important;
			margin-bottom: 5px !important;
			/*border: 1px solid #009bff;*/
			border: 1px solid gold;	
			list-style: none;
			padding: 5px;			
			margin-bottom: 10px;
			border-radius: 6px;
		}

		.commentTxtEditor ul li, .commentTxtReply ul li {
		list-style: none;
		display: inline;
		float: left;
		margin-bottom: 0px;
		padding: 0;
		border: 0;
		height: 16px;
	}
		.commentInner{
			background-color: #fff !important;
			margin-bottom: 5px !important;
			/*border: 1px solid #009bff;*/
			border: 1px solid gold;	
			list-style: none;
			padding: 5px;			
			margin-bottom: 10px;
			border-radius: 6px;
		}
		.material-icons{
			font-size:16px;
		}
		.flink-active {
			background: #efefef !important;
			border: 1px solid #6da0bf !important;
		}
		.RightSidePanel {
			overflow: auto !important;
			padding: 0px;
			font-family: 'Montserrat', sans-serif;
			scrollbar-width: thin;
			
		}

		.qry[contenteditable="true"] {
    background-color: #f9f9f9;
    border: 1px solid #97b9f0;
    box-shadow: 0px 0px 4px 0px #97b9f0;
	width:95%;
}

.RightSidePanel .tab,
		.RightSidePanel .tabcontent {
			box-sizing: border-box !important;
		}

		.NoRecordFound {
    border-radius: 5px;
    border: 1px solid #e1e1e1;
    
    text-align: center;
    padding: 8px;
    /* box-shadow: 0px 0px 5px 1px #d2d2d2; */
    margin: 3px;
    margin-top: 20px;
    background-color: #f7f7f7;
    display: none;
}

.commentInneruserHeader {
    display: flex;
    border-bottom: 1px solid #ddd;
    padding: 4px;
    margin-top: -3px;
	margin-bottom: 3px;
}
.commentInneruserHeader span.material-icons {
			font-size: 18px;
			color: #5c8da2;
			margin-left: 5px;
		}
		.commentInneruserHeader p {
			margin: 0px;
			width: calc(100% - 112px);
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			padding: 2px 0 2px 4px;
			cursor: default;
		}
		.commentInneruserHeader label {
			font-size: 10px;
			margin-top: 4px;
			color: #0f1010;
			font-weight: 600;
			
		}

		.datacomment {
			overflow: hidden;
			text-overflow: ellipsis;
			display: -webkit-box;			
			-webkit-box-orient: vertical;
			font-size: 12px;
			padding: 3px;
			overflow-wrap: break-word;
			white-space: pre-line;
			line-height: 22px;
			vertical-align: sub;
			width:98%;
			font-weight: 400;
		}
		.datacomment[contenteditable="true"] {
    background-color: #f9f9f9;
    border: 1px solid #97b9f0;
    box-shadow: 0px 0px 4px 0px #97b9f0;
}

    .datacomment[contenteditable="true"] p {
        margin: 0
    }
    </style>
</head>

<body>

  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position:absolute; top:0px; left:-500px;">
   <g id="Bold">
            <path d="M6.0196,31.0245V1h10.1185c1.903,0,3.5573,0.1857,4.9168,0.5518c1.3715,0.3698,2.5174,0.9064,3.4059,1.5949c0.8979,0.6961,1.5668,1.5579,1.9883,2.5615c0.4167,0.9934,0.628,2.1217,0.628,3.3539c0,0.7226,-0.1119,1.4308,-0.3325,2.1051c-0.2221,0.6776,-0.5696,1.3201,-1.0328,1.9096c-0.4611,0.5868,-1.0462,1.1203,-1.7389,1.5854c-0.4577,0.3071,-0.9748,0.5822,-1.5445,0.8221C26.1268,16.527,28,18.7778,28,22.1856c0,1.29,-0.2469,2.4896,-0.7338,3.5656c-0.4877,1.0777,-1.2041,2.0204,-2.1292,2.8019c-0.9216,0.7782,-2.0696,1.3917,-3.4121,1.8235c-1.3352,0.4298,-2.8768,0.6478,-4.5818,0.6478H6.0196zM17.0368,26.6219c1.0373,0,1.9217,-0.1213,2.6286,-0.3607c0.6985,-0.2362,1.2737,-0.5604,1.7098,-0.9638c0.4315,-0.3988,0.7485,-0.8758,0.9426,-1.4179c0.1983,-0.555,0.2989,-1.1612,0.2989,-1.8016c0,-1.3029,-0.4293,-2.2964,-1.3123,-3.0373c-0.8864,-0.7435,-2.329,-1.1204,-4.2879,-1.1204h-5.5022v8.7017H17.0368zM15.9178,13.9087c1.9727,0,3.4565,-0.3777,4.41,-1.1225c0.9444,-0.7376,1.4035,-1.7776,1.4035,-3.1794c0,-1.5159,-0.4401,-2.6192,-1.3083,-3.2793c-0.8931,-0.6785,-2.333,-1.0226,-4.2797,-1.0226h-4.6291v8.6039H15.9178z"
                  fill="#58595B" />
        </g>
        <g id="italic">
            <path d="M13.203,30H8.5l8.6273,-26.7577C17.3485,2.505,18.0272,2,18.797,2H23.5l-8.6273,26.7577C14.6515,29.495,13.9728,30,13.203,30z"
                  fill="#58595B" />
        </g>
        <g id="Underline">
            <rect x="3" y="29" width="26" height="2" fill="#58595B" />
            <g>
                <path d="M16.0363,23.324c1.0352,0,1.9612,-0.1665,2.7783,-0.4997c0.8168,-0.3329,1.5091,-0.7969,2.0768,-1.3919c0.5674,-0.5948,1.001,-1.3116,1.3003,-2.1503c0.2993,-0.8387,0.449,-1.7694,0.449,-2.7927V1H27v15.4894c0,1.511,-0.2526,2.9087,-0.7577,4.1935c-0.5052,1.2849,-1.2319,2.3943,-2.1796,3.3281c-0.9481,0.9341,-2.0987,1.6657,-3.4519,2.195c-1.3535,0.5292,-2.8783,0.7941,-4.5744,0.7941c-1.6964,0,-3.2212,-0.2649,-4.5744,-0.7941c-1.3535,-0.5293,-2.5041,-1.2609,-3.4519,-2.195c-0.948,-0.9338,-1.6745,-2.0432,-2.1796,-3.3281c-0.5051,-1.2848,-0.7577,-2.6826,-0.7577,-4.1935V1h4.378v15.4715c0,1.0233,0.1497,1.954,0.449,2.7927c0.2993,0.8387,0.7297,1.5586,1.291,2.1592c0.5613,0.6009,1.2503,1.0679,2.0674,1.4008C14.0747,23.1575,15.0008,23.324,16.0363,23.324z"
                      fill="#58595B" />
            </g>
        </g>
		 <g id="superscript">
            <path d="M21,27.9904h-3.6562c-0.2511,0,-0.4551,-0.0679,-0.612,-0.204c-0.1569,-0.1358,-0.2825,-0.2876,-0.3766,-0.455l-5.6178,-9.0543c-0.0419,0.1255,-0.0863,0.2459,-0.1334,0.3609c-0.0471,0.1152,-0.102,0.225,-0.1648,0.3295l-5.4295,8.3639c-0.1152,0.1674,-0.2432,0.3192,-0.3844,0.455c-0.1413,0.1361,-0.3271,0.204,-0.5571,0.204H0.6474l7.6264,-11.6122L0.9612,5.3938h3.6406c0.2614,0,0.4524,0.0392,0.5727,0.1177c0.1202,0.0785,0.2276,0.1962,0.3217,0.3531l5.4922,8.6307c0.0522,-0.1256,0.1045,-0.2511,0.1569,-0.3766c0.0523,-0.1255,0.1202,-0.2562,0.204,-0.3923l5.1156,-7.799c0.1044,-0.1777,0.2197,-0.3111,0.3452,-0.4001c0.1255,-0.0888,0.277,-0.1334,0.4551,-0.1334h3.4993l-7.3752,10.8276L21,27.9904z"
                  fill="#58595B" />
            <path d="M30.3003,12.5425c0.215,0,0.3838,0.063,0.5067,0.1887c0.1227,0.126,0.1842,0.2872,0.1842,0.4837v1.1975h-8.9724v-0.6724c0,-0.1351,0.0277,-0.2764,0.083,-0.4237c0.0552,-0.1475,0.1441,-0.2824,0.2671,-0.4054l4.1269,-4.1361c0.35,-0.3501,0.6617,-0.6847,0.9351,-1.0041c0.2732,-0.3192,0.5066,-0.6386,0.7001,-0.958c0.1934,-0.3192,0.3408,-0.6432,0.4421,-0.9718c0.1013,-0.3285,0.152,-0.6739,0.152,-1.0363c0,-0.3501,-0.0538,-0.6587,-0.1612,-0.9258c-0.1075,-0.2672,-0.2549,-0.4882,-0.4422,-0.6633s-0.4115,-0.307,-0.6724,-0.3961c-0.2611,-0.0889,-0.5481,-0.1336,-0.8613,-0.1336c-0.3009,0,-0.5788,0.043,-0.8336,0.129c-0.2549,0.0861,-0.4823,0.2058,-0.6817,0.3592c-0.1996,0.1536,-0.3654,0.3363,-0.4974,0.5481c-0.1321,0.2119,-0.2289,0.4437,-0.2902,0.6955c-0.092,0.2519,-0.2104,0.4208,-0.3546,0.5067c-0.1444,0.0861,-0.3547,0.1045,-0.6311,0.0553l-1.041,-0.1843c0.0922,-0.6264,0.2656,-1.1759,0.5205,-1.6489c0.2547,-0.4729,0.5757,-0.8674,0.9626,-1.1837c0.3869,-0.3162,0.8304,-0.5557,1.3311,-0.7185C25.5731,1.0815,26.1149,1,26.6984,1c0.5896,0,1.1315,0.0875,1.6259,0.2625c0.4943,0.175,0.9213,0.4237,1.2805,0.7462c0.3592,0.3224,0.6402,0.7139,0.8428,1.1745c0.2027,0.4606,0.304,0.9796,0.304,1.5568c0,0.4914,-0.0723,0.9458,-0.2165,1.3634c-0.1443,0.4177,-0.3393,0.8168,-0.5849,1.1975c-0.2457,0.3809,-0.5328,0.7508,-0.8613,1.1101c-0.3286,0.3592,-0.674,0.7231,-1.0363,1.0916l-3.2058,3.2793c0.264,-0.0737,0.5297,-0.132,0.7969,-0.175c0.2671,-0.0428,0.5204,-0.0644,0.76,-0.0644H30.3003z"
                  fill="#3E79B4" />
        </g>
        <g id="subscript">
            <path d="M21,26.5904h-3.6562c-0.2511,0,-0.4551,-0.0679,-0.612,-0.204c-0.1569,-0.1358,-0.2825,-0.2876,-0.3766,-0.455l-5.6178,-9.0543c-0.0419,0.1255,-0.0863,0.2459,-0.1334,0.3609c-0.0471,0.1152,-0.102,0.225,-0.1648,0.3295l-5.4295,8.3639c-0.1152,0.1674,-0.2432,0.3192,-0.3844,0.455c-0.1413,0.1361,-0.3271,0.204,-0.5571,0.204H0.6474l7.6264,-11.6122L0.9612,3.9938h3.6406c0.2614,0,0.4524,0.0392,0.5727,0.1177c0.1202,0.0785,0.2276,0.1962,0.3217,0.3531l5.4922,8.6307c0.0522,-0.1256,0.1045,-0.2511,0.1569,-0.3766c0.0523,-0.1255,0.1202,-0.2562,0.204,-0.3923l5.1156,-7.799c0.1044,-0.1777,0.2197,-0.3111,0.3452,-0.4001c0.1255,-0.0888,0.277,-0.1334,0.4551,-0.1334h3.4993l-7.3752,10.8276L21,26.5904z"
                  fill="#58595B" />
            <path d="M30.3003,29.1425c0.215,0,0.3838,0.063,0.5067,0.1887c0.1227,0.126,0.1842,0.2872,0.1842,0.4837v1.1975h-8.9724v-0.6724c0,-0.1351,0.0277,-0.2764,0.083,-0.4237c0.0552,-0.1475,0.1441,-0.2824,0.2671,-0.4054l4.1269,-4.1361c0.35,-0.3501,0.6617,-0.6847,0.9351,-1.0041c0.2732,-0.3192,0.5066,-0.6386,0.7001,-0.958c0.1934,-0.3192,0.3408,-0.6432,0.4421,-0.9718c0.1013,-0.3285,0.152,-0.6739,0.152,-1.0363c0,-0.3501,-0.0538,-0.6587,-0.1612,-0.9258c-0.1075,-0.2672,-0.2549,-0.4882,-0.4422,-0.6633c-0.1873,-0.175,-0.4115,-0.307,-0.6724,-0.3961c-0.2611,-0.0889,-0.5481,-0.1336,-0.8613,-0.1336c-0.3009,0,-0.5788,0.043,-0.8336,0.129c-0.2549,0.0861,-0.4823,0.2058,-0.6817,0.3592c-0.1996,0.1536,-0.3654,0.3363,-0.4974,0.5481c-0.1321,0.2119,-0.2289,0.4437,-0.2902,0.6955c-0.092,0.2519,-0.2104,0.4208,-0.3546,0.5067c-0.1444,0.0861,-0.3547,0.1045,-0.6311,0.0553l-1.041,-0.1843c0.0922,-0.6264,0.2656,-1.1759,0.5205,-1.6489c0.2547,-0.4729,0.5757,-0.8674,0.9626,-1.1837c0.3869,-0.3162,0.8304,-0.5557,1.3311,-0.7185c0.5005,-0.1626,1.0424,-0.2441,1.6259,-0.2441c0.5896,0,1.1315,0.0875,1.6259,0.2625c0.4943,0.175,0.9213,0.4237,1.2805,0.7462c0.3592,0.3224,0.6402,0.7139,0.8428,1.1745c0.2027,0.4606,0.304,0.9796,0.304,1.5568c0,0.4914,-0.0723,0.9458,-0.2165,1.3634c-0.1443,0.4177,-0.3393,0.8168,-0.5849,1.1975c-0.2457,0.3809,-0.5328,0.7508,-0.8613,1.1101c-0.3286,0.3592,-0.674,0.7231,-1.0363,1.0916l-3.2058,3.2793c0.264,-0.0737,0.5297,-0.132,0.7969,-0.175c0.2671,-0.0428,0.5204,-0.0644,0.76,-0.0644H30.3003z"
                  fill="#3E79B4" />
        </g>
		
		
		</svg>
    <div id="page-wrapper">
        <div class="container-fluid">
			<div style="margin-top: 10px;position: relative;">
				<div class="tab">					
					<button class="tablinks active" type="querylists" onclick="openTab(event, 'querylists')">Queries</button>
					<button class="tablinks" type="commentlists" onclick="openTab(event, 'commentlists')">Comments</button>					
				</div>

				<div id="querylists" class="tabcontent" style="display: block;">
					<div class="queries-pad">								
						<div id="qryMain"></div>
					</div>
				</div>

				<div id="commentlists" class="tabcontent" style="display: none;">
					<div class="queries-pad">								
						<div id="commentMain"></div>
				</div>

			 </div>  
        </div>
    </div>
	<script>

		var rgxstage = new RegExp("AP\\d+|CORRECTION\\d+", "gi");

		//CONFIGURATION -  the below list of stages are allowed to reply to the queries.  
		var stageName= 'query,AP1,AP2,AP3,AP4,AP5,CORRECTION1,CORRECTION2,CORRECTION3,CORRECTION4,CORRECTION5,CORRECTION6,CORRECTION7,CORRECTION8,CORRECTION9,CORRECTION10';

		///var stageId='';
		var exist_file_id = $('#exist_file_id').val();
				
		
		/* $.ajax({
                    'async': false,
                    'type': "POST",
                    'global': false,
                    'dataType': 'html',
                    'url': base_url + 'home/check_file_currentstage_status',
                     data:{exist_file_id:exist_file_id},
                     success: function (result) {
                      stageId = result.split('-')[0].toLowerCase();
                    }
                });	*/	
		
		// for testing assigned stage
		//stageId='ERY';
		

		function openTab(evt, TabName) {
		// debugger;
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(TabName).style.display = "block";
			// evt.currentTarget.className += " active";
			evt.target.className += " active";
		
		}


		/*----------- QUERIES START -----------*/  // -- sankar

	    var stylesBtnrply = '<div class="queryTxtEditor"><ul><li><button data-style="bold"><svg aria-hidden="true" viewBox="0 0 54 54" focusable="false" class="icon-bold-16"><use xlink:href="#Bold"/></svg></button></li><li><button data-style="italic"><svg aria-hidden="true" viewBox="0 0 54 54" focusable="false" class="icon-italic-16"><use xlink:href="#italic"/></svg></button></li><li><button data-style="underline"><svg aria-hidden="true" viewBox="0 0 54 54" focusable="false" class="icon-underline-16"><use xlink:href="#Underline"/></svg></button></li><li><button data-style="subscript"><svg aria-hidden="true" viewBox="0 0 54 54" focusable="false" class="icon-subScript-16"><use xlink:href="#subscript"/></svg></button></li><li><button data-style="superscript"><svg aria-hidden="true" viewBox="0 0 54 54" focusable="false" class="icon-superscript-16"><use xlink:href="#superscript"/></svg></button></li></ul></div>';
		Showquerylist();
		
		      
	  function Showquerylist()
	  {
			var query = "";
			var qrylist = "";
			var selectquery = tinyMCE.activeEditor.dom.select('.QUERY');
			var num = 0;
			var reply_query = "";
			if($(selectquery).length>0)
			{
				
					/// Read the Queries from editor and listed in rights side panel ///////
				$(selectquery).each(function() {
					clname = $(this).attr("data-query");
					
					if (clname != undefined) {
						query = $(this).attr("data-query"); // $(this).data("query");
						qrylist += "<div class='query' stageId='" + stageId + "' href-id='" + num + "' >";
						if(stageName.split(',').indexOf(stageId) < 0){
							qrylist+="<input class='qrycheck' type='checkbox' style='margin-right: 5px;' href-id='" + num + "' >";
						}
						qrylist += "<div id='qry' role='textinputbox' class='qry' href-id='" + num + "' title='Click this query'>" + query + "</div>";									   					
					} else {
						var que = $(this).text();
						qrylist += "<div class='query'>";
						qrylist += "<div id='qry' role='textinputbox' class='qry' href-id='" + num + "' title='Click this query'>" + que + "</div>";
					}
				
					if (stageName.split(',').indexOf(stageId) != -1)
					{
						if(!$(this).attr('data-'+ stageId + '-reply') && $(this).attr('data-'+ stageId + '-reply')== undefined){
								qrylist += '<div class="queryInnerbutton">';
								qrylist += '<icons title="Reply"><span class="material-icons reply reply-btn">reply</span></icons>';					
								//qrylist += '<icons title="Delete Query"><span class="material-icons delete del-btn">delete</span></icons>';						
								qrylist += '</div>';						
						}
						else if(!!$(this).attr('data-'+ stageId + '-reply') && $(this).attr('data-'+ stageId + '-reply')!= undefined){
								qrylist += '<div class="queryInnerbutton">';	
								//qrylist += '<icons title="Delete Query"><span class="material-icons delete del-btn">delete</span></icons>';	
								qrylist += '</div>';						
						}
					}
					else{
						qrylist += '<div class="queryInnerbutton">';									
						qrylist += '<icons title="Edit Query"><span style="color:green;font-size:22px;" onclick="editaqquery(this);" class="material-icons edit_note edit_note-btn">edit_note</span></icons>';
						qrylist += '<icons title="Delete Query"><span onclick="removeaqquery(this);" class="material-icons delete del-btn">delete</span></icons></div>';						
					}

					
					var stageList=stageName.split(',');
					for(var i = 0; i < stageList.length; i++)
					{					
						if(!!$(this).attr('data-'+ stageList[i] + '-reply') && $(this).attr('data-'+ stageList[i] + '-reply')!= undefined && stageId==stageList[i])
						{
							qrylist += '<div class="queryInner" stageId="' + stageId + '"><div class="queryInnerHeader"><span class="material-icons">person</span><p title="Author">'+ $(this).attr('data-' + stageId + '-user') +'</p><label>'+ $(this).attr('data-' + stageId + '-time') +'</label></div><div class="queryInnerBody">'+ stylesBtnrply +'<div class="queryTxt" role="textinputbox" onclick="ckeckForEditable(event, this)">'+ $(this).attr('data-' + stageId + '-reply') +'</div></div><div class="queryInnerbutton"><icons title="Edit"><span onclick="queryreply(this);" class="material-icons edit edit-btn">edit</span></icons><icons title="Delete"><span onclick="removequeryreply(this);"  class="material-icons delete reply-del">delete</span></icons></div></div>';
						}
						else if(!!$(this).attr('data-'+ stageList[i] + '-reply') && $(this).attr('data-'+ stageList[i] + '-reply')!= undefined && stageId !=stageList[i])
						{	
							qrylist += '<div class="queryInner" stageId="' + stageList[i] + '"><div class="queryInnerHeader"><span class="material-icons">person</span><p title="Author">'+ $(this).attr('data-' + stageList[i] + '-user') +'</p><label>'+ $(this).attr('data-' + stageList[i] + '-time') +'</label></div><div class="queryInnerBody"><div class="queryTxt" role="textinputbox" onclick="ckeckForEditable(event, this)">'+ $(this).attr('data-' + stageList[i] + '-reply') +'</div></div></div>';
						}								
					}			
					//
					qrylist += "</div>";
					num++;
				});
			
				// if (stageName.split(',').indexOf(stageId) != -1){
				if(qrylist && stageName.split(',').indexOf(stageId) < 0){
					var qrylist_select = '<div style="margin-bottom: 20px;text-align: left;" class="queryInnerbutton">';	
					qrylist_select +='<input type="checkbox" style="margin-left: 5px;" id="qryselctall" name="qryselctall"><label style="padding-left: 5px;margin-top: 2px;" for="qryselctall">Select All</label>';
					qrylist_select += '<icons id="del_allqueries" style="float: right;margin-right: 10px;" title="Delete Queries"><span style="font-size: 20px;"class="material-icons delete_forever del-btn">delete_forever</span></icons></div>';	
					qrylist = qrylist_select + qrylist;
				}


				$("#qryMain").html(qrylist);		

			}
			else{
				$("#qryMain").html('<div class="NoRecordFound" style="display: block;"><div><h2>No Queries Found</h2></div></div>');
			}
			// Remove query DELETE button- below stages
			if(stageId=='ap1')
			{						
				//$('.del-btn').parents('icons[title=Delete]').remove();
			}

			cleanup_undefined();
		}
	
	
	function editaqquery(e){	   
		$(e).parents('.query').find('.qry').prop('contenteditable', 'true').focus();
	}

    
$(document).on("blur", ".qry", function () { 
    var hrefid =$(this).attr('href-id');
	$(this).html(remove_tags($(this).html()));    
	$(tinyMCE.activeEditor.dom.select('.QUERY')[hrefid]).attr('data-query',$(this).html());
    $(this).removeAttr('contenteditable'); 
});

	
function queryreply(e){		 
		if (!!$(e).parents('.query').find('.queryInner[stageId="' + stageId + '"]').length) {      
			$(e).parents('.query').find('.queryInner[stageId="' + stageId + '"] .queryTxt').prop('contenteditable', 'true').focus();
			$(e).parents('.query').find('.queryInner[stageId="' + stageId + '"] .queryTxtEditor').show();        
			return
		}
	   $(e).parents('.query').find('.queryInner[stageId="' + stageId + '"] .queryTxt').prop('contenteditable', 'true').focus();
	   $(e).parents('.query').find('.queryInner[stageId="' + stageId + '"] .queryTxtEditor').show();       
	}


function removequeryreply(e)
	{
		var isdelete=0;

		tinyMCE.activeEditor.windowManager.confirm("Do you want to delete this query reply?", function(s)
        {
          if(s)
             {
                var hrefid= $(e).parents('.query').attr('href-id');
				 var navQry = tinyMCE.activeEditor.dom.select('.QUERY')[hrefid]; 
				 $(navQry).removeAttr('data-' + stageId + '-reply');
				 $(navQry).removeAttr('data-' + stageId + '-user');
				 $(navQry).removeAttr('data-' + stageId + '-time');
				 reinitialize_rightside_panel();
			     $(e).parents('.query').find('.queryInner[stageId="' + stageId + '"]').remove();				 	
             }
        });	
		if(isdelete==1){
			
		}			
	}

	
$(".reply-btn").click(function(event){	
	event.stopPropagation();
    if (!!$(this).parents('.query').find('.queryInner[stageId="' + stageId + '"]').length) {
        return
    }   
    var replybody = '<div class="queryInner" stageId="' + stageId + '"><div class="queryInnerHeader"><span class="material-icons">person</span><p title="Author">'+ usname +'</p><label>' + getCurrentTime() + '</label></div><div class="queryInnerBody">'+ stylesBtnrply +'<div class="queryTxt" role="textinputbox" onclick="ckeckForEditable(event, this)"></div></div><div class="queryInnerbutton"><icons title="Edit"><span onclick="queryreply(this);" class="material-icons edit edit-btn">edit</span></icons><icons title="Delete"><span onclick="removequeryreply(this);" class="material-icons delete reply-del">delete</span></icons></div></div>';   
    if ($(this).parents('.query').find('.queryInner[stageId="' + stageId + '"]').length == 0) {
        $(this).parents('.query').append(replybody);
        $(this).parents('.query').find('.queryInner[stageId="' + stageId + '"] .queryTxt').prop('contenteditable', 'true').focus();
        $(this).parents('.query').find('.queryInner[stageId="' + stageId + '"] .queryTxtEditor').show();        
    }    
});

$(function () {
        $("#qryselctall").click(function () {
            if ($(this).is(":checked")) {
			$(".qrycheck").prop('checked', true);                
            } else {
                $(".qrycheck").prop('checked', false);
            }
        });
    });

	////////
$("#del_allqueries").click(function(event){	
	
	if($('.qrycheck:checked').length<=0){
		tinyMCE.activeEditor.windowManager.alert('Please select queries');
		return;
	}
	var isdel=0;
				tinyMCE.activeEditor.windowManager.confirm("Are you sure to delete selected queries?", function(e)
                    {
                        if(e)
                        {                            
							 $(".qrycheck").each(function(src) 
								{
									if ($(this).is(":checked")) {
										$(tinyMCE.activeEditor.dom.select('.QUERY')[$(this).attr('href-id')]).addClass("isdelqrylist");
										isdel=1;
										} 			
								});	
								 if(isdel==1){
									$(tinyMCE.activeEditor.dom.select('.isdelqrylist')).remove();
									reinitialize_rightside_panel();
									}	
                        }						
                    }
                 );
});

function removeaqquery(e){
		tinyMCE.activeEditor.windowManager.confirm("Are you sure to delete this querie?", function(s)
        {
          if(s)
             {
                var hrefid= $(e).parents('.query').attr('href-id');
				$(tinyMCE.activeEditor.dom.select('.QUERY')[hrefid]).remove();
				reinitialize_rightside_panel();			     
             }
        });					
}


 $(".query").click(function(event) {
		event.stopPropagation();
		$(".query").removeClass("flink-active");
		$(this).addClass("flink-active");
		var hrefid= $(this).attr('href-id');
		var navQry = tinyMCE.activeEditor.dom.select('.QUERY')[hrefid]; 
		$(navQry)[0].scrollIntoView(true);		
 });
 
$(document).on("mousedown", "button[data-style],input[data-style]", function (event) {   
        event.stopPropagation();
        event.preventDefault();
        document.execCommand($(this).attr('data-style'), false, null);
    
}).on("blur", ".queryTxt", function () {
    $('.queryTxtEditor').hide();
    $(this).removeAttr('contenteditable');   
    $(this).find('.content-editable-wrapper').contents().unwrap();   
    $(this).html(remove_tags($(this).html()));    
    try {
		debugger;		
		 if (!!$(this).parents('.query').find('.queryInner[stageId="' + stageId + '"]').length) 
		 {
            if (!!$(this).text().trim().length) {	
				 var hrefid= $(this).parents('.query').attr('href-id');
				 var navQry = tinyMCE.activeEditor.dom.select('.QUERY')[hrefid]; 
				 $(navQry).attr('data-' + stageId + '-reply', $(this).html());
				 $(navQry).attr('data-' + stageId + '-user', usname);
				 $(navQry).attr('data-' + stageId + '-time', getCurrentTime());
            }
            else {
                 var hrefid= $(this).parents('.query').attr('href-id');
				 var navQry = tinyMCE.activeEditor.dom.select('.QUERY')[hrefid]; 
				 $(navQry).removeAttr('data-' + stageId + '-reply');
				 $(navQry).removeAttr('data-' + stageId + '-user');
				 $(navQry).removeAttr('data-' + stageId + '-time');
			  $(this).parents('.query').find('.queryInner[stageId="' + stageId + '"]').remove();
            }
            return
        }

    }
    catch (Error) {
        console.log(Error)
    }
});
       
	   function reinitialize_rightside_panel() {
	        
			var currentTab = $(".tablinks.active").attr("type");		
            var iframe_h = $('#example_ifr').height();
            $.post($listquery, {
                divheight: iframe_h,
                HOSTNAME: $HOSTNAME
            }).done(function(content) {
                $('#pstyleslist').html(content);				
				$('.tablinks[type="'+ currentTab +'"]').click();
            });
        }

		
	/*function getCurrentTime(){
		var objToday = new Date(),
                    months = new Array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'),
                    curMonth = months[objToday.getMonth()],
                    curYear = objToday.getFullYear(),
                    curHour = objToday.getHours() > 12 ? objToday.getHours() - 12 : (objToday.getHours() < 10 ? "0" + objToday.getHours() : objToday.getHours()),
                    curMinute = objToday.getMinutes() < 10 ? "0" + objToday.getMinutes() : objToday.getMinutes(),
                    curSeconds = objToday.getSeconds() < 10 ? "0" + objToday.getSeconds() : objToday.getSeconds(),
                    curMeridiem = objToday.getHours() > 12 ? "PM" : "AM";
                var today = objToday.getDate() + "/" + curMonth + "/" + curYear + " " + curHour + ":" + curMinute + curMeridiem;
				return today;
	}*/


function remove_tags(html) {
    var html = html.replace("<b>", "||b||").replace("</b>", "||/b||");
    html = html.replace("<i>", "||i||").replace("</i>", "||/i||");
    html = html.replace("<u>", "||u||").replace("</u>", "||/u||");
    html = html.replace("<sup>", "||sup||").replace("</sup>", "||/sup||");
    html = html.replace("<sub>", "||sub||").replace("</sub>", "||/sub||");
    var tmp = document.createElement("DIV");
    tmp.innerHTML = html;
    html = tmp.textContent || tmp.innerText;
    html = html.replace("||b||", "<b>").replace("||/b||", "</b>");
    html = html.replace("||i||", "<i>").replace("||/i||", "</i>");
    html = html.replace("||u||", "<u>").replace("||/u||", "</u>");
    html = html.replace("||sup||", "<sup>").replace("||/sup||", "</sup>");
    html = html.replace("||sub||", "<sub>").replace("||/sub||", "</sub>");
    return html;
}


/*----------- QUERIES END -----------*/ // -- sankar




/*----------- COMMENT START -----------*/ // -- sankar


   //CONFIGURATION -  the below list of stages are allowed to reply to the comments.
   var comment_stageName= 'query,AP1,AP2,AP3,AP4,AP5,CORRECTION1,CORRECTION2,CORRECTION3,CORRECTION4,CORRECTION5,CORRECTION6,CORRECTION7,CORRECTION8,CORRECTION9,CORRECTION10';

   Showcommentlist();
   
   function Showcommentlist()
	  {
			var comment = "";
			var comntlist = "";
			var selectcomment = tinyMCE.activeEditor.dom.select('.AUTHOR-COMMENT');
			var num = 0;
			var reply_comment = "";
			if($(selectcomment).length>0)
			{
				
					/// Read the comment from editor and listed in rights side panel ///////
				$(selectcomment).each(function() {
					clname = $(this).attr("data-comment");
					
					if (clname != undefined) {
						comment = $(this).attr("data-comment"); //$(this).data("comment");
						comntlist += "<div class='comment' stageId='" + stageId + "' href-id='" + num + "' >";
						if(comment_stageName.split(',').indexOf(stageId) < 0){
							comntlist+="<input class='comntcheck' type='checkbox' style='margin-right: 5px;' href-id='" + num + "' >";
						}
						comntlist += "<div id='comnt' role='textinputbox' class='comnt' href-id='" + num + "' title='Click this comment'><div href-id='" + num + "' class='commentInneruserHeader'><span class='material-icons'>person</span><p title='Author'>"+ $(this).attr('data-user') +"</p><label>"+ $(this).attr('data-time') +"</label></div><div role='textinputbox' href-id='" + num + "' class='datacomment'>" + comment + "</div></div>";									   					
					} else {
						var comnt = $(this).text();
						comntlist += "<div class='comment'>";
						comntlist += "<div id='comnt' role='textinputbox' class='comnt' href-id='" + num + "' title='Click this comment'><div href-id='" + num + "' class='commentInneruserHeader'><span class='material-icons'>person</span><p title='Author'>"+ $(this).attr('data-user') +"</p><label>"+ $(this).attr('data-time') +"</label></div><div role='textinputbox' href-id='" + num + "' class='datacomment'>" + comnt + "</div></div>";									   					
					}
				
					if (comment_stageName.split(',').indexOf(stageId) != -1)
					{
						if(!$(this).attr('data-'+ stageId + '-reply') && $(this).attr('data-'+ stageId + '-reply')== undefined && stageId != $(this).attr('data-stage')){
								comntlist += '<div class="commentInnerbutton">';
								comntlist += '<icons title="Reply"><span class="material-icons reply commentreply-btn">reply</span></icons>';					
								//comntlist += '<icons title="Delete comment"><span class="material-icons delete del-btn">delete</span></icons>';						
								comntlist += '</div>';						
						}
						else if(!!$(this).attr('data-'+ stageId + '-reply') && $(this).attr('data-'+ stageId + '-reply')!= undefined && stageId != $(this).attr('data-stage')){
								comntlist += '<div class="commentInnerbutton">';	
								//comntlist += '<icons title="Delete comment"><span class="material-icons delete del-btn">delete</span></icons>';	
								comntlist += '</div>';						
						}

						if(stageId == $(this).attr('data-stage')){
							comntlist += '<div class="commentInnerbutton">';									
							comntlist += '<icons title="Edit comment"><span style="color:green;font-size:22px;" onclick="editcomment(this);" class="material-icons edit_note edit_note-btn">edit_note</span></icons>';
							comntlist += '<icons title="Delete comment"><span onclick="removecomment(this);" class="material-icons delete del-btn">delete</span></icons></div>';						
						}
					}
					else{
						comntlist += '<div class="commentInnerbutton">';									
						comntlist += '<icons title="Edit comment"><span style="color:green;font-size:22px;" onclick="editcomment(this);" class="material-icons edit_note edit_note-btn">edit_note</span></icons>';
						comntlist += '<icons title="Delete comment"><span onclick="removecomment(this);" class="material-icons delete del-btn">delete</span></icons></div>';						
					}

					
					var stageList=comment_stageName.split(',');
					for(var i = 0; i < stageList.length; i++)
					{					
						if(!!$(this).attr('data-'+ stageList[i] + '-reply') && $(this).attr('data-'+ stageList[i] + '-reply')!= undefined && stageId==stageList[i])
						{
							comntlist += '<div class="commentInner" stageId="' + stageId + '"><div class="commentInnerHeader"><span class="material-icons">person</span><p title="Author">'+ $(this).attr('data-' + stageId + '-user') +'</p><label>'+ $(this).attr('data-' + stageId + '-time') +'</label></div><div class="commentInnerBody">'+ stylesBtnrply +'<div class="commentTxt" role="textinputbox" onclick="ckeckForEditable(event, this)">'+ $(this).attr('data-' + stageId + '-reply') +'</div></div><div class="commentInnerbutton"><icons title="Edit"><span onclick="commentreply(this);" class="material-icons edit edit-btn">edit</span></icons><icons title="Delete"><span onclick="removecommentreply(this);"  class="material-icons delete reply-del">delete</span></icons></div></div>';
						}
						else if(!!$(this).attr('data-'+ stageList[i] + '-reply') && $(this).attr('data-'+ stageList[i] + '-reply')!= undefined && stageId !=stageList[i])
						{	
							comntlist += '<div class="commentInner" stageId="' + stageList[i] + '"><div class="commentInnerHeader"><span class="material-icons">person</span><p title="Author">'+ $(this).attr('data-' + stageList[i] + '-user') +'</p><label>'+ $(this).attr('data-' + stageList[i] + '-time') +'</label></div><div class="commentInnerBody"><div class="commentTxt" role="textinputbox" onclick="ckeckForEditable(event, this)">'+ $(this).attr('data-' + stageList[i] + '-reply') +'</div></div></div>';
						}								
					}			
					//
					comntlist += "</div>";
					num++;
				});
			
				
				if(comntlist && comment_stageName.split(',').indexOf(stageId) < 0){
					var comntlist_select = '<div style="margin-bottom: 20px;text-align: left;" class="commentInnerbutton">';	
					comntlist_select +='<input type="checkbox" style="margin-left: 5px;" id="comntselctall" name="comntselctall"><label style="padding-left: 5px;margin-top: 2px;" for="comntselctall">Select All</label>';
					comntlist_select += '<icons id="del_allcomments" style="float: right;margin-right: 10px;" title="Delete Comments"><span style="font-size: 20px;"class="material-icons delete_forever del-btn">delete_forever</span></icons></div>';	
					comntlist = comntlist_select + comntlist;
				}


				$("#commentMain").html(comntlist);		

			}
			else{
				$("#commentMain").html('<div class="NoRecordFound" style="display: block;"><div><h2>No Comments Found</h2></div></div>');
			}
			cleanup_undefined();
		}
	

	
function editcomment(e){	   
		$(e).parents('.comment').find('.datacomment').prop('contenteditable', 'true').focus();
}

    
$(document).on("blur", ".datacomment", function () { 
    var hrefid =$(this).attr('href-id');
	$(this).html(remove_tags($(this).html()));    
	$(tinyMCE.activeEditor.dom.select('.AUTHOR-COMMENT')[hrefid]).attr('data-comment',$(this).html());
    $(this).removeAttr('contenteditable'); 
});


function commentreply(e){		 
		if (!!$(e).parents('.comment').find('.commentInner[stageId="' + stageId + '"]').length) {      
			$(e).parents('.comment').find('.commentInner[stageId="' + stageId + '"] .commentTxt').prop('contenteditable', 'true').focus();
			$(e).parents('.comment').find('.commentInner[stageId="' + stageId + '"] .queryTxtEditor').show();        
			return
		}
	   $(e).parents('.comment').find('.commentInner[stageId="' + stageId + '"] .commentTxt').prop('contenteditable', 'true').focus();
	   $(e).parents('.comment').find('.commentInner[stageId="' + stageId + '"] .queryTxtEditor').show();       
	}


function removecommentreply(e)
	{
		var isdelete=0;

		tinyMCE.activeEditor.windowManager.confirm("Do you want to delete this comment reply?", function(s)
        {
          if(s)
             {
                var hrefid= $(e).parents('.comment').attr('href-id');
				 var navQry = tinyMCE.activeEditor.dom.select('.AUTHOR-COMMENT')[hrefid]; 
				 $(navQry).removeAttr('data-' + stageId + '-reply');
				 $(navQry).removeAttr('data-' + stageId + '-user');
				 $(navQry).removeAttr('data-' + stageId + '-time');
				 reinitialize_rightside_panel();
			     $(e).parents('.comment').find('.commentInner[stageId="' + stageId + '"]').remove();				 	
             }
        });	
		if(isdelete==1){
			
		}			
	}

	$(".commentreply-btn").click(function(event){	
	event.stopPropagation();
    if (!!$(this).parents('.comment').find('.commentInner[stageId="' + stageId + '"]').length) {
        return
    }   
    var replybody = '<div class="commentInner" stageId="' + stageId + '"><div class="commentInnerHeader"><span class="material-icons">person</span><p title="Author">'+ usname +'</p><label>' + getCurrentTime() + '</label></div><div class="commentInnerBody">'+ stylesBtnrply +'<div class="commentTxt" role="textinputbox" onclick="ckeckForEditable(event, this)"></div></div><div class="commentInnerbutton"><icons title="Edit"><span onclick="commentreply(this);" class="material-icons edit edit-btn">edit</span></icons><icons title="Delete"><span onclick="removecommentreply(this);" class="material-icons delete reply-del">delete</span></icons></div></div>';   
    if ($(this).parents('.comment').find('.commentInner[stageId="' + stageId + '"]').length == 0) {
        $(this).parents('.comment').append(replybody);
        $(this).parents('.comment').find('.commentInner[stageId="' + stageId + '"] .commentTxt').prop('contenteditable', 'true').focus();
        $(this).parents('.comment').find('.commentInner[stageId="' + stageId + '"] .queryTxtEditor').show();        
    }    
});



$(function () {
        $("#comntselctall").click(function () {
            if ($(this).is(":checked")) {
			$(".comntcheck").prop('checked', true);                
            } else {
                $(".comntcheck").prop('checked', false);
            }
        });
    });

	////////
$("#del_allcomments").click(function(event){	
	
	if($('.comntcheck:checked').length<=0){
		tinyMCE.activeEditor.windowManager.alert('Please select comments');
		return;
	}
	var isdel=0;
				tinyMCE.activeEditor.windowManager.confirm("Are you sure to delete selected comments?", function(e)
                    {
                        if(e)
                        {                            
							 $(".comntcheck").each(function(src) 
								{
									if ($(this).is(":checked")) {
										$(tinyMCE.activeEditor.dom.select('.AUTHOR-COMMENT')[$(this).attr('href-id')]).addClass("isdelcommentlist");
										isdel=1;
										} 			
								});	
								 if(isdel==1){
									$(tinyMCE.activeEditor.dom.select('.isdelcommentlist')).remove();
									reinitialize_rightside_panel();
									}	
                        }						
                    }
                 );
});

function removecomment(e){
		tinyMCE.activeEditor.windowManager.confirm("Are you sure to delete this comment?", function(s)
        {
          if(s)
             {
                var hrefid= $(e).parents('.comment').attr('href-id');
				$(tinyMCE.activeEditor.dom.select('.AUTHOR-COMMENT')[hrefid]).remove();
				reinitialize_rightside_panel();			     
             }
        });					
}

$(".comment").click(function(event) {
		event.stopPropagation();
		$(".comment").removeClass("flink-active");
		$(this).addClass("flink-active");
		var hrefid= $(this).attr('href-id');
		var navQry = tinyMCE.activeEditor.dom.select('.AUTHOR-COMMENT')[hrefid]; 
		$(navQry)[0].scrollIntoView(true);		
 });
 
$(document).on("mousedown", "button[data-style],input[data-style]", function (event) {   
        event.stopPropagation();
        event.preventDefault();
        document.execCommand($(this).attr('data-style'), false, null);
    
}).on("blur", ".commentTxt", function () {
    $('.queryTxtEditor').hide();
    $(this).removeAttr('contenteditable');   
    $(this).find('.content-editable-wrapper').contents().unwrap();   
    $(this).html(remove_tags($(this).html()));    
    try {
		debugger;		
		 if (!!$(this).parents('.comment').find('.commentInner[stageId="' + stageId + '"]').length) 
		 {
            if (!!$(this).text().trim().length) {	
				 var hrefid= $(this).parents('.comment').attr('href-id');
				 var navQry = tinyMCE.activeEditor.dom.select('.AUTHOR-COMMENT')[hrefid]; 
				 $(navQry).attr('data-' + stageId + '-reply', $(this).html());
				 $(navQry).attr('data-' + stageId + '-user', usname);
				 $(navQry).attr('data-' + stageId + '-time', getCurrentTime());
            }
            else {
                 var hrefid= $(this).parents('.comment').attr('href-id');
				 var navQry = tinyMCE.activeEditor.dom.select('.AUTHOR-COMMENT')[hrefid]; 
				 $(navQry).removeAttr('data-' + stageId + '-reply');
				 $(navQry).removeAttr('data-' + stageId + '-user');
				 $(navQry).removeAttr('data-' + stageId + '-time');
			  $(this).parents('.comment').find('.commentInner[stageId="' + stageId + '"]').remove();
            }
            return
        }

    }
    catch (Error) {
        console.log(Error)
    }
});
     
/*----------- COMMENT END -----------*/ // -- sankar



	 $('div[role="textinputbox"]').keydown(function (event) {
    if(event.which=='13')
	{
	   $(this).removeAttr('contenteditable'); 
		return false;
	}	
	
});

function cleanup_undefined(){
	$(".queryInnerHeader p,.queryInnerHeader label, .commentInneruserHeader p ,.commentInneruserHeader label,.commentInnerHeader p,.commentInnerHeader label").each(function() {
		$(this).text($(this).text().replace('undefined',''));
	});

}
    </script>
</body>

</html>