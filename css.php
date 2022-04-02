<?php header("content-type: text/css"); ?>
/*<style type="text/css">/**/


:root{
    --primary: white;
    --optional: black;
    --optional-2: #440012;
}
body{
	background: #212529;
	margin: 0;
	padding: 0;
	min-height: 100vh;
	font-family: sans-serif;
	font-size: 14px;
	user-select: none;
	max-width: calc(100vw - 10px);
    min-width: 500px;
}
select:hover{
	background: white !important;
	color: red !important;
}
select{
	text-align: left !important;
}
select:focus{
	box-shadow: none !important;
}
input:hover{
	background: white !important;
	color: red !important;
}
input{
	text-align: left !important;
}
input:focus{
	box-shadow: none !important;
}
textarea:hover{
	background: white !important;
	color: red !important;
}
textarea{
	text-align: left !important;
}
textarea:focus{
	box-shadow: none !important;
}
::-webkit-scrollbar {
  width: 10px;
  cursor: pointer;
}::-webkit-scrollbar-track {
  background: #f1f1f1;
}::-webkit-scrollbar-thumb {
  background: #d0d0d0;
}::-webkit-scrollbar-thumb:hover {
  background: #555;
}
input {
	outline: none;
	border-color: solid lightgray;
	font-size: 12px;
	padding: 4px 8px;
}
*{
	font-family: Raleway,sans-serif;
	user-select:  text;
	pointer-events: auto;
	transition: all 0.15s ease-in-out;
	box-sizing: border-box;
}

a, span{
    display: inline-block;
}

img{
	height: auto;
	width: 100%;
	object-fit: cover;
}
.data-loader {
	background: white;height: 1px;width: 100%;max-width: 100vw;
	transition: all 1s ease-in-out;
}
.data-loader .loaded{
	width: 0%;height: 100%;background: #2ca96c;
	transition: all 1s ease-in-out;
}


/** animated border **/
.anim_border{
    border: 2px solid;
    --angle: 0deg;
    border-image: linear-gradient(var(--angle), rgba(0,249,255,1) 0%, rgba(255,0,59,1) 100%) 1;
    animation: 0.3s anim_border linear infinite;
}
@keyframes anim_border {
	to {
	--angle: 360deg;
	}
}
@property --angle {
	syntax: '<angle>';
	initial-value: 0deg;
	inherits: false;
}



/* error style */
.server_returns_error{
	max-width: 100vw;
	height: calc(100vh - 85px);
	display: block;
	pointer-events: none;
	cursor: not-allowed;
	overflow: hidden;
	position: relative;
	z-index: -1;
}
.server_returns_error .error_block{
	position: absolute;
	top:  40%;
	left: 50%;
	transform: translate(-50%, -50%);
	display: inline-block;
	backdrop-filter: blur(10px);
	border-radius: 10px;
	padding: 30px;
	background: rgb(255 255 255 / 20%);
	margin: 16px;
}
.server_returns_error .error_block span{
	display: block;
	text-align: center;
}
.server_returns_error .error_block .error_code{
	font-size: 150px;
  	font-family: fantasy;
}
.server_returns_error .error_block .error_code:after{
	content: '!';
}
.server_returns_error .error_block .error_desc{
	font-family: cursive;
  font-weight: bold;
  font-size: 30px;
}


.admin_page{
	padding: 0px 32px;
}
.admin_page .top_banner{
    margin: 0 -32px;
}
.admin_page .top_banner .menu-bar{
    display: none;
}
.admin_page .top_banner .top_banner_inset .title span:after {
    content: " Admin";
    color: #f80145;
}
.admin_page .home_page_logo img{
    width: 200px;
    height: auto;
    object-fit: cover;
}
.admin_page .menu_bar {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    align-content: center;
    background: var(--optional-2);
    margin: 0 -32px;
    box-shadow: 5px 5px 15px -5px black;
    flex-wrap: wrap;
    position: sticky;
    top: 0;
    white-space: nowrap;
    z-index: 9;
}
.admin_page button:hover{
    color: #ff0045;
}
.admin_page button{
    background: unset;
    cursor: pointer;
    padding: 8px 16px;
    font-size: 15px;
    color: #ff0052;
    border: 1px solid #ff0052;
    background: white;
    font-weight: bold;
    border-radius: 3px;
}
.admin_page .menu_bar .menu_item {
    padding: 32px 4px;
    color: var(--primary);
    font-size: 15px;
    text-transform: capitalize;
    cursor: pointer;
    width: 100%;
    text-align: center;
    flex: 14.28%;
}
.admin_page .menu_bar .menu_item:hover{
	background: #ff0052;
    color: #ffffff;
}
.admin_page .menu_bar .menu_item[name="logout"]{
    text-align: center !important;
    color: white;
    background: red;
    border: 0;
    margin: 0;
}
.newsletter {
    padding: 32px 32px;
    color: white;
}
.admin_page .menu_bar .menu_item[name="logout"]:hover{
    color: red;
    background: white !important;
}
input:disabled, input:disabled:hover{
    color: gray !important;
    border-color: gray;
    background: transparent !important;
}



.settings_main{
	padding: 64px 0;
	max-width: 600px;
	margin: 0 auto;
}
.settings_main .settings_item{
	margin: 32px 0;
}
.settings_main .settings_img_change{
	max-width: 300px;
	cursor: pointer;
	border: 1px solid #ff0052;
}
.settings_main .settings_title{
	font-size: 16px;
	font-family: cursive;
	color: var(--primary);
}
.settings_main .settings_item input.change_text, .settings_main .settings_item textarea.change_text {
    width: 100%;
    padding: 8px 16px;
    font-size: 15px;
    color: #ff0052;
    border: 1px solid #ff0052;
    border-radius: 3px;
    margin: 8px 0;
    background: white;
    cursor: pointer;
    resize: vertical;
}
.settings_main .settings_item textarea.change_text{
    height: 350px;
}
.settings_main .settings_item input.change_text[type='submit'], .settings_main .settings_item textarea.change_text[type='submit']{
    color: inherit;
}
.settings_main .settings_item input.change_text:focus, .settings_main .settings_item textarea.change_text:focus{
    color: inherit;
}
.settings_main .settings_item .result_change_text{
	color: green;
    height: 20px;
    font-size: 15px;
}

table{
	overflow-x: hidden;
	width: 100%;
	margin: 64px 0;
}
table tr{
	background: #ffd9d9;
}
table tr td{
	padding: 16px;
}
table thead tr th{
	padding: 16px;
}
table thead tr{
	background: #ff7b7b;
    color: white;
}
table tr:nth-child(even) {
  background-color: #f2f2f2;
}

button:disabled{
    color: gray !important;
    border-color: solid gray;
}


hr{
	border-top: 0px solid transparent;
	border-bottom: 1px solid #a9a9a9 !important;
}





/*Slider functionality*/

.slider:hover{
	box-shadow: 2px 2px 10px -5px grey;
}
.slider {
	box-shadow: 0px 0px 10px 0px transparent;
	width: 100%;
	height: 100%;
	overflow: hidden;
	position: relative;
	transition: all 0.3s;
}
.slider .images {
	width: 100%;
    height: 100%;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
}
.slider .images .image {
	height: 100%;
	min-width: 100%;
	position: relative;
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;
}
.full_screen_view img{
	height: 100vh;
	width: 100vw;
	object-fit: contain;
	padding: 5vh 5vw;
}

.slider .images .image .over_button:after{
	content: "";
	color: #ff0025;
	background: transparent;
	font-size: 20px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}
.slider .images .image .over_button{
	position: absolute;
    top: 10px;
    height: 40px;
    width: 40px;
    right: 10px;
    cursor: pointer;
    font-size: 0px;
    border-radius: 50%;/*
    box-shadow: 0 0 20px 4px #00000059;*/
    backdrop-filter: blur(1px);
}
.full_screen_view{
	position: fixed;
    height: 0vh;
    width: 0vw;
    background: #000000c4;
    z-index: 999999;
    top: 0;
    left: 0;
    cursor: zoom-out;
    transition: all 0.5s ease-in-out;
    overflow-x: hidden;
    overflow-y: scroll;
}
/*.full_screen_view:after {
    content: "X";
    color: white;
    position: fixed;
    right: 4%;
    top: 5%;
    display: inline-flex;
    width: 35px;
    height: 35px;
    font-family: cursive;
    border-radius: 50%;
    border: 1px solid;
    background: transparent;
    font-size: 20px;
    align-content: center;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}*/
.slider .images .image img{
	width: 100%;
	height: 100%;
	pointer-events: none;
	object-fit: cover;
	backdrop-filter:  blur(50px);
}

.slider .dots {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    display: flex;
    flex-wrap: nowrap;
    flex-direction: row;
    margin: 0 auto;
    justify-content: center;
    opacity: 1;
}
.slider .dots .dotX:hover .dot{
	transform: scale(1.5);
	box-shadow: 0px 0px 0px 0px #ff00b1, 0px 0px 4px 1px #ff00b1, 0px 0px 8px 2px #ff00b1, 0px 0px 20px 4px #ff00b1;
}
.slider .dots .dotX {
    cursor: pointer;
    padding: 16px;
}
.slider .dots .dot{
	height: 8px;
	width: 8px;
	overflow: hidden;
	border-radius: 50%;
	cursor: pointer;
	margin: 0 auto;
	background: white;
	border: 1px #ff00b1;
}
.slider .buttons {
	width: 0px;
	height: 0px;
	opacity: 0;
}
.slider:hover .buttons, .slider:hover .dots{
	opacity: 1;
}
.slider .prev{
	background: linear-gradient(90deg, #0000004d, transparent);
	left: 0;
}
.slider .next{
	background: linear-gradient(270deg, #0000004d, transparent);
	right: 0;
}
.slider:hover .prev, .slider:hover .next {
    cursor: pointer;
    font-size: 32px;
    padding: 0 20px;
    position: absolute;
    top: 0;
    bottom: 0;
}
.slider .buttons .prev, .slider .buttons .next {
    transition: all 0.3s ease-in-out;
    color: white;
    height: 100%;
    text-align: center;
    display: grid;
    align-items: center;
    position: absolute;
}







.toTop{
    position: fixed;
    bottom: 10%;
    right: 40px;
    z-index: 99;
    cursor: pointer;
    background: white;
    border: 1px solid rgb(249 193 166);
    padding: 10px;
    border-radius: 50%;
    text-align: center;
    display: none;
    color: rgb(249 193 166);
    width: 40px;
    height: 40px;
}


@media (max-width: 992px){

	
}
@media (max-width: 768px){
	
}
@media (max-width: 575px){
	
}

.notification {
    cursor: zoom-out;
    user-select: none;
    backdrop-filter: blur(10px);
    color: gray;
    padding: 0px 0px;
    height: 0px;
    border-radius: 300px;
    font-family: cursive;
    letter-spacing: 1px;
    font-size: 0px;
    border: 1px solid;
    margin-bottom: 0px;
    opacity: 0;
    margin-bottom: 0px;
    overflow: hidden;
    font-weight: lighter;
    background: rgba(0, 0, 0, 0.5);
}

#event_5 {
    user-select: none;
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: fit-content;
    transition: all 0.3s ease-in-out;
    z-index: 999999999;
}



.neon_light {
    font-size: 50px;
    font-family: /*"Vibur",*/ cursive;
    color: #fff;
    text-shadow: 0 0 7px #fff, 0 0 10px #fff, 0 0 21px #fff, 0 0 42px #fba500, 0 0 82px #fba500, 0 0 92px #fba500, 0 0 102px #fba500, 0 0 151px #fba500;
}
pre{
    user-select: text;
}












/*****************************************************************************************/
.top_banner {
    position: relative;
    z-index: 9;
}
.top_banner .title{
    text-align: center;
    color: white;
    font-size: 50px;
    font-weight: bold;
    padding:  16px 0;
    cursor: pointer;
    width: max-content;
    margin: 0 auto;
}
.top_banner .title:hover{
    transform: scale(1.1);
}
.top_banner .top_banner_outset{
    height: 100vh;
    background-color: rgb(0 0 0 / 50%);
    position: relative;
}
.top_banner .top_banner_outset .top_banner_inset{
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    width: 100%;
    transform: translate(0%, -50%);
    padding: 0 16px;
    color: white;
}
.social-icons{
    display: flex;
    margin: 0 auto;
    width: max-content;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    align-content: center;
    flex-wrap: wrap;
    /* border-radius: 6px;
    background: #ffffff1f;
    backdrop-filter: blur(3px); */
}
.social-icons .social-logo{
    font-size: 25px;
    padding: 16px;
}
.social-icons .social-logo:hover{
    transform: scale(1.3) rotate(-10deg);
    cursor: pointer;
    color: white !important;
}
.menu-bar {
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    flex-wrap: nowrap;
    flex-direction: row;
}
.menu-bar .menu-item {
    height: 60px;
    padding: 0 16px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    align-content: center;
    flex-wrap: nowrap;
    flex-direction: row;
    border: 1px solid transparent;
    text-transform: uppercase;
    font-weight: bold;
}
.menu-bar .menu-item img{
    height: 100%;
}
.menu-bar .menu-item:hover {
    color: #ff0052;
    transform: scale(1.1);
}

.photos-grid {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
    align-content: center;
}
.photos-grid form.delete_photo {
    position: absolute;
    right: 0;
    top: 0;
}
.photos-grid .photos-item {
    width: 300px;
    height: 200px;
    margin: 16px 8px 16px 0px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
}
.photos-grid .photos-item .title {
    position: absolute;
    bottom: -100%;
    left: 0;
    background: black;
    color: white;
    width: 100%;
    padding: 8px;
    white-space: nowrap;
}
.photos-grid .photos-item .date {
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    background: black;
    color: white;
    padding: 8px;
}
.photos-grid .photos-item:hover .title{
    bottom: 0;
    max-height: 32px;
    overflow: hidden;
}
.photos-grid .photos-item:hover .date{
    top: 0;
}
.photos-grid .photos-item:hover .photo{
    transform: scale(1.1);
}
.photos-grid .photos-item .photo{
    transform: scale(1);
}
.photos {
    padding: 0 32px 64px 32px;
}
h1{
    color: white;
    text-align: center;
}
.about-me{
    text-align: center;
    padding-bottom: 0;
    background: url('/cdn/3.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.about-me span {
    color: white;
    padding: 16px;
    max-width: 500px;
    font-size: 14px;
    margin: 0 auto;
    letter-spacing: 3px;
    line-height: 1.3;
    font-family: monospace;
}
.events {
    background: url(/cdn/8.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: top;
    background-attachment: fixed;
}
.events .events-x{
    background: #000000ad;
    backdrop-filter: blur(5px);
    padding: 0px 32px 32px 32px;
}
.events table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  color: white;
}

.events table thead tr{
    background: black !important;
    color: gray;
    text-align: center;
  font-size: 14px;
}
.events table tbody tr td {
  text-align: left;
  font-size: 13px;
}
.events table tr th, .events table tr td {
  padding: 16px;
}
.events table tr:nth-child(odd) {
  background-color: #00000052;
}
.events table tr:nth-child(even) {
  background-color: #000000b5;
}
.menu-bars-top {
    position: fixed;
    top: 0;
    width: 100%;
    left: 0;
    right: 0;
    z-index: 8;
    background: black;
    color: white;
}
view {
    height: 64px;
    display: block;
}

.contact-me{
    text-align: center;
    background: url('/cdn/7.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}
.dark-shadow{
    background-color: #000000c2;
    padding-bottom: 64px;
}

.dark-shadow-low{
    background-color: #00000096;
    padding-bottom: 64px;
}
.contact-way {
    width: 400px;
    margin: 0 auto;
    padding: 16px;
    display: flex;
    align-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: nowrap;
    color: white;
}
.contact-way .contact-way-logo {
    font-size: 24px;
}
.contact-way .contact-way-data {
    padding: 16px;
    font-size: 14px;
}
.contact-way a.contact-way-data span{
    color: white;
    text-transform: lowercase;
}
.contact-way a.contact-way-data:hover span{
    text-decoration: underline !important;
    color: red;
}


.copyright {
    padding: 32px;
    background: #000214;
}
.copyright .copyright-text {
    display: flex;
    color: white;
    font-size: 12px;
    margin: 0 auto;
    align-items: center;
    align-content: center;
    flex-wrap: wrap;
    justify-content: space-between;
}
.copyright .copyright-text a{
    color: #ff0045;
    text-decoration: none;
}
.copyright .copyright-text a:hover{
    color: #00ff5a;
    text-decoration: underline;
}
.copyright .copyright-text *{
    font-family: monospace;
}

@media only screen and (max-width: 768px) {
    body{
        font-size: 11px;
    }
    .menu-item-login{
        display: none !important;
    }   
    .admin_page .menu_bar .menu_item{
        font-size: 11px;
    }
    .top_banner .title{
        font-size: 35px;
    }
}