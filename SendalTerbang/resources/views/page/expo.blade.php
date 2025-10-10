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
