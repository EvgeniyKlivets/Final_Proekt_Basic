<?php if(empty($content['home'])&& !empty($content['home']['slides'])): ?>
<section id="home">
    <div class="container">
        <div class="row banner-row  d-flex align-items-center justify-content-start">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <?php for ($i = 0; $i < count ($content['home']['slides']); $i++): ?>
                <button type="button" 
                  data-bs-target="#carouselExampleIndicators" 
                  data-bs-slide-to="<?= $i ?>" 
                  class="<?= ($i == 0 ? 'active' :'') ?>" 
                  aria-current ="true"
                  aria-label="Slide <?= ($i +1) ?>">
                </button>
                <?php endfor; ?>
            </div>
                <div class="carousel-inner">
                    <?php foreach ($content['home']['slides'] as $key => $slide): ?>
                    <div class="carousel-item active <?= ($key == 0 ? 'active' : '') ?>">
                       <div class="container">
                          <div class="row">
                              <div class="col-lg-7 banner-slide-container">
                                  
                                  <h6><?= $slide['title'] ?></h6>
                                  <h1 class="information">
                                      <?= $slide['description'] ?></h1>
                                  <a href="<?= $slide['button']['href'] ?>" 
                                  class="btn btn-outline-primary text-uppercase"> 
                                 <?= $slide['button']['text'] ?></a>
                                  
                              </div>
                            
                          </div>
                      </div>
                      <?php endforeach; ?>
                 </div>
              </div>
            </div>
 </section>
<?php endif; ?>