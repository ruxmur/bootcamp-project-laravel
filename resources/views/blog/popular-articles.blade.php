<section id="popular-articles">
    <h3>Most popular</h3>
    <ul articles-list>
        <template popular-article-template>
            <li >
                <div class="card mb-3 position-relative" style="max-width: 540px;">
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                          data-views-counter>
                    </span>
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="..." class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" data-title></h5>
                                <p class="card-text" data-excerpt>This is a wider card with supporting text below as a
                                    natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </template>
    </ul>
</section>

