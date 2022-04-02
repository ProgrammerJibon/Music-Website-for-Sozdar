/* <script type="text/javascript">/**/
function viewToggle(div) {
	div.classList.toggle("show")
}
function viewRemove(div) {
	div.classList.remove("show")
}



const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};


var last_url = "";

function rgba(r, g, b, a){
	if (r < 0 || r > 255) {
		r = 0;
	}
	if (g < 0 || g > 255) {
		g = 0;
	}
	if (b < 0 || b > 255) {
		b = 0;
	}
	if (a < 0 || a > 1) {
		a = 1;
	}
	var data = "rgba("+r+", "+g+", "+b+", "+a+")";
	return data;
}

function byId(id){
	if (document.getElementById(id)) {
		return document.getElementById(id);
	}else{
		return false;
	}
}

function notification(text, color){
	if (document.getElementById("event_5")) {
		var view = document.getElementById("event_5");
		var newDiv = document.createElement("div");
		newDiv.classList.add("notification");
		newDiv.innerHTML = text;
		view.appendChild(newDiv);
		newDiv.onclick=e=>{
			setTimeout(v=>{
				newDiv.style = "";
			}, 100);
			setTimeout(v=>{
				newDiv.remove();
			}, 300);
		}
		setTimeout(v=>{
			newDiv.style = "";
		}, 20000);
		setTimeout(v=>{
			newDiv.remove();
		}, 20300);
		var newInterval = setInterval(e=>{
			colorx = rgba(Math.floor(Math.random()*255+1),Math.floor(Math.random()*255+1),Math.floor(Math.random()*255+1), 1);
			newDiv.style = "color:"+colorx+";padding: 8px 16px;height: 35px;border: 1px solid;opacity: 1;border-radius: 3px;font-size: 11px;margin-bottom: 4px;";
		},250);

		setTimeout(v=>{
			newDiv.style = "color:"+color+";padding: 8px 16px;height: 35px;border: 1px solid;opacity: 1;border-radius: 3px;font-size: 11px;margin-bottom: 4px;";
			clearInterval(newInterval);
		}, 3000);
	}
}

function loadLink(url, data){
	// loadLink('/pages.php', [['name','jibon'],['bool','false']]).then(result=>{console.log(result)})
	return new Promise(function(resolve, reject){

		var http = new XMLHttpRequest();
		var loader = document.querySelector(".progressbar .progress");
		loader.style = `width: 20%;`;
		http.open("POST", url);
		var formData = new FormData();
		if (data != null) {
			data = [...data];
			data.forEach((post)=>{
			  if (post[0] && post[1]) {
			  	formData.append(post[0], post[1]);
			  }
			})
		}
		http.send(formData);
		http.onprogress=(e)=>{
			e.total = contentLength = parseInt(e.target.getResponseHeader('x-decompressed-content-length'), 10);
			var loaded = e.loaded*100/e.total;
			loader.style = `width: 10%;`;
			if (loaded < 100) {
				loader.style = `width: ${Math.floor(loaded)}%;`;
			}
			loader.innerHTML = "";
			// console.log(e);
		}
		http.onload=()=>{
			resolve(JSON.parse(http.responseText));
			loader.style = `width: 100%;`;
			setTimeout(()=>{
				loader.style = '';
			}, 1000)
			if (contentDisposition = http.getResponseHeader('content-disposition')) {
				console.log(contentDisposition.split('filename=')[1].split(';')[0]);
			}
			
		}
	});
}
function imageSlider(div, imageLinks, links, extras) {

	/*window.onresize=()=>{
		setTimeout(()=>{
			div.innerHTML = "";
			imageSlider(div, imageLinks, links, extras)
		}, 1000)
	}*/

	extras.dots = extras.dots || false;
	extras.buttons = extras.buttons || false;
	let interval = extras.interval || 1000;

	const slideWidth = div.clientWidth;
	const slideHeight = div.clientHeight;

	var slider = document.createElement("div");
	slider.classList.add("slider");
	slider.style.width = slideWidth+"px";

	var images = document.createElement("div");
	images.classList.add("images");

	var dots = document.createElement("div");
	dots.classList.add("dots");

	var image = [];
	var dotting = [];

	var full_screen_view = document.createElement("div");
	full_screen_view.classList.add("full_screen_view");
	var fsImage = document.createElement("img");
	full_screen_view.appendChild(fsImage);

	full_screen_view.onclick=()=>{
		full_screen_view.style.width = "0vw";
		full_screen_view.style.height = "0vw";
	}
if (imageLinks.length == 1) {
		interval = 3210;
	}
	imageLinks.forEach((imageLink, index)=>{
		var newImage = document.createElement("div");
		newImage.classList.add("image");
		var imageSrc = document.createElement("img");
		imageSrc.src = imageLink;
		imageSrc.style.width = slideWidth;
		imageSrc.style.height = slideHeight;
		newImage.appendChild(imageSrc);
		newImage.style.background = `url(${imageLink})`;
		images.appendChild(newImage);

		if (links[index]) {
			newImage.onclick=()=>{
				window.location.href = links[index]
			}
		}else if (extras.expand) {
			var newDivImg = document.createElement("div");
			newDivImg.classList.add("over_button");
			newDivImg.classList.add("fas");
			newDivImg.classList.add("neon_light");
			newImage.appendChild(newDivImg);
			newDivImg.onclick=()=>{
				full_screen_view.querySelector("img").src = imageLink;
				full_screen_view.style.width = "100vw";
				full_screen_view.style.height = "100vh";
			}

		}
		image[index] = newImage;

		var dotX = document.createElement("div");
		dotX.classList.add("dotX");
		var dot = document.createElement("div");
		dot.classList.add("dot");
		dotX.appendChild(dot);
		dots.appendChild(dotX);
		dotting[index] = dotX;
		dotting[0].querySelector(".dot").style.boxShadow = "0px 0px 0px 0px #ff00b1, 0px 0px 4px 1px #ff00b1, 0px 0px 8px 2px #ff00b1, 0px 0px 20px 4px #ff00b1";
	})

	var buttons = document.createElement("div");
	buttons.classList.add("buttons");
	var next = document.createElement("div");
	next.classList.add("next");
	next.classList.add("icon");
	buttons.appendChild(next);
	var prev = document.createElement("div");
	prev.classList.add("prev");
	prev.classList.add("icon");
	buttons.appendChild(prev);

	slider.appendChild(images);
	if (extras.buttons == true) {
		slider.appendChild(buttons);
	}
	if (extras.dots == true) {
		slider.appendChild(dots);
	}
	div.appendChild(slider);
	div.appendChild(full_screen_view);


	var index = 1;
	var lastInterval;
	let pressed = false;
	let startX = 0;
	let x = 0;
	let lastX = 0;


	var firstClone = image[0].cloneNode(true);
	var lastClone = image[image.length - 1].cloneNode(true);
	images.append(firstClone);
	images.prepend(lastClone);
	image = images.querySelectorAll(".image");


	images.style.transform = `translateX(${-slideWidth * index}px)`;

	const startSlide=(e)=>{
		if (interval != 3210) {
			lastInterval = setInterval(()=>{
				nextSlide();
			}, interval);
		}			
	}
	const nextSlide=(e)=>{
		if (index >= (image.length - 1)){return false;}	
		index++;
		images.style.transform = `translateX(${-slideWidth * index}px)`;
		images.style.transition = `all ${interval/3000}s ease-in-out`;
	}
	const prevSlide=(e)=>{
		if (index <= 0){
			index = image.length - 2;
			images.style.transition = `none`;
		}else{
			index--;
		}		
		images.style.transform = `translateX(${-slideWidth * index}px)`;
	}
	const slideMove = e =>{
		if (!pressed) {
			return false;
		}
		x = e.pageX;
		if(((image.length - 2) == index) && (lastX - x) > 0){
			return false;
		}else if((1 == index) && (lastX - x) <= 0){
			return false;
		}else{
		
		}

		images.style.transition = `all ${interval/30000}s ease-in-out`;
		images.style.transform = `translateX(${x - startX}px)`;
	}
	const sliderUp = e=>{
		clearInterval(lastInterval);
		let increase = -0.25;
		if ((lastX - x) > 0) {
			increase = 0.25;
		}
		index = Math.round(((-1*images.style.transform.match(/(-?[0-9\.]+)/g)[0]) / slideWidth) + increase);
		slider.style.cursor = "grab";
		pressed = false;
		index --;
		nextSlide();
	}
	div.onmouseleave=()=>{
		sliderUp();
		startSlide();
	}
	const sliderDown=e=>{
		startX = e.pageX - images.style.transform.match(/(-?[0-9\.]+)/g)[0];
		slider.style.cursor = "grabbing";
		lastX = e.pageX;
		pressed = true;
	}

	dotting.forEach((dots, i)=>{
		dots.onclick=()=>{
			index = i + 1;
			images.style.transform = `translateX(${-slideWidth * index}px)`;
		}
	})

	images.ontransitionstart=()=>{
		dotting.forEach((dots, index)=>{
			dots.querySelector(".dot").style.boxShadow = "";
		})
		if (imageLinks.length >= index && index > 0) {
			dotting[index-1].querySelector(".dot").style.boxShadow = "0px 0px 0px 0px #ff00b1, 0px 0px 4px 1px #ff00b1, 0px 0px 8px 2px #ff00b1, 0px 0px 20px 4px #ff00b1";
		}else if(index == 0){
			dotting[imageLinks.length-1].querySelector(".dot").style.boxShadow = "0px 0px 0px 0px #ff00b1, 0px 0px 4px 1px #ff00b1, 0px 0px 8px 2px #ff00b1, 0px 0px 20px 4px #ff00b1";
		}else{
			dotting[0].querySelector(".dot").style.boxShadow = "0px 0px 0px 0px #ff00b1, 0px 0px 4px 1px #ff00b1, 0px 0px 8px 2px #ff00b1, 0px 0px 20px 4px #ff00b1";
		}
	}
	images.ontransitionend = ()=>{
		if (image[index] == firstClone) {
			images.style.transition = `none`;
			index = 1;
			images.style.transform = `translateX(${-slideWidth * index}px)`;
		}else{
			images.style.transition = `all ${interval/3000}s ease-in-out`;
		}
	}

	next.onclick = (e)=>{
		nextSlide();
	}
	prev.onclick= (e)=>{
		prevSlide();
	}



	//dragging event



	slider.onmouseenter=(e)=>{
		clearInterval(lastInterval);
		slider.style.cursor = "grab";
		pressed = false;
	}
	slider.onmouseleave=(e)=>{
		pressed = false;
		startSlide();
	}
	slider.onmousedown=(e)=>{
		sliderDown(e)
	}
	slider.onmouseup=e=>{
		sliderUp(e)
	}
	slider.onmousemove=e=>{
		slideMove(e);
	}


	slider.ontouchend=(e)=>{
		if (e.changedTouches[0]) {
			sliderUp(e.changedTouches[0]);
			startSlide();
		}
		
	}
	slider.ontouchstart=e=>{
		if (e.touches[0]) {
			clearInterval(lastInterval);
			sliderDown(e.touches[0])
		}
		
	}
	slider.ontouchmove=e=>{
		if (e.touches[0]) {
			slideMove(e.touches[0]);
		}
		
	}



	startSlide();
}

function href(link){
	if (link != null) {
		window.location.href = link;
	}	
}
function tab(link){
	if(link != null){
		window.open(link);
	}
}


function onscreen(element){
	return (element.getBoundingClientRect().y > 0 && element.getBoundingClientRect().y < 50);
}

function change_text_settings(input, result, which, is_pass){
	result = document.querySelector(result);
	result.innerHTML = "Please wait while changing...";
	input.disabled = true;
	input.style = "border:1px solid gray; color: gray;";
	loadLink('/json.php', [['name', which], ['value', input.value], ['is_pass', is_pass],['change_text_settings','true']]).then(db_result=>{
		result.innerHTML = db_result.settings_changed;
		setTimeout(()=>{
			input.disabled = false;
			input.style = "";
		}, 3000)
	});
}


function newsletterSubscription1(input, button){
	if (input.value == "" || validateEmail(input.value) == null) {
		alert("Please enter an valid email");
		input.focus();
	}else{
		button.disabled = true;
		loadLink('/json.php', [['newsletter_subscription',input.value],['bool','false']]).then(result=>{
			if (result.newsletter_subscription == 1) {
				alert("successfully subscribed!");
				setTimeout(() => {
					button.disabled = true;
					input.innerHTML = "";
				}, 3000);
			}else if (result.newsletter_subscription == 2) {
				alert("Server is busy...");
				input.focus();
				setTimeout(() => {
					button.disabled = false;
				}, 3000);
			}else if (result.newsletter_subscription == 3) {
				alert("Already registered!");
				setTimeout(() => {
					button.disabled = true;
				}, 3000);
			}else if (result.newsletter_subscription == 4) {
				alert("Invalid Email");
				input.focus();
				setTimeout(() => {
					button.disabled = false;
				}, 3000);
			}else{
				alert("Internet is unstable!");
				input.focus();
				setTimeout(() => {
					button.disabled = false;
				}, 3000);
			}
		});
	}
	
}

function window_onload(){
	window.onpopstate();
	if (document.querySelector('div.require_pass')) {
		function ask_admin_pass(msg){
			msg = msg || "Enter password";
			var x = prompt(msg);
			if (x == null) {
				window.location.assign("/");
			}else if(x == false){
				window.location.assign("/");
			}else{
				loadLink('/json.php', [['admin_pass_enter', x],['bool','false']]).then(result_admin_pass=>{
					if (result_admin_pass.login && result_admin_pass.login == "reload") {
						window.location.reload();
					}else if (result_admin_pass.login){
						ask_admin_pass(result_admin_pass.login);
					}else{
						ask_admin_pass("Check your connection and try again letter...");
					}
				})
			}
		}
		if (body = document.querySelector('body')) {
			if ((body.style.background = "black") && (body.style.color = "white")) {
				ask_admin_pass();
			}
		}
	}
}




window.onpopstate = (e) =>{ 
	var search = window.location.search;
	var pathname = window.location.pathname;
	var content = document.querySelector(".content");
	if(document.getElementById('style1')){
		document.getElementById('style1').remove();
	}

	pathname = pathname.split("/")[1];

	if(pathname != last_url){
		last_url = pathname;
		checkPathName(pathname);
	}
}


function setState(link, title){
	var data = [];
	if (title != '') {
		data.title = title;
	}
	window.history.pushState(link, null, link);
	var pathname = window.location.pathname;
	pathname = pathname.split("/")[1];


	if(title){
		document.querySelectorAll("title").forEach(item=>{
			if (data.title) {
				if (data.title != "") {
					item.innerHTML = data.title;
					item.title = data.title;				
				}			
			}
		});
	}
	

	window.onpopstate();
}


function checkPathName(path){
	console.log(path);
	if (path == '') {
		window.scrollTo({
			top: 0,
			left: 0,
			behavior: 'smooth'
		});
	}else if(path == "photos"){
		document.querySelector("div.photos view").scrollIntoView({ behavior: 'smooth' });
	}else if(path == "about-me"){
		document.querySelector("div.about-me view").scrollIntoView({ behavior: 'smooth' });
	}else if(path == "events"){
		document.querySelector("div.events view").scrollIntoView({ behavior: 'smooth' });
	}else if(path == "contact-me"){
		document.querySelector("div.contact-me view").scrollIntoView({ behavior: 'smooth' });
	}
}

function forceDownload(href) {
	var anchor = document.createElement('a');
	anchor.href = href;
	anchor.download = href;
	document.body.appendChild(anchor);
	anchor.click();
	document.body.removeChild(anchor);
}