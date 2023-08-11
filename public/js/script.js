// Navbar Scroll effect
var prevScrollpos = window.scrollY;

window.onscroll = function () {
  var currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("header").style.top = "0";
  } else {
    document.querySelector("header").style.top = "-80px";
  }
  prevScrollpos = currentScrollPos;
};

// Navbar Scroll effect ends

// Navbar accordion starts here

var acc = document.getElementsByClassName("nav");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    panel.classList.toggle("hidden");
  });
}
// Navbar accordion ends here

// Slider Js Part
var glide01 = new Glide('.glide-01', {
  type: 'slider',
  perView: 1,
  animationDuration: 300,
  gap: 0,
  classes: {
      activeNav: '[&>*]:bg-slate-700',
  },

});

glide01.mount();


// Hamburger button toggle starts
function Menu(e) {

  let list = document.getElementById('dropdownMenu');
  e.name === 'menu' ? (e.name = "close", list.classList.remove('hidden'),document.body.style.overflow = 'hidden') : (e.name = "menu", list.classList.add('hidden'),document.body.style.overflow = 'auto')
}


// Hamburger button toggle ends


// Sidebar effect starts

$(function () {
  var top =
    $("#sidebar").offset().top -
    parseFloat($("#sidebar").css("marginTop").replace(/auto/, 0));
  var footTop =
    $("#footer").offset().top -
    parseFloat($("#footer").css("marginTop").replace(/auto/, 0));

  var maxY = footTop - $("#sidebar").outerHeight();

  $(window).scroll(function (evt) {
    var y = $(this).scrollTop();
    if (y > top - 8) {
      if (y < maxY) {
        $("#sidebar").addClass("fixed").removeAttr("style");
      } else {
        $("#sidebar")
          .removeClass("fixed")
          .css({
            position: "absolute",
            top: maxY - top + "px",
          });
      }
    } else {
      $("#sidebar").removeClass("fixed");
    }
  });
});

// Sidebar effect ends

// Heart Color Change starts here
var heartWhite = document.getElementById("heart-white");
var heartRed = document.getElementById("heart-red");

heartRed.onclick = function () {
  this.style.display = "none";
  heartWhite.style.display = "block";
};
heartWhite.onclick = function () {
  this.style.display = "none";
  heartRed.style.display = "block";
};
// Heart Color Change ends here

// Read the whole descripiton toggle starts here
var readMore = document.getElementById("read-more");
var readLess = document.getElementById("read-less");
var moreDetails = document.getElementById("more-details");
var shortDetails = document.getElementById("short-details");

readMore.onclick = function () {
  this.style.display = "none";
  moreDetails.style.display = "inline";
  shortDetails.style.display = "none";
  readLess.style.display = "flex";
};
readLess.onclick = function () {
  this.style.display = "none";
  moreDetails.style.display = "none";
  shortDetails.style.display = "block";
  readMore.style.display = "flex";
};
// Read the whole descripiton toggle ends here

// Mobile View Setting and Nearby starts here

var settingMb = document.getElementById("setting-mb");
var nearbyMb = document.getElementById("nearby-mb");
var settingInfoMb = document.getElementById("setting-info-mb");
var nearbyInfoMb = document.getElementById("nearby-info-mb");

settingMb.onclick = function () {
  this.className =
    "pb-2 mr-9 text-base font-bold text-gray-700 border-b  border-gray-700 hover:cursor-pointer";
  nearbyMb.className =
    "pb-2 mr-9 text-base font-bold  text-gray-500 hover:cursor-pointer";
  nearbyInfoMb.style.display = "none";
  settingInfoMb.style.display = "flex";
};
nearbyMb.onclick = function () {
  this.className =
    "pb-2 mr-9 text-base font-bold text-gray-700 border-b  border-gray-700 hover:cursor-pointer";
  settingMb.className =
    "pb-2 mr-9 text-base font-bold  text-gray-500 hover:cursor-pointer";
  nearbyInfoMb.style.display = "block";
  settingInfoMb.style.display = "none";
};

// Mobile View Setting and Nearby ends here
var franceXl = document.getElementById("frace-xl");
var europeXl = document.getElementById("europe-xl");
var otherXl = document.getElementById("other-xl");
var franceXldiv = document.getElementById("frace-xl-div");
var europeXldiv = document.getElementById("europe-xl-div");
var otherXldiv = document.getElementById("other-xl-div");

franceXl.onclick = function () {
  franceXldiv.classList.add("flex");
  franceXldiv.classList.remove("hidden");
  europeXldiv.classList.add("hidden");
  otherXldiv.classList.add("hidden");
  this.className="text-white hover:cursor-pointer bg-[#1c5050] mr-4 px-4 py-1 rounded-full text-xl";
  europeXl.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"
  otherXl.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"

}
europeXl.onclick = function () {
  europeXldiv.classList.add("flex");
  europeXldiv.classList.remove("hidden");
  franceXldiv.classList.add("hidden");
  otherXldiv.classList.add("hidden");
  this.className="text-white hover:cursor-pointer bg-[#1c5050] mr-4 px-4 py-1 rounded-full text-xl";
  franceXl.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"
  otherXl.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"

}
otherXl.onclick = function () {
  otherXldiv.classList.add("flex");
  otherXldiv.classList.remove("hidden");
  europeXldiv.classList.add("hidden");
  franceXldiv.classList.add("hidden");
  this.className="text-white hover:cursor-pointer bg-[#1c5050] mr-4 px-4 py-1 rounded-full text-xl";
  europeXl.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"
  franceXl.className = "text-[#cacaca] hover:cursor-pointer border border-[#cacaca]  mr-4 px-4 py-1 rounded-full text-xl"

}



// Booking accordion starts here

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}
// Booking accordion ends here
