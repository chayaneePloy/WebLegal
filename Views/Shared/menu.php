<header class="width-100 position-fixed top bg-navbar">
    <section class="width-49 inline-block">
        <h1 id="logo">Clearvision Legal</h1>
    </section>
    <section class="width-49 inline-block">
        <ul id="menu" class="menu-style no-margin "> 
     
                <div class="dropdown">
        <button id="myBtn" class="dropbtn">Menu</button>
                <div id="myDropdown" class="dropdown-content">
                <a href ="#slider">Home</a>
                <a href ="#about">About</a>
                <a href="#service-container">Services</a>
                <a href="#contact">Contact</a>
                </div>
                </div>
        </ul>

            <div id="sub-menu">
                <nav class="text-right">
                    <a href="#slider" class="main-menu current" onclick=" return ScrollTo('slider')">Home</a>
                    <a href="#about" class="main-menu" onclick=" return ScrollTo('about')">About</a>
                    <a href="#service-container" class="main-menu" onclick=" return ScrollTo('service-container')">Services</a>
                    <a href="#contact" class="main-menu" onclick=" return ScrollTo('contact')">Contact</a>
                </nav>
            </div>
        </ul>
    </section>
</header>
<script>
document.getElementById("myBtn").onclick = function() {myFunction()};
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
</script>