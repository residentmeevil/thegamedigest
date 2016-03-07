      <?php $item = $page->children()->first() ?>

      <?php if($image = $item->images()->sortBy('sort', 'asc')->first()): ?>
          <section class="issue" style="background-image: url(<?php echo $image->url() ?>);">
                  <div class="issue__container">
                    <div class="col-sm-8 col-sm-offset-4">
                      <h1 class="issue__title"><?php echo $item->title() ?></h1>
                    </div>
                  </div>
          </section>

      <?php endif ?>

      <?php foreach($page->grandChildren()->offset(1) as $item): ?>

      <?php endforeach ?>


    </div>
  </div>
</div>
