<div class="row pagination blog-pag">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div>
              <?php if($max_pages > 1): ?>
              <ul class="pagination blog-pag">
                <?php for($i=1; $i <= $max_pages; $i++): ?>
                  <li class="page-item">
                    <a class="page-link <?= $i == $current_page ? "active":"" ?>" href="<?= get_pagenum_link($i) ?>">
                      <?= $i ?>
                    </a>
                  </li>
                <?php endfor; ?>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item">
                  <?= styled_next_posts() ?>
                </li>
              </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>