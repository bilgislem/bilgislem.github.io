---
layout: default
---
<div class="row">
<div class="col-12">
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="---" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="---" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="---" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>

<div class="row">
	
	
		 {% for post in site.posts %}
		 <div class="col-4 mt-2">
		<div class="card" style="width: 18rem;">
		  <img src="https://upload.wikimedia.org/wikipedia/commons/1/14/No_Image_Available.jpg?20200913095930" class="card-img-top" alt="...">
		  <div class="card-body">
			<h5 class="card-title">{{ post.title }}</h5>
			<div class="card-text">
				 {{ post.excerpt }}
			</div>
			<a href="{{ post.url }}" class="btn btn-primary">Devamını Oku</a>
		  </div>
		</div>
		</div>
		 {% endfor %}
	
</div>
