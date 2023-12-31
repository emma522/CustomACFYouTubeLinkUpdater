<!-- Include JavaScript file -->
<script src="responsive-yt-shorts-carousel.js"></script>

<!-- YouTube Shorts Watch Now Section -->
<section>
  <div class="container">
    <h2 class="headline-home-purple yt-short-title">WATCH</h2>
  </div>
  <div class="container yt-shorts-carousel-container">
    <div class="yt-shorts-carousel">
      <?php if (have_rows("youtube_shorts_playlist")): ?>
        <?php $index = 0; ?>
        <?php while (have_rows("youtube_shorts_playlist")): the_row(); ?>
          <?php if ($index === 0): ?>
            <div class="yt-short">
              <div class="yt-short-headline"><?php echo get_sub_field("youtube_short_headline"); ?></div>
              <a href="https://youtube.com/embed/<?php echo get_sub_field("youtube_short_id"); ?>?autoplay=1&amp;mute=1&amp;loop=5"
                 id="youtube-<?php echo get_sub_field("youtube_short_id"); ?>"
                 data-toggle="modal"
                 data-target="#yt-short-modal-<?php echo get_sub_field("youtube_short_id"); ?>">
                <iframe class="embed-yt-short"
                        src="https://youtube.com/embed/<?php echo get_sub_field("youtube_short_id"); ?>?autoplay=1&amp;mute=1&amp;loop=1"
                        allowfullscreen
                        autoplay></iframe>
                <div class="yt-short-overlay"></div>
              </a>
            </div>
          <?php else: ?>
            <div class="yt-short">
              <img loading="lazy" class="yt-short-play-btn"
                   src="<?php echo get_template_directory_uri() . "/assets/images/TR2023/widgets/yt-shorts-play-btn.png"; ?>">
              <div class="yt-short-headline"><?php echo get_sub_field("youtube_short_headline"); ?></div>
              <a href="#yt-short-modal-<?php echo get_sub_field("youtube_short_id"); ?>"
                 id="youtube-<?php echo get_sub_field("youtube_short_id"); ?>"
                 data-toggle="modal"
                 data-target="#yt-short-modal-<?php echo get_sub_field("youtube_short_id"); ?>">
                <img loading="lazy" src="<?php echo get_sub_field("youtube_short_thumbnail"); ?>">
                <div class="yt-short-overlay"></div>
              </a>
            </div>
          <?php endif; ?>
          <?php $index++; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <?php if (have_rows("youtube_shorts_playlist")): ?>
      <?php while (have_rows("youtube_shorts_playlist")): the_row(); ?>
        <!-- YouTube Video Modal -->
        <div class="modal fade" id="yt-short-modal-<?php echo get_sub_field("youtube_short_id"); ?>"
             tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-body">
                <button style="padding-top: 25px;" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <br>
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="640" height="360"
                          src="https://youtube.com/embed/<?php echo get_sub_field("youtube_short_id"); ?>"
                          title="YouTube video player"
                          frameborder="0"
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                          allowfullscreen=""></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- YouTube Video Modal -->
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
<!-- End YouTube Shorts Watch Now Section -->
