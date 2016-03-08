      <?php $item = $page->children()->first() ?>

      <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): ?>
          <section class="issue" style="background-image: url(<?php echo $image->url() ?>);">
                  <div class="issue__container">
                    <div class="col-sm-8 col-sm-offset-4">
                      <h1 class="issue__title"><?php echo $item->title() ?></h1>
                      <h2 class="issue__date"><?php echo $item->issue_date() ?></h2>
                    </div>
                  </div>
          </section>

      <?php endif ?>

        <section>
            <div class="container">

      <?php foreach($page->grandChildren() as $item): ?>

            <div class="row article">
              <a href="<?php echo $item->source_url() ?>">
                <div class="col-sm-5">
                  <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): ?>
                    <img src="<?php echo $image->url() ?>" alt="" class="responsive-image article__image" />
                    <span class="article__type"><?php echo $item->type() ?></span>
                  <?php endif ?>
                </div>

                <div class="col-sm-7">
                  <h3 class="article__title"><?php echo $item->title() ?></h3>
                  <p class="article__text"><?php echo $item->description() ?></p>

                  <div class="article__meta">
                    <span class="article__author"><?php echo $item->author() ?></span>
                    <span class="article__source"><?php echo $item->source() ?></span>
                  </div>

                </div>
              </a>
            </div>

      <?php endforeach ?>

      </div>
    </section>


    </div>
  </div>
</div>
