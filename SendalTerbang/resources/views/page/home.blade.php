<div class="void-bg bg-welcome">.</div>

<div class="welcome">
    <h1>Repository</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, ratione dolor consequatur ab atque at consectetur in inventore veritatis neque tenetur voluptas? Deleniti in inventore voluptate quisquam eveniet impedit laudantium.</p>
</div>

<div class="void-bg bg-topProject">.</div>

<div class="topProject">
    <h1>Top 3 Project By Rate : </h1>

    <div class="buttonSlider">
        <button class="sliderL"><i class="bi bi-arrow-left-circle-fill"></i></button>
        <button class="sliderR"><i class="bi bi-arrow-right-circle-fill"></i></button>
    </div>

    <div class="projectSelected">
        <img class="projectImg" src="https://cdn0-production-images-kly.akamaized.net/czvPCqcWZCj6j9PF5h5sejmxuHQ=/1200x675/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/808934/original/063268600_1423561900-dragonball-wallpapers-129-dragon-ball-2011-widescreen-free-hd-2010-new-year-pics.jpg" >
        <div class="projectText">
            <h1 class="projectTitle" >Project Title</h1>
            <p class="projectDesc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, quod omnis! Praesentium facilis repellat nam dicta exercitationem omnis quaerat consectetur. Delectus tenetur unde aspernatur eos expedita impedit tempora voluptatum perspiciatis.</p>
        </div>
    </div>

</div>

<div class="projectContainer">
    <h1>Project (10) : </h1>

    <div class="project-list">
        @for($i=0; $i<10; $i++)
            <div class='project-card'>
                <a class="project-link" href="/">
                    <img class="project-image" src="images/chips.jpg" alt="Inituh gambar project" style="grid-area: image;">
                
                    <h1 class="project-title" style="grid-area: title;" >Judul Projectnya</h1>
                    <p class="project-desc" style="grid-area: desc;" >Deskripsi singkat projectnya</p>
                        
                    <p class="project-rate" style="grid-area: rate;" ><i class="bi bi-star-fill"></i>  4/5</p>
                </a>
            </div>
        @endfor
    </div>

    <h1 class="more"><a href="/expo">Lihat Lainnya -></a></h1>
</div>
