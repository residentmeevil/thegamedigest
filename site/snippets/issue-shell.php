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

        <section class="article-container">
            <div class="container">

      <?php foreach($page->grandChildren() as $item): ?>

            <div class="row article">
              <a href="<?php echo $item->source_url() ?>">
                <div class="col-sm-5">
                  <div class="relative">
                  <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): ?>
                    <img src="<?php echo $image->url() ?>" alt="" class="responsive-image article__image" />
                  <?php endif ?>
                    <span class="article__type"><i class="fa fa-<?php echo $item->type() ?>"></i></span>
                  </div>
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

    <section>
      <div class="container">
        <div class="row ">
          <div class="col-xs-12">
            <div class="editors-container">
              <?php $item = $page->children()->first() ?>

              <h2><?php echo $item->editor_title() ?></h2>

              <?php echo $item->editor_text()->kirbytext() ?>
            </div>
          </div>
        </div>
      </div>
    </section>


    </div>
  </div>
</div>
