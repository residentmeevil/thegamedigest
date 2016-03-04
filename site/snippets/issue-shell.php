<div class="container">
  <div class="row">
    <div class="col-md-12">

      <ul>
        <li>
           <?php $item = $page->grandChildren()->first() ?>
           <h1>First item</h1>
        </li>

        <?php foreach($page->grandChildren()->offset(1) as $item): ?>
          <li>
            <h1>Every other item</h1>
          </li>
        <?php endforeach ?>
      </ul>


    </div>
  </div>
</div>
